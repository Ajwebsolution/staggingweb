<?php

get_header();

/* TEMPLATE NAME:Homepage */

?>
    <!--=============================================================================================
---------------------------- intro Section --------------------------------------------
===================================================================================================-->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="heading">
                        <h2 class="mb-50 wow slideInUp"><?php the_field('heading');?>
                            <strong><?php the_field('subheading');?></strong>
                        </h2>

                        <p class="wow slideInUp" data-wow-delay=".6s"><?php the_field('content');?></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="intro-contact wow slideInUp">
                        <?php 
                        $button = get_field('button');
                        ?>
                        <a href="<?php echo $button['url']?>" class="btn-custom"><i class="fa-solid fa-phone"></i> <span><?php echo $button['title']?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--=============================================================================================
---------------------------- ratings Section --------------------------------------------
===================================================================================================-->
    
    <section class="ratings">
        <div class="owl-carousel ratings-carousel">
			<?php 
                     if(have_rows( 'rating_slider' ) ):
                      while(have_rows( 'rating_slider' ) ): 
                          the_row();
                             $left_image = get_sub_field('left_image');
                             $right_image = get_sub_field('right_image');
                             $title = get_sub_field('title');
                             $subtitle = get_sub_field('subtitle');
                              ?>
            <div class="item">
                <div class="comparison">
                    <figure style="background-image: url(<?php echo $left_image;?>);">
                        <div class="handle"><img src="<?php echo get_theme_mod( 'footer_logo' ) ;?>" alt="" class="img-fluid"></div>
                        <div class="divisor" style="background-image: url(<?php echo $right_image;?>);"></div>
                    </figure>
                    <input type="range" min="0" max="100" value="50" class="slider" oninput="moveDivisor(this)">
                </div>

                <p class="wow slideInUp"><strong><?php echo $title;?></strong></p>
                <p class="wow slideInUp"><?php echo $subtitle;?></p>
            </div>
			<?php
                 endwhile;
                     endif;
                            ?> 
        </div>
    </section>
 

    <!--=============================================================================================
---------------------------- Area calculate between the range --------------------------------------------
===================================================================================================-->
    <section class="rechner">
        <div class="container rechner-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="calculator">
                        <div class="heading wow slideInUp">
                            <h3><?php the_field('calculator_heading');?></h3>
                            <p><?php the_field('calculator_subheading');?></p>
                        </div>

                        <div class="calculator-box  wow slideInUp">
                            <label for=""><input type="number" id="areaInput" placeholder="30"></label>
                            <button onclick="calculateCost()">Berechnen</button>
                        </div>

                        <p class="wow slideInUp">Ihr Preis ab</p>
                        <h2 class="wow slideInUp"><span id="result">2900 </span>€ <sup>*</sup></h2>
                        <p class="wow slideInUp my-5"><small>* exklusive 19% MSt.</small></p>

                        <div class="calculator-button">
                           <?php
							$enquirybtn=get_field('jetzt_anfragen_link');
							?>
                            <a href="<?php echo $enquirybtn['url']?>" class="btn-custom wow slideInUp"><span><?php echo $enquirybtn['title']?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!--=============================================================================================
---------------------------- Area Calculastion if 1m2 value is given--------------------------------------------
===================================================================================================-->
    <section class="rechner">
        <div class="container rechner-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="calculator">
                        <div class="heading wow slideInUp">
                            <h3><?php the_field('calculator_heading');?></h3>
                            <p><?php the_field('calculator_subheading');?></p>
                        </div>

                        <div class="calculator-box  wow slideInUp">
                            <label for=""> <input type="number" id="m2Input" placeholder="30"></label>
                            <button onclick="convert()">Berechnen</button>
                        </div>

                        <p class="wow slideInUp">Ihr Preis ab</p>
                        <h2 class="wow slideInUp"><span id="result">2900 </span>€ <sup>*</sup></h2>
                        <p class="wow slideInUp my-5"><small>* exklusive 19% MSt.</small></p>

                        <div class="calculator-button">
                           <?php
							$enquirybtn=get_field('jetzt_anfragen_link');
							?>
                            <a href="<?php echo $enquirybtn['url']?>" class="btn-custom wow slideInUp"><span><?php echo $enquirybtn['title']?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <!--=============================================================================================
