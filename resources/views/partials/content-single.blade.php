<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title text-5xl text-white font-black">{!! get_the_title() !!}</h1>
    <div class="py-12">
      <span class="font-bold text-gray-600">
        Published
        <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date('M j, Y') }}</time>
      </span>
    </div>
  </header>
  <div class="entry-content text-lg">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php //comments_template('/partials/comments.blade.php') @endphp
</article>
