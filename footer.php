
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
            <ul itemscope itemtype="http://schema.org/Restaurant">
              <?php
                $pagename = 'contato';
                $Query = new WP_Query( array('post_type' => 'page','pagename' => $pagename, 'posts_per_page'=> 1 ));
                if ( $Query->have_posts() ) while ( $Query->have_posts() ) : $Query->the_post();
              ?>
                <li class="hidden">
                  <span itemprop="name"><?php bloginfo('name') ?></span>
                  <span itemprop="description"><?php bloginfo('description') ?></span>
                  <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                    <span itemprop="ratingValue">4</span> stars - based on <span itemprop="reviewCount">250</span> reviews
                  </div>
                </li>
                <?php
                $meta = get_post_custom_values( 'wpcf-email', get_the_ID() );
                if ( ! empty( $meta ) ) {
                  foreach ( $meta as $email ) : ?>
                    <li class="col-md-3">
                      <a title="E-mail <?php echo $email; ?>" href="mailto:<?php echo $email; ?>?subject=site" itemprop="email" class="email">
                        <i class="fa fa-envelope"></i>
                        <?php echo $email; ?>
                      </a>
                    </li>
                  <?php endforeach;
                } else {
                  $email = get_post_meta( get_the_ID(), 'wpcf-email', true ); ?>
                  <li class="col-md-3">
                    <a title="E-mail <?php echo $email; ?>" href="mailto:<?php echo $email; ?>?subject=site" itemprop="email" class="email">
                      <i class="fa fa-envelope"></i>
                      <?php echo $email; ?>
                    </a>
                  </li>
                <?php } ?>

               <?php
                $meta = get_post_custom_values( 'wpcf-phone', get_the_ID() );
                if ( ! empty( $meta ) ) {
                  foreach ( $meta as $phone ) : ?>
                    <li class="col-md-3">
                      <a title="E-mail <?php echo $phone; ?>" href="tel:<?php echo $phone; ?>" itemprop="telephone" class="telephone">
                        <i class="fa fa-phone"></i>
                        <?php echo $phone; ?>
                      </a>
                    </li>
                  <?php endforeach;
                } else {
                  $phone = get_post_meta( get_the_ID(), 'wpcf-phone', true ); ?>
                  <li class="col-md-3">

                    <a title="E-mail <?php echo $phone; ?>" href="tel:<?php echo $phone; ?>" itemprop="telephone" class="telephone">
                      <i class="fa fa-phone"></i>
                      <?php echo $phone; ?>
                    </a>
                  </li>
                <?php } ?>

                <li class="col-md-3">
                  <address class="clearfix" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <p itemprop="streetAddress">
                      <?php echo get_post_meta( get_the_ID(), 'wpcf-streetaddress', true ); ?>
                    </p>
                    <p itemprop="addressLocality">
                      <?php echo get_post_meta( get_the_ID(), 'wpcf-addresslocality', true ); ?>,

                      <span itemprop="addressRegion" >
                        <?php echo get_post_meta( get_the_ID(), 'wpcf-addressregion', true ); ?>
                      </span>
                    </p>
                    <p itemprop="postalCode" >
                      <?php echo get_post_meta( get_the_ID(), 'wpcf-postalcode', true ); ?>
                    </p>
                  </address>
                </li>
              <?php endwhile; wp_reset_query(); wp_reset_postdata(); ?>
            </ul>
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
    <script src="<?php echo get_template_directory_uri().'/'; ?>js/vendor/vegas/dist/vegas.min.js"></script>
    <script src="<?php echo get_template_directory_uri().'/'; ?>js/main.js"></script>
    <script id="vegas">
      jQuery(document).ready(function($){
        /** */
        $('#header').vegas({
          transition:'zoomOut2', timer:false, transitionDuration:500, slides:[
            {src:'<?php echo get_template_directory_uri() . '/'; ?>img/slides/header.jpg'},
            {src:'<?php echo get_template_directory_uri() . '/'; ?>img/slides/1.jpg'},
            {src:'<?php echo get_template_directory_uri() . '/'; ?>img/slides/2.jpg'},
          ]
        });
      });
    </script>
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
    <?php wp_footer(); ?>
  </body>
</html>
