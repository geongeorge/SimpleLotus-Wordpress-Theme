<!doctype html>
<html {!! get_language_attributes() !!} class="bg-gray-900">
  @include('partials.head')
  <body @php body_class() @endphp>
  <div class="container mx-auto bg-gray-900 text-white px-2 md:px-6 lg:px-8 mt-16">
    <div class="w-full flex flex-wrap-reverse">
      <div class="w-full md:w-1/4">
        @php do_action('get_header') @endphp
        @include('partials.header')
      </div>
      <div class="w-full md:w-3/4 md:pr-8 lg:pr-12" role="document">
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
