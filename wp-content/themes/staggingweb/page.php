<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package staggingweb
 */

get_header();
?>


<section id="post-<?php the_ID(); ?>" class="py-5">
   <div class="container">
      <div class="row mtli-row-clearfix">
         <div class="col-sm-12">
            <div class="campaign maxwidth500 mb-sm-30">
				
               
            </div>
            <div class="detailss">
               <?php the_content();?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
// get_sidebar();
get_footer();
