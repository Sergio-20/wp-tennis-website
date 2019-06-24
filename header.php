<! DOCTYPE html>
<html <?php language_attributes(); ?> >

  <head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?> >

    <header>

        <nav>

          <ul class="nav-icons">
            <a href="./blog"><li><i class="fa fa-rss" aria-hidden="true"></i></li></a>
            <a href="#location"><li><i class="fa fa-location-arrow"></i></li></a>
            <a href="#"><li><i class="fa fa-search"></i></li></a>
          </ul>

          <ul class="nav-categories">

            <a href="#"><li>Women</li></a>
            <a href="#"><li>Men</li></a>
            <a href="#about"><li>About</li></a>

          </ul>

        </nav>

        <div class="hero-text">
          <h2>Make It To The Big Stage</h2>
          <h3>Only With The Best Gear</h3>
        </div>

        <div class="more-info">
          <a href="#gear-marker">
            <p class="bold text-center">Scroll Down For More</p>
            <i class="fa fa-caret-down" aria-hidden="true"></i>
          </a>
        </div>

        <a href="#"><i class="back-to-top fa fa-caret-square-o-up" aria-hidden="true"></i></a>
        <a href="./home"><i class="go-home fa fa-home" aria-hidden="true"></i></a>

    </header>
