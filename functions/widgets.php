<?php  /**   * Created by Cristiano Acosta.   * Date: 30/01/13   * Time: 01:03   * To change this template use File | Settings | File Templates.   */  // enables wigitized sidebars  if (function_exists('register_sidebar'))    // Sidebar Widget    // Location: the sidebar    register_sidebar(array('name' => 'Lateral', 'before_widget' => '<div class="widget categories"><ul class="list-group">', 'after_widget' => '</ul></div>', 'before_title' => '<h3 class="widget-title">', 'after_title' => '</h3>',));  // Header Widget  // Location: right after the navigation  register_sidebar(array('name' => 'Header', 'before_widget' => '<div class="widget-area widget-header"><ul>', 'after_widget' => '</ul></div>', 'before_title' => '<h4>', 'after_title' => '</h4>',));  // Footer Widget  // Location: at the top of the footer, above the copyright  register_sidebar(array('name' => 'Footer', 'before_widget' => '<div class="widget-area widget-footer"><ul>', 'after_widget' => '</ul></div>', 'before_title' => '<h4>', 'after_title' => '</h4>',));  // The Alert Widget  // Location: displayed on the top of the home page, right after the header, right before the loop, within the content area  register_sidebar(array('name' => 'Buscador', 'before_widget' => '<div class=" widget-area widget-search">', 'after_widget' => '</div>', 'before_title' => '<h4>', 'after_title' => '</h4>',));  // Single-servicos  register_sidebar(array('name' => 'Serviços',  'id' => 'servicos', 'before_widget' => '<ul class=" widget-area widget-serviços">', 'after_widget' => '</ul>', 'before_title' => '<h2>', 'after_title' => '<hr class="bg-color azul" role="separator" ></h2>',));  // Verificar widgets nas áreas de widgets  function is_sidebar_active($index) {    global $wp_registered_sidebars;    $widgetcolums = wp_get_sidebars_widgets();    if ($widgetcolums[$index]) return true;    return false;  } // end is_sidebar_active?>