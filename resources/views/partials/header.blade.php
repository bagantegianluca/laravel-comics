<header>

    <div class="header-top">
        <div class="container">
          <ul>
            <li>DC Power Visa</li>
            <li>Additional DC Sites</li>
          </ul>
        </div>
      </div>
      <div class="header-bottom">
        <div class="container">
          <img class="logo" src="{{ Vite::asset('resources/images/dc-logo.png') }}">
          <ul>
            <li><a href="{{route('characters')}}" class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}">Characters</a></li>
            <li><a href="{{route('comics')}}" class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}}">Comics</a></li>
            <li><a href="{{route('movies')}}" class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}">Movies</a></li>
            <li><a href="{{route('tv')}}" class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}}">Tv</a></li>
            <li><a href="{{route('games')}}" class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}">Games</a></li>
            <li><a href="{{route('collectibles')}}" class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}">Collectibles</a></li>
            <li><a href="{{route('videos')}}" class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}">Videos</a></li>
            <li><a href="{{route('fans')}}" class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}">Fans</a></li>
            <li><a href="{{route('news')}}" class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}">News</a></li>
            <li><a href="{{route('shop')}}" class="{{Route::currentRouteName() === 'shop' ? 'active' : ''}}">Shop</a></li>
          </ul>
          <div class="search">Search</div>
        </div>
      </div>
    
    <img class="jumbotron" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}">
    
</header>