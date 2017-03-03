<?php /* Template Name: About */ ?>
<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
$size = "medium";
get_header(); ?>

<section class="about-page-background">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='aboutpage-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .about-page-background -->


<div id="primary" class="site-content">
	<div id="content" role="main">

    <?php while ( have_posts() ) : the_post(); 
        $our_services = get_field('our_services');
        $content_strategy = get_field('content_strategy');
        $influencer_mapping = get_field('influencer_mapping');
        $social_media_strategy = get_field('social_media_strategy');
        $design_development = get_field('design_development');
        $contact_us = get_field('contact_us'); 
        $image_content = get_field('image_content');
        $image_influencer = get_field('image_influencer');
        $image_strategy = get_field('image_strategy');
        $image_design = get_field('image_design'); ?>
        

    <article class="our-services">
            <h6>Our Services</h6><h5><?php echo $our_services; ?></h5>
    </article>

    <article class="about-page-services">
                <section class ="left-image1">
                    <aside class="service1-images">
                        <?php if($image_content) { 
                            echo wp_get_attachment_image( $image_content, $size );
                        } ?>
                    </aside>
                    <div class="service1">
                        <h2>Content Strategy</h2>
                        <h5><?php echo $content_strategy; ?></h5>
                    </div>
                </section>
                <section class ="right-image2">   
                    <div class="service2">
                        <h2>Influencer Mapping</h2>
                        <h5><?php echo $influencer_mapping; ?></h5>
                    </div>
                    <aside class="service2-images">
                            <?php if($image_influencer) { 
                                echo wp_get_attachment_image( $image_influencer, $size );
                            } ?>
                    </aside>
                </section>
                <section class ="left-image3">
                    <aside class="service3-images">
                        <?php if($image_strategy) { 
                            echo wp_get_attachment_image( $image_strategy, $size );
                            } ?>
                    </aside>
                    <div class="service3">
                        <h2>Social Media Strategy</h2>
                        <h5><?php echo $social_media_strategy; ?></h5>
                    </div>
                </section>
                <section class ="right-image4">
                    <div class="service4">
                        <h2>Design and Development</h2>
                        <h5><?php echo $design_development; ?></h5>
                    </div>
                    <aside class="service4-images">
                            <?php if($image_design) { 
                                echo wp_get_attachment_image( $image_design, $size );
                            } ?>
                    </aside>
                </section>
                <section class="about-page-contact">
                    <div class="about-page-contact-us">
                        <h2>Interested in working with us?</h2>
                    </div>

                        <a class="button" href="<?php echo $contact_us; ?>">Contact Us</a>

                </section>
            </article>


			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>

