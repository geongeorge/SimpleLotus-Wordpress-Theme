<footer class="content-info">
  <div class="container mx-auto bg-gray-900 text-white px-2 md:px-6 lg:px-8 my-16">
    © <?php echo date("Y"); ?> {{ get_bloginfo('name', 'display') }}
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
