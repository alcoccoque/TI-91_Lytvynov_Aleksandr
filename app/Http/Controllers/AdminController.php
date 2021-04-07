<?php

namespace Nature\Http\Controllers;

use Illuminate\Http\Request;
use Nature\User;
use Nature\City;
use Nature\Post;
use Nature\Place;
use Nature\Feedback;
use Nature\Comment;
use Session;

class AdminController extends Controller
{

    public function __construct(){

        $this->middleware('auth');

    }

    public function admin(){

        $allfeedbacks = Feedback::all();
        $feedbacks = Feedback::orderby('id', 'desc')->paginate(10);

        // Return the average rating

        $_count = count($allfeedbacks);
        $sum = 0;
        foreach ($allfeedbacks as $feedback){
            $sum+= $feedback->rating;
        }
        $score = $sum/$_count;

        return view('admin')->with('feedbacks', $feedbacks)->with('score', $score);
    }

    public function createCity(){
        return view('admin.createCity');
    }

    public function postCreateCity(Request $request){

      $this->validate($request, [
        'name' => 'required|max:191',
        'image' => 'required|max:191',
        'description' => 'required',
        'lat' => 'required',
        'lng' => 'required'
      ]);

        $city = new City();

        $city->name = $request['name'];
        $city->image = $request['image'];
        $city->description = $request['description'];
        $city->lat = $request['lat'];
        $city->lng = $request['lng'];

        $city->save();
        Session::flash('citycreated', 'You have successfully created a city');
        return redirect()->back();

    }

    public function createPlace(){

        $cities = City::all();

        return view('admin.createPlace')->with('cities', $cities);
    }

    public function postCreatePlace(Request $request){

      $this->validate($request, [
        'name' => 'required|max:191',
        'information' => 'required',
        'city_id' => 'required',
        'image' => 'required'
      ]);

        $place = new Place();

        $place->name = $request['name'];
        $place->information = $request['information'];
        $place->city_id = $request['city_id'];
        $place->image = $request['image'];

        $place->save();
        Session::flash('placecreated', 'You have successfully created a place');
        return redirect()->back();

    }

    public function users(){

        $users = User::orderby('id', 'desc')->paginate(20);

        return view('admin.users')->with('users', $users);

    }

    public function deleteUser($id){

        $user = User::find($id);
        $user->delete();

        //Delete the related entries
        $posts = Post::where('user_id', $id);
        $posts->delete();
        $comments = Comment::where('user_id', $id);
        $comments->delete();
        $feedbacks = Feedback::where('user_id', $id);
        $feedbacks->delete();

        Session::flash('deleteUser', 'User has been deleted');
        return redirect()->back();

    }

    public function promoteUser($id){

        $user = User::find($id);
        $user->type = 'admin';
        $user->save();

        return redirect()->back();
    }

    public function demoteUser($id){

        $user = User::find($id);
        $user->type = 'default';
        $user->save();

        return redirect()->back();
    }
}
