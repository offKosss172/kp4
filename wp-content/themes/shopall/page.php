<?php


get_header(); 
if ( true === apply_filters( 'shopall_filter_frontpage_content_enable', true ) ) : ?>
<div id="inner-content-wrapper" class="wrapper page-section">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
    		<div class="single-wrapper">
				<?php
				while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					

				endwhile; // End of the loop.
				?>
			</div><!-- .single-wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->


</div><!-- .page-section -->
<?php endif;
get_footer();
