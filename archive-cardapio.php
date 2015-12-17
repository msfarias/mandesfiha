
<?php get_header(); ?>
    <article id="archive-cardapio" role="main">
      <section id="cardapio">
        <div class="diamonds-tabs">
          <div class="container">
            <div class="row">
              <div class="col-md-5">
                <h2>
                  <?php post_type_archive_title(); ?>
                </h2>
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
    </article>
<?php get_footer() ?>