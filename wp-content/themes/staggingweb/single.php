<?php

get_header();



?>

    <!--=============================================================================================
---------------------------- intro Section --------------------------------------------
===================================================================================================-->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="heading">
                        <h2 class="mb-50 wow slideInUp"><?php the_title(); ?></h2>

                        <p class="wow slideInUp" data-wow-delay=".6s"><?php the_content(); ?> </p>
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
---------------------------- image Section --------------------------------------------
===================================================================================================-->

    <section class="project">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="project-sec">
                        <div class="img-style full-img mb-100 wow slideInUp">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
                                <?php 
                                 if(have_rows( 'projekt_image' ) ):
                                  while(have_rows( 'projekt_image' ) ): 
                                      the_row();
                                         $first_column_image = get_sub_field('first_column_image'); 
                                       
                                          ?>
            <div class="row mb-130">
                <div class="col-lg-8">
                    <div class="project-sec">
                        <div class="img-style vertical-img wow slideInUp">
                            <img src="<?php echo $first_column_image; ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="project-sec">
						   <?php 
                                                      if(have_rows( 'second_column_image' ) ):
                                                         while(have_rows( 'second_column_image' ) ): 
                                                                         the_row();
                                                                 $images = get_sub_field('images'); ?>
                        <div class="img-style small-img mb-100 wow slideInUp">
                            <img src="<?php echo $images; ?>" alt="" class="img-fluid">
                        </div>
                                                    <?php 
                                                       endwhile;
                                                             endif;?>
                       
                    </div>
                </div>
            </div>
<?php 
                               endwhile;
                                  endif;?>
            <div class="row">
<!--                 <div class="col-lg-12 text-center">
					 <?php
						$back_button=get_field('back_button');
						?>
                    <a href="<?php echo $back_button['url']?>" class="btn-custom wow slideInUp"><span><?php echo $back_button['title']?></span></a>
                </div> -->
            </div>
        </div>
    </section>
<?php get_footer(); ?>