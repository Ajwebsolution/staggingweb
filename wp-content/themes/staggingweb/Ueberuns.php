<?php

// Template name:Ueber uns 
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
                        <h2 class="mb-50 wow slideInUp"><?php the_field('heading');?></h2>

                        <p class="wow slideInUp" data-wow-delay=".6s"><strong><?php the_field('subheading');?></strong><br><br>

                             <?php the_field('content');?>
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="intro-contact wow slideInUp">
						<?php
						$button=get_field('button'); ?>
                        <a href="<?php echo $button ['url']?>" class="btn-custom"><i class="fa-solid fa-phone"></i> <span><?php echo $button ['title']?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--=============================================================================================
---------------------------- Team Section --------------------------------------------
===================================================================================================-->

    <section class="team">
        <div class="container">
			<?php 
                     if(have_rows( 'team_section' ) ):
						    $row=1;
                      while(have_rows( 'team_section' ) ): 
                          the_row();
						   $image = get_sub_field('image');
                             $name = get_sub_field('name');
						   $details = get_sub_field('details');
                              ?>
            <div class="row align-items-center mb-130 <?php if($row % 2 == 0): ?>flex-row-reverse<?php endif; ?>">
                <div class="col-lg-6">
                    <div class="team-img">
                        <div class="bordered wow slideInLeft"></div>
                        <img src="<?php echo $image;?>" alt="Elisa" class="img-fluid wow slideInUp">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-info">
                        <h3 class="wow slideInUp"><?php echo $name;?></h3>
                        <p class="wow slideInUp"><?php echo $details;?></p>
                    </div>
                </div>
            </div>
               <?php
			    $row++;
                 endwhile;
                     endif;
                            ?> 
            <div class="row">
                <div class="col-md-12 text-center"><?php
						$contact_button=get_field('contact_button'); ?>
                    <a href="<?php echo $contact_button ['url']?>" class="btn-custom wow slideInUp"><span><?php echo $contact_button ['title']?></span></a>
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
					<div data-mc-src="9513f5ce-b60b-41be-8a11-852b93450b62#instagram"></div>
        
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


    <?php
    get_footer();?>