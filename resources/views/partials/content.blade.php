<article @php post_class() @endphp>
<div class="px-2 rounded py-3 border-gray-800 border-b hover:bg-gray-800">
  <a class="text-white" href="{{ get_permalink() }}">
  <header class="flex flex-wrap md:flex-no-wrap">
    <div class="w-full md:w-auto">
      <h2 class="entry-title text-4xl font-extrabold">{!! get_the_title() !!}</h2>
    </div>
    <div class="flex-none md:flex-auto md:text-right mr-0 group-hover:text-blue-300">
      @include('partials/entry-meta')
    </div>
  </header>
 <div class="entry-summary text-gray-400">
    @php the_excerpt() @endphp
  </div>
</a>
</div>
</article>
