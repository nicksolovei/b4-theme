<?php

function mg24_widgets_init() {

  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar', 'mg24' ),
    'id'              => 'sidebar-widget-area',
    'description'     => __( 'The sidebar widget area', 'mg24' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h2>',
    'after_title'     => '</h2>',
  ) );

  /*
  Footer (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer', 'mg24' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'The footer widget area', 'mg24' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm-4">',
    'after_widget'    => '</div>',
    'before_title'    => '<h2>',
    'after_title'     => '</h2>',
  ) );

}
add_action( 'widgets_init', 'mg24_widgets_init' );
