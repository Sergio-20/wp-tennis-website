<?php
/*
  Template Name: Help

*/
?>

<?php get_header(); ?>

  <main>

    <!--  Start Of Help Module -->

      <section>
        <h2 class="text-center">Help/FAQs</h2>
        <?php echo do_shortcode( '[ultimate-faqs]' ); ?>
      </section>

    <!--  End Of Help Module -->

    <!--  Start Of Contact Module -->

    <div id="contact"></div>
    <section>
      <?php echo do_shortcode( '[ninja_form id=1]' ); ?>
    </section>

    <!--  End Of Contact Module -->

  </main>

<?php get_footer(); ?>
