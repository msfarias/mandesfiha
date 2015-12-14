<?php /* Template Name: Contato */ get_header(); ?>
<?php global $post; if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article id="<?php the_slug() ?>" role="article">
    <section id="sobre">
      <div class="container">
        <div class="row h-entry">
          <?php if (has_post_thumbnail()){ ?>
            <div class="col-md-7 ">
              <h2 class="p-name"><?php the_title() ?></h2>
              <div class="entry  e-content">
                <?php the_content(); ?>
              </div>
            </div>
            <figure class="u-photo figure col-md-4" role="complementary">
               <img src="<?php the_image_src(); ?>" alt="Mandesfiha" class="img-responsive">
            </figure>
          <?php } else { ?>
            <div class="col-md-12">
              <h2 class="p-name"><?php the_title() ?></h2>
              <div class="entry  e-content">
                <?php the_content(); ?>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>


  </article>
<?php endwhile; endif; wp_reset_query(); ?>



<?php get_footer() ?>