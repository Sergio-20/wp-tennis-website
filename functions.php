<?php

  function custom_theme_styles()
  {
    wp_enqueue_style( 'bootstrap.css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome.css', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'slick.css', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
    wp_enqueue_style( 'style.css', get_template_directory_uri().'/style.css' );
  }

  add_action( 'wp_enqueue_scripts', 'custom_theme_styles' );

  function custom_theme_scripts()
  {
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js' );
    wp_enqueue_script( 'slick.js', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' );
    wp_enqueue_script( 'homepage-gear-slider', get_template_directory_uri().'/js/homepage-gear-slider.js' );
  }

  add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );
