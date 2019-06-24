<?php
/*
  Template Name: Blog
*/
?>

<?php get_header(); ?>

  <main>

    <ul class="posts">

    	<?php

        $the_query = new WP_Query( 'posts_per_page=5' );

      	while( $the_query->have_posts() ): $the_query->the_post();

      ?>

      	<li>
    			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <h3>By <?php the_author_posts_link(); ?></h3>
    			<p><?php the_excerpt(); ?></p>
          <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
    		</li>

        <hr />

      <?php endwhile; ?>

    </ul>

  </main>

<?php get_footer(); ?>
