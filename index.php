
<?php get_header(); ?>
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
            $i = 0;
            $post_type = 'cardapio';
            $Query = new WP_Query(array('post_type' => $post_type, 'post_status' => 'publish', 'posts_per_page' => -1));
            if ($Query->have_posts()) { while ($Query->have_posts()) : $Query->the_post();
              $i++;
          ?>
            <div class="<?php if($i == 1){ echo 'active'; } ?> tab-pane" id="<?php the_slug(); ?>" <?php if (get_post_meta( get_the_ID(), 'wpcf-bg-parallax', true )) { ?> style="background-image: url('<?php echo get_post_meta( get_the_ID(), 'wpcf-bg-parallax', true ); ?>');" <?php }  ?> >
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h3>
                      <i class="fa fa-3x flaticon-<?php the_slug(); ?>"></i> <?php the_title(); ?>
                    </h3>
                  </div>
                </div>
                <div class="row product-list ">
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
                    <div class="item <?php if($index == 1){ echo 'active'; } ?>">
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
<?php get_footer() ?>