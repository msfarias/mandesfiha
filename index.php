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
  </head>
  <body role="document">
    <header id="header" role="presentation" style="background-image:url('img/header.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h2 class="">
              <span>As melhores</span>
              <strong class="text-uppercase">esfihas</strong>
              <small>da cidade</small>
            </h2>
            <a href="#" class="btn btn-opacity text-uppercase"> <strong>Encomende agora</strong></a>
          </div>
          <div class="col-md-2">

          </div>
          <a href="" class="col-md-4">
            <img src="<?php echo get_template_directory_uri().'/'; ?>img/mandaesfiha.png" alt="logo" class="logo">
          </a>
        </div>
        <div class="col-md-1">
        </div>
      </div>
    </header>
    <article id="home" role="main">
      <section id="cardapio">
        <div class="diamonds-tabs">
          <div class="container">
            <div class="row">
              <div class="col-md-5">
                <h2>Veja o nosso
                  <strong class="text-uppercase"> Cardapio</strong>
                </h2>
                <p></p>
              </div>
              <div class="col-md-7">
                <ul class="nav-diamonds diamonds" role="tablist">
                  <?php
                    $index = 0;
                  $post_type = 'cardapio';
                  $Query = new WP_Query(array('post_type' => $post_type, 'post_status' => 'publish', 'posts_per_page' => -1));
                  if ($Query->have_posts()) { while ($Query->have_posts()) : $Query->the_post();
                    $index++
                  ?>
                    <li class="<?php if($index == 1){ echo 'active'; } ?>">
                      <a href="#<?php the_slug(); ?>" role="tab" data-toggle="tab" class="diamond">
                        <div class="content">
                          <h4>
                            <i class="fa flaticon-<?php the_slug(); ?>"></i> <?php the_title(); ?>
                          </h4>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; }  wp_reset_query(); ?>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-content">
          <?php
            $index = 0;
            $post_type = 'cardapio';
            $Query = new WP_Query(array('post_type' => $post_type, 'post_status' => 'publish', 'posts_per_page' => -1));
            if ($Query->have_posts()) { while ($Query->have_posts()) : $Query->the_post();
            $index++
          ?>
            <div class="<?php if($index == 1){ echo 'active'; } ?> tab-pane fade in" id="<?php the_slug(); ?>">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h3><i class="fa fa-3x flaticon-<?php the_slug(); ?>"></i> Esfihas Especiais</h3>
                  </div>
                </div>
                <div class="row">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          <?php endwhile; }  wp_reset_query(); ?>
        </div>
      </section>
      <section id="sobre">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <?php
                $pagename = 'sobre';
                $Query = new WP_Query( array('post_type' => 'page','pagename' => $pagename, 'posts_per_page'=> 1 ));
                if ( $Query->have_posts() ) : while ( $Query->have_posts() ) : $Query->the_post();
              ?>
                  <h2><?php the_title() ?></h2>
                  <div class="entry">
                    <?php the_content(); ?>
                  </div>
              <?php endwhile; endif; wp_reset_query(); ?>


            </div>
            <div class="col-md-2">

            </div>
            <figure class="col-md-4">
              <a href="" class="">
                <img src="<?php echo get_template_directory_uri().'/'; ?>img/mandesfiha.png" alt="Mandesfiha" class="img-responsive">
              </a>
            </figure>
            <div class="col-md-1">

            </div>
          </div>
        </div>
      </section>
      <section id="promocoes">
        <div class="container">
          <div class="row">
            <div class="col-md-12  text-center">
              <h2 class="">
                Nossas <strong class="text-uppercase"><br>promoções</strong>
              </h2>
              <p>lorem lorem lorem lorel</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 col-md-offset-1 ">
              <div id="slides" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <?php
                    $index = 0;
                    $post_type = 'slides';
                    $Query = new WP_Query(array('post_type' => $post_type, 'post_status' => 'publish', 'posts_per_page' => -1));
                    if ($Query->have_posts()) { while ($Query->have_posts()) : $Query->the_post();
                      $index++;
                  ?>
                    <li data-target="#slides" data-slide-to="<?php echo $index; ?>" class="<?php if($index == 1){ echo 'active'; } ?>"></li>
                  <?php endwhile; }  wp_reset_query(); ?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <?php
                    $index = 0;
                    $post_type = 'slides';
                    $Query = new WP_Query(array('post_type' => $post_type, 'post_status' => 'publish', 'posts_per_page' => -1));
                    if ($Query->have_posts()) { while ($Query->have_posts()) : $Query->the_post();
                    $index++;
                  ?>
                    <div class="item active">
                      <img src="<?php the_image_src(); ?>" alt="<?php the_title() ?>" >
                      <div class="carousel-caption">
                      </div>
                    </div>
                  <?php endwhile; }  wp_reset_query(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </article>

    <footer id="footer">
      <div id="localizacao">
        <div class="container">
          <div class="row">
            <a class="text-center" role="button" data-toggle="collapse" href="#mapa" aria-expanded="false" aria-controls="collapseExample">
              Visite-nos
            </a>
          </div>
        </div>
        <div class="collapse" id="mapa">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.001190598612!2d-51.23631088529169!3d-30.094152240550073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519826fa76e16c5%3A0x62815470305c4d2f!2sR.+Cel.+Deusdedit+Paiva+Bueno+-+Cavalhada%2C+Porto+Alegre+-+RS!5e0!3m2!1spt-BR!2sbr!4v1449601119085" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div id="contato" class="contato">
        <div class="container">
          <div class="row">
            <ol>
              <li class="col-md-2">
                <p>contato</p>
              </li>
              <li class="col-md-offset-1 col-md-2">
                <p>texto</p>
              </li>
              <li class="col-md-offset-1 col-md-2">
                <p>texto</p>
              </li>
              <li class="col-md-offset-1 col-md-2">
                <p>texto</p>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </footer>
    <section id="copy">
      <div class="container">
        <div class="row">
          <div class="text-center">
            <div itemtype="http://schema.org/Organization" itemscope="" class="list-unstyled list-inline">
              <a style="width:12%; display:inline-block;" href="http://www.agenciawfuture.com.br" target="_blank" title="Agência Wfuture - Marketing Digital -  Criação de Sites" itemprop="url">
                <img this.onerror="null" onerror="this.src='http://www.agenciawfuture.com.br/img/logo.wfuture.branca.png'" src="http://www.agenciawfuture.com.br/img/logo.wfuture.branca.png" alt="Agência Wfuture - Marketing Digital -  Criação de Sites" itemprop="brand" class="img-responsive" style="width:100%;" xlink:href="http://www.agenciawfuture.com.br/img/logo.wfuture.branca.svg">
                <span style="display:none;" itemprop="name">Agência Wfuture - Marketing Digital -  Criação de Sites</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--.js-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri().'/'; ?>js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?php echo get_template_directory_uri().'/'; ?>js/vendor/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri().'/'; ?>js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri().'/'; ?>js/main.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (
        function(b, o, i, l, e, r){
          b.GoogleAnalyticsObject=l;
          b[l] || (
            b[l]=function(){
              (
                b[l].q=b[l].q || []
              ).push(arguments)
            }
          );
          b[l].l= + new Date;
          e=o.createElement(i);
          r=o.getElementsByTagName(i)[0];
          e.src='//www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga')
      );
      ga('create', 'UA-XXXXX-X', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
