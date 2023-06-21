<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package staggingweb
 */

get_header();
?>

	  <section class="intro">
        <div class="container">
              <div class="row">
        <div class="col-md-12">
        <div class="section-headline white-headline text-center mt-5">
                <h2>
                    Oops!</h2>
                <h3>
                    404 Page Not Found</h3>
                <div class="error-details">
                    Sorry, an error has occured, Requested page not found!
                </div>
                <div class="error-actions ">
                
                <a href="<?php echo site_url();?>" class="btn button-secondary button-pipaluk btn-lg mt-5 mb-5" >
                        Take Me Home </a>
                </div>
            </div>
        </div>
    </div>
			 </div>
        
    </section>


<?php
get_footer();