---------------------------- client Section --------------------------------------------
===================================================================================================-->
    <section class="client">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="client-sec">
                        <p class="wow slideInUp"><?php the_field('heading_4');?></p>

                        <div class="owl-carousel client-carousel">
                        <?php 
                     if(have_rows( 'client_logo' ) ):
                      while(have_rows( 'client_logo' ) ): 
                          the_row();
                             $logo = get_sub_field('logo');
                             $logo_url =get_sub_field('logo_url');
                              ?>
                            <div class="item wow slideInUp">
                                <a href="<?php echo $logo_url; ?>"><img src="<?php echo $logo; ?>" alt="ZDF" class="img-fluid"></a>
                            </div>
                            <?php 
                               endwhile;
                                  endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=============================================================================================
---------------------------- portfolio Section --------------------------------------------
===================================================================================================-->
    <section class="portfolio">
        <div class="bg wow slideInRight" style="background-image: url('<?php the_field('image_5'); ?>');">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Ebene-0.jpg" alt="" class="img-fluid">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="portfolio-sec">
                        <div class="heading mb-5">
                            <h2 class="wow slideInUp"><?php the_field('heading_5');?></h2>
                            <p class="wow slideInUp"><strong><?php the_field('subheading_5');?></strong></p>
                            <p class="wow slideInUp"> <?php the_field('content_5');?></p> 
                        </div>
                        <?php 
                        $button_5 = get_field('button_5');
                        ?>
                        <a href="<?php echo $button_5['url']?>" class="btn-custom wow slideInUp"><span><?php echo $button_5['title']?></span></a>

                        <div class="line wow slideInLeft">
                            <img src="<?php the_field('svg_image');?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=============================================================================================
---------------------------- testimonial Section --------------------------------------------
===================================================================================================-->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-sec">
                        <h3 class="wow slideInUp"><?php the_field('testimonial_heading');?></h3>

                        <div class="owl-carousel testimonial-carousel wow slideInUp">
                            <?php 
                                 if(have_rows( 'testimonial' ) ):
                                  while(have_rows( 'testimonial' ) ): 
                                      the_row();
                                         $image_tm = get_sub_field('image_tm'); 
                                         $name_tm =get_sub_field('name_tm');
                                         $descriptions_tm =get_sub_field('descriptions_tm');
                                          ?>
                            <div class="item">
                                <div class="content">
                                    <div class="customPadd">
                                        <div class="img-rating">
                                            <div class="img-style">
                                                <img src="<?php echo $image_tm; ?>" alt="anna" class="img-fluid">
                                            </div>

                                            <ul class="rating">
                                                 <?php 
                                                      if(have_rows( 'rating' ) ):
                                                         while(have_rows( 'rating' ) ): 
                                                                         the_row();
                                                                 $star = get_sub_field('star'); ?>
                                                <li class="wow slideInLeft" data-wow-delay=".5s"><a href="#"><img
                                                            src="<?php echo $star; ?>" alt="" class="img-fluid"></a>
                                                </li>
                                                     <?php 
                                                       endwhile;
                                                             endif;?>
                                            </ul>
                                        </div>

                                        <p><strong><?php echo $name_tm; ?></strong></p>
                                        <p><?php echo $descriptions_tm; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php 
                               endwhile;
                                  endif;?>
                      
                        </div>
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
            <img src="<?php the_field('contact_png');?>" alt="" class="img-fluid">
        </div>
        <div class="container-fluid">
            <div class="row justify-content-end">


                <div class="col-lg-7">
                    <div class="contact-form">
                        <div class="heading text-end pr-10rem wow slideInUp">
                            <h2><?php the_field('contact_heading');?></h2>
                        </div>
                       
                        <div class="bg-circle">
                        <?php echo do_shortcode(get_field('form'));?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>
<?php
get_footer();?>
