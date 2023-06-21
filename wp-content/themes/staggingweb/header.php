<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png"
        type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">
    <title>Home | Home Stagging</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>class="bg-blue home">
    <?php wp_body_open(); ?>
    <div id="color_change" class="d-none">
        <h3>Themes color</h3>
        <p><i class="fa-solid fa-fill-drip"></i></p>
        <ul>
            <li class="bg-white"><span></span></li>
            <li class="bg-blue"><span></span></li>
            <li class="bg-tropicalBlue"><span></span></li>
            <li class="bg-lightSlate"><span></span></li>
            <li class="bg-orange"><span></span></li>
            <li class="bg-yellow"><span></span></li>
            <li class="bg-lgyellow"><span></span></li>
            <li class="bg-marigold"><span></span></li>
            <li class="bg-pink"><span></span></li>
            <li class="bg-paleMauve"><span></span></li>
        </ul>
    </div>

    <!-- preloader area start -->
    <div id="pre-loader">
        <div class="pre-loader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!--=============================================================================================
---------------------------- header Section --------------------------------------------
===================================================================================================-->
    <header class="header">
        <div class="container-fluid">
            <div class="header-logoMenu">
                <div class="logo wow slideInLeft">
                    <a href="<?php echo site_url();?>"><img
                            src="<?php echo wp_get_attachment_url(get_theme_mod('custom_logo'));?>" alt="Logo"
                            class="img-fluid"></a>
                </div>

                <div class="menu wow slideInRight">
                    <input id="burger" type="checkbox" />

                    <label for="burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                    <nav>
                     <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary-menu',
                                    'container'=>false,
                                     'menu_class'=>'main-menu__list',
                                'menu_id'=> 'off-canvas-menu',
                              )
                         )?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
	
	
	    <!--=============================================================================================
---------------------------- slider Section --------------------------------------------
===================================================================================================-->
     <?php  if(have_rows( 'slider' ) ): ?>
	<section class="slider">
        <div class="owl-carousel slider-home">
              <?php while(have_rows( 'slider' ) ):   the_row();
                             $slider_image = get_sub_field('slider_image');
                 ?>
            <div class="item">
                <img src="<?php echo $slider_image;?>" alt="slider" class="img-fluid" />
            </div>
            <?php  endwhile; ?> 
        </div>
    </section>
	<?php else: ?>
	<section class="slider">
        <div class="owl-carousel slider-home">
              <?php while(have_rows( 'slider', 5 ) ):   the_row();
                             $slider_image = get_sub_field('slider_image');
                 ?>
            <div class="item">
                <img src="<?php echo $slider_image;?>" alt="slider" class="img-fluid" />
            </div>
            <?php  endwhile; ?> 
        </div>
    </section>
	<?php endif; ?>