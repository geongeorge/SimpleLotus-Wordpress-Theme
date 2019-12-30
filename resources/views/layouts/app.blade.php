<!doctype html>
<html {!! get_language_attributes() !!} class="bg-gray-900">
  @include('partials.head')
  <body @php body_class() @endphp>
  <div class="container mx-auto bg-gray-900 text-white sm:px-2 md:px-4 lg:px-6 mt-16">
    <div class="w-full flex flex-wrap-reverse">
      <div class="w-1/4">
        @php do_action('get_header') @endphp
        @include('partials.header')
      </div>
      <div class="w-3/4" role="document">
        <div class="content">
          <main class="main">
            @yield('content')
          </main>
          @if (App\display_sidebar())
            <aside class="sidebar">
              @include('partials.sidebar')
            </aside>
          @endif
        </div>
      </div>
    </div>
  </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
