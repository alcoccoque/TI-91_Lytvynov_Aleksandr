<?php

namespace Nature\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Nature\City;
use Nature\User;
use Nature\Comment;
use Session;

class CitiesController extends Controller
{
    public function index(){
        $cities = DB::table('cities')->paginate(5);
        return view('city.cities')->with('cities', $cities);
    }

    public function show($id){

        $city = City::find($id);

        if ($city !== null){
            $places = City::find($id)->places;

            if (Auth::guest()){
                return view('city.show')->with('city', $city)->with('places', $places);
            }

            $user = Auth::user();
            $lcities = $user->cities()->get();
            /*
                Creating the logic to see if the current user
                has already liked the specific city
            */
            $hadLiked = FALSE;
            foreach($lcities as $lcity){
                if($lcity->id === $city->id){
                    $hadLiked = TRUE;
                    break;
                }
            }

            // Showing the total comments made by this city desc order

            $comments = City::find($id)->comments()->orderby('id', 'desc')->get();

            return view('city.show')->with('city', $city)->with('places', $places)->with('liked', $hadLiked)->with('comments', $comments);
        }

        return view('city.notfound');
    }

    public function like($id){

        // Check if the user is Authenticated
        // Else we may encounter strange errors

        if (!Auth::guest()){

            $city = City::find($id);
            $user = Auth::user();

            // Check if the record already exist in the database   
            if (DB::table('city_user')->where([
                ['city_id', '=', $city->id],
                ['user_id', '=', $user->id]
            ])->exists()){
                Session::flash('like_exist', 'You have already liked the city');
                return redirect()->route('show.city', $city->id);
            }
            else{
                $user->cities()->attach($city);

                // Update the popularity column
                $city->popularity = $city->popularity + 1;
                $city->save();
                return redirect()->back();
            }
        }

        return "Unauthorized Page";

    }

    public function unlike($id){

        if (!Auth::guest()){
            $city = City::find($id);
            $user = Auth::user();

            if (DB::table('city_user')->where([
                ['city_id', '=', $city->id],
                ['user_id', '=', $user->id],
            ])->doesntExist()){
                return redirect()->back();
            }
            else{
                $user->cities()->detach($city);

                //Update the popularity column
                $city->popularity = $city->popularity - 1;
                $city->save();
                return redirect()->back();
            }
        }

        return "Unauthorized Page";
    }

    public function postComment(Request $request, $id){
        $user = Auth::user();

        $this->validate($request, [
          'title' => 'required|max:191',
          'body' => 'required'
        ]);

        $comment = new Comment();

        $comment->title = $request['title'];
        $comment->body = $request['body'];
        $comment->user_id = $user->id;
        $comment->city_id = $id;

        $comment->save();
        Session::flash('comment', 'Comment Posted!');
        return redirect()->back();
    }

    public function byPopularity(){
      $cities = City::orderby('popularity', 'desc')->get();
      return view('city.byPopularity')->with('cities', $cities);
    }
}
