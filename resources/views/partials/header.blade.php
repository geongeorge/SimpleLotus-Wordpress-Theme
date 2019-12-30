<header class="banner">
  <div class="container">
    <div>
      <a class="brand text-2xl text-white font-extrabold" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    </div>
    <div>
      <a class="text-yellow-600 hover:text-yellow-300 text-gray-300 py-1 px-2 rounded inline-flex items-center " href="{{ home_url('/') }}">
        <svg class="fill-current w-4 h-4 ml-1 mr-2 inline" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12,3c0,0-6.186,5.34-9.643,8.232C2.154,11.416,2,11.684,2,12c0,0.553,0.447,1,1,1h2v7c0,0.553,0.447,1,1,1h3  c0.553,0,1-0.448,1-1v-4h4v4c0,0.552,0.447,1,1,1h3c0.553,0,1-0.447,1-1v-7h2c0.553,0,1-0.447,1-1c0-0.316-0.154-0.584-0.383-0.768  C18.184,8.34,12,3,12,3z"/></svg>
        home
      </a>
    </div>
    <div class="mt-5">
      <div>
        <a class="text-blue-600 hover:bg-blue-300 text-gray-300 py-1 px-2 rounded inline-flex items-center text-sm" href="https://twitter.com/geongeorgek" target="_blank" rel="nofollow noopener">
          @include('partials.twitter-logo')
          <span>follow @geongeorgek</span>
        </a>
      </div>
      <div>
        <a class="text-pink-600 hover:bg-pink-300 text-gray-300 py-1 px-2 rounded inline-flex items-center text-sm" href="https://www.instagram.com/geongeorgek/" target="_blank" rel="nofollow noopener">
          @include('partials.ig-logo')
          <span>follow @geongeorgek</span>
        </a>
      </div>
    </div>

    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
