 <!--=============================================================================================
---------------------------- footer Section --------------------------------------------
===================================================================================================-->
<footer class="footer">
        <div class="container">
            <div class="row justify-content-between gap-lg-30">
                <div class="col-lg-2">
                    <div class="footer-logo">
                        <div class="logo-icon wow slideInLeft" data-wow-delay=".7s">
                            <a href="<?php echo site_url();?>"><img src="<?php echo get_theme_mod( 'footer_logo' ) ;?>" alt="logo" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-logo">
                        <div class="logo-address wow slideInUp">
                            <a href="<?php echo site_url();?>"><img src="<?php echo get_theme_mod( 'second_logo' ) ;?>" alt="logo" class="img-fluid"></a>
                            <p><?php the_field('below_logo_text','option');?> 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-content wow slideInUp">
                        <ul>   <?php 
							if(have_rows( 'contact_info','option' ) ):
                                while(have_rows( 'contact_info','option' ) ): 
                                   the_row();
                                      $contact_details = get_sub_field('contact_details');
							           $icon= get_sub_field('icon');
								  ?>
                            <li><a href="<?php echo $contact_details['url'];?>"><img src="<?php echo $icon; ?>" alt="" class="img-fluid">
                                  <?php echo $contact_details['title'];?></a></li>
							<?php endwhile;
				                       endif; ?>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-link wow slideInUp">
                        <ul>
                            <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer_menu',
                                    'container'=>false,
                                     'menu_class'=>'main-menu__list',
                                'menu_id'=> 'off-canvas-menu',
                              )
                         )?>
                            <li>Copyright © </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/afterBefore.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
	<?php wp_footer(); ?>
</body>

</html>