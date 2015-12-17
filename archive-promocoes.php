
<?php get_header(); ?>
    <article id="archive-promocoes" role="main">
      <section id="promocoes">
        <div class="container">
          <div class="row">
            <div class="col-md-12  text-center">
              <h2 class="">
                <?php post_type_archive_title(); ?>
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 col-md-offset-1 ">
              <div id="slides" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">

                  <?php
                    $index = 0;
                    $post_type = 'promocoes';
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
                    $post_type = 'promocoes';
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