<?php

// Template name:Kontakt
get_header();
?>


    <!--=============================================================================================
---------------------------- intro Section --------------------------------------------
===================================================================================================-->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="heading mb-5">
                        <h2 class="mb-50 wow slideInUp"><?php the_field('heading');?></h2>

                        <p class="wow slideInUp" data-wow-delay=".6s"><?php the_field('text');?>
                        </p>
                    </div>

                    <div class="intro-contact text-start wow slideInUp">
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
---------------------------- contact Section --------------------------------------------
===================================================================================================-->
    <section class="contact">
        <div class="bg wow slideInLeft">
            <img src="<?php the_field('contact_png',5);?>" alt="" class="img-fluid">
        </div>
        <div class="container-fluid">
            <div class="row justify-content-end">


                <div class="col-lg-7">
                    <div class="contact-form">
                        <div class="heading text-end pr-10rem wow slideInUp">
                            <h2><?php the_field('contact_heading',5);?></h2>
                        </div>
                       
                        <div class="bg-circle">
                        <?php echo do_shortcode(get_field('form',5));?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>

   
    <?php
    get_footer();?>