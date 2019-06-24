<?php get_header(); ?>

  <main>

    <article id="categories">

      <h2 id="category-header">Category Results:</h2>

      <ul>
        <li><?php echo do_shortcode( '[catlist date=yes author=yes comments=no pagination=yes]' ); ?></li>
      </ul>

    </article>

  </main>

<?php get_footer(); ?>
