<?php

get_header();

/* TEMPLATE NAME:Leistungen */

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
						$button=get_field('button');
						?>
                        <a href="<?php echo $button['url']?>" class="btn-custom"><i class="fa-solid fa-phone"></i> <span><?php echo $button['title']?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=============================================================================================
---------------------------- reasons Section --------------------------------------------
===================================================================================================-->
    <section class="reasons">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center wow slideInUp">
                        <h2><?php the_field('title');?></h2>
                        <h3><?php the_field('subtitle');?></h3>
                    </div>
                </div>
            </div>

            <div class="row">
            
                         <?php
						   if(have_rows( 'svg_icon' ) ):
                        while(have_rows( 'svg_icon' ) ): 
						the_row();
						$svg_image= get_sub_field('svg_image');
						$svg_title= get_sub_field('svg_title');
						?>
                <div class="col-md-4">
                    <div class="reasons-ser">
						
                        <img src="<?php echo $svg_image; ?>" alt="" class="img-fluid wow slideInUp">
                        <h3 class="wow slideInUp"><?php echo $svg_title; ?></h3>
						
                    </div>
                </div>
				<?php 
						endwhile;
						endif;
						?>

                

                <div class="row">
                    <div class="col-md-12 text-center">
						<?php 
						$button_link=get_field('button_link');?>
                        <a href="<?php echo $button_link['url'] ?>" class="btn-custom secnd-custom wow slideInUp"><span><?php echo $button_link['title'] ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=============================================================================================
---------------------------- intro Section --------------------------------------------
===================================================================================================-->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading">
                        <h3 class="mb-50 wow slideInUp"><?php the_field('heading_3');?></h3>

                        <p class="wow slideInUp" data-wow-delay=".6s"><?php the_field('text_3');?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=============================================================================================
---------------------------- entrust Section --------------------------------------------
===================================================================================================-->
    <section class="entrust">
        <div class="bg wow slideInLeft">
            <img src="<?php the_field('image_4'); ?>" alt="" class="img-fluid">
        </div>

        <div class="container">
            <div class="row justify-content-end mb-130">
                <div class="col-lg-6">
                    <div class="entrust-list">
                        <ul>
							<?php 
							if(have_rows ( 'points' ) ):
							while(have_rows ( 'points' ) ):
							the_row();
							$point=get_sub_field('point');
							$point_number=get_sub_field('point_number');
							?>
                            <li class="wow slideInLeft"><span><?php echo $point_number;?></span> <?php echo $point;?></li>
                           
							<?php 
							endwhile;
							endif;?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center mb-50 wow slideInUp">
                        <h3><?php the_field('text_4');?></h3>
						
                    </div>

                    <div class="col-md-12 text-center">
						<?php
						$button_4=get_field('button_4');
						?>
                        <a href="<?php echo $button_4['url']?>" class="btn-custom wow slideInUp"><span><?php echo $button_4['title']?></span></a>
                    </div>
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
				
					<div data-mc-src="59a04d61-1f26-4d0d-8394-60bc3aba884d#instagram"></div>
        
<script 
  src="https://cdn2.woxo.tech/a.js#63ad3dea3806a5f1711aa437" 
  async data-usrc>
</script>
					
                </div>
            </div>

    

            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="https://www.instagram.com/homestaging_elana/" target="_blank" class="btn-custom wow slideInUp"><span>mehr Sehen</span></a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>