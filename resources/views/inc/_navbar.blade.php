<header class="headerMenu" id="headerMenu">         
		  <ul class="menu">
            <li><a href="{{route('cities')}}" class="green accent-4">Туры</a></li>
            @if (Auth::guest())
              <li><a href="{{route('login')}}">Войти</a></li>
              <li><a href="{{route('signup')}}">Регистрация</a></li>
            @endif
            @if (!Auth::guest())
              <li><a href="{{route('news.index')}}" class="blue accent-3">Новости</a></li>
              <li><a href="{{route('dashboard')}}">Привет {{ Auth::user()->username }}</a></li>
              <li><a href="{{route('logout')}}">Выйти</a></li>
              @if (auth()->user()->isAdmin())
                <li><a href="{{route('admin')}}" class="grey darken-1">Панель админа</a></li>
              @endif
            @endif
      </ul>
</header>
