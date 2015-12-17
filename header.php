<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php bloginfo('language') ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="<?php bloginfo('language') ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php bloginfo('language') ?>"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="<?php bloginfo('language') ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php bloginfo('language') ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php bloginfo('language') ?>" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php bloginfo('language') ?>"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--SEO-->
    <title><?php the_SEO('title', get_the_ID()) ?></title>
    <meta name="description" property="og:description" content="<?php the_SEO('description', get_the_ID()) ?>">
    <meta name="keywords" content="<?php the_SEO('description', get_the_ID()) ?>">
    <!--Metatags facebook-->
    <meta property="og:locale" content="<?php bloginfo('language') ?>">
    <meta property="og:url" content="">
    <meta property="og:title" content="<?php the_SEO('title', get_the_ID()) ?>">
    <meta property="og:site_name" content="<?php the_SEO('title', get_the_ID()) ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri().'/'; ?>img/mandaesfiha.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--icons-->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri().'/'; ?>img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri().'/'; ?>img/apple-touch-icon.png">
    <!--.css-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/'; ?>style.css">
    <!--.js-->
    <script src="<?php echo get_template_directory_uri().'/'; ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- Wordpress  -->
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>"/>
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('atom_url'); ?>"/>
    <?php wp_head(); ?>
  </head>
  <body role="document">

    <nav id="main-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>" title="<?php the_SEO( 'title', get_the_ID() ) ?>">
            <img src="<?php echo get_template_directory_uri().'/'; ?>img/apple-touch-icon.png" alt="<?php the_SEO( 'title', get_the_ID() ) ?>" class="img-responsive">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

          <?php
            wp_nav_menu(
              array(
                'theme_location'  => 'menu-topo',
                'depth'           => 2,
                'menu'            => '',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'nav navbar-nav navbar-right',
                'fallback_cb'     => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                //Process nav menu using our custom nav walker
                'walker' => new wp_bootstrap_navwalker()
              )
            );
          ?>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    <?php if( is_front_page() ): ?>
    <header id="header" role="presentation" >
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h2 class="">
              <span>As melhores</span>
              <strong class="text-uppercase">esfihas</strong>
              <small>da cidade</small>
            </h2>
            <a href="http://www.pedidosja.com.br/restaurantes/porto-alegre/mandesfiha-esfiharia-menu" target="_blank" class="btn btn-opacity text-uppercase">Encomende agora</a>
          </div>
          <div class="col-md-2">

          </div>
          <a href="" class="col-md-4">
            <img src="<?php echo get_template_directory_uri().'/'; ?>img/mandesfiha.png" alt="logo" class="img-responsive">
          </a>
        </div>
        <div class="col-md-1">
        </div>
      </div>
    </header>
    <?php endif; ?>