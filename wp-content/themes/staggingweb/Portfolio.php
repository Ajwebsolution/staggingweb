<?php

get_header();

/* TEMPLATE NAME:Portfolio */

?>


    <!--=============================================================================================
---------------------------- intro Section --------------------------------------------
===================================================================================================-->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="heading">
                        <h2 class="mb-50 wow slideInUp"><?php the_field('heading');?></h2>

                        <p class="wow slideInUp" data-wow-delay=".6s"><?php the_field('text');?></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="intro-contact wow slideInUp">
                       <?php
						$common_contact_button=get_field('common_contact_button','option');
						?>
                        <a href="<?php echo $common_contact_button['url']?>" class="btn-custom"><i class="fa-solid fa-phone"></i> <span><?php echo $common_contact_button['title']?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=============================================================================================
---------------------------- intro Section --------------------------------------------
===================================================================================================-->
    <section class="portfolioPg">
        <div class="line wow slideInLeft">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/welle-01.svg" alt="" class="img-fluid">
        </div>
        
        <div class="container">
            <div class="row">
				  <?php
              
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                $ourportfolio = new WP_Query( array('posts_per_page'=>8,
                                 'post_type'=>'ourportfolio',
                                 'paged' => $paged,
                                 ) ,
                            ); 
				
                            ?>
            <?php while ($ourportfolio -> have_posts()) : $ourportfolio -> the_post(); ?>
                <div class="col-lg-6">
                    <div class="portfolioPg-box mb-100 wow slideInUp">
                        <div class="img-style">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        </div>

                        <div class="content-pot">
                            <h4>Etagenwohnung</h4>
                            <h3><?php the_title(); ?></h3>
                            <a href="<?php the_permalink(); ?>">Zu den Fotos</a>
                        </div>
                    </div>
                </div>
				<?php  
                   endwhile; 
                      wp_reset_postdata();
                               ?>

            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="#" class="btn-custom wow slideInUp"><span>jetzt anfragen</span></a>
                </div>
            </div>
        </div>
    </section>

    <!--=============================================================================================
---------------------------- Instagram Section --------------------------------------------
===================================================================================================-->

    <section class="instagram">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
		                <div data-mc-src="1d5121c1-8189-4522-90c2-a5e47c54d056#instagram"></div>
        
                                  <script 
                             src="https://cdn2.woxo.tech/a.js#63ad3dea3806a5f1711aa437" 
                                  async data-usrc>
                               </script>
              
                </div>
            </div>

            <div class="row">

        
                </div>
            </div>

            <div class="row">
				
                <div class="col-md-12 text-center">
                    <a href="https://www.instagram.com/homestaging_elana/" target="_blank" class="btn-custom wow slideInUp"><span>mehr Sehen</span></a>
                </div>
            </div>
     
    </section>
<?php get_footer();?>