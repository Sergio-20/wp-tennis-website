<?php get_header(); ?>

  <main>

    <ul class="posts">

    	<?php

      	if( have_posts() ) : the_post();

      ?>

      	<li>
    			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <h3>By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></h3>
    			<p><?php the_content(); ?></p>
    		</li>

        <hr />

      <?php endif; ?>

    </ul>

  </main>

<?php get_footer(); ?>
