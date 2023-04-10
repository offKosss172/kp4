<?php
/**
 * Header Three
 *
 * @package Fashion Lite
 */
?>
<header id="masthead" class="site-header style-three" itemscope itemtype="http://schema.org/WPHeader">
	<div class="header-mid">
		<div class="container">
			<?php vilva_site_branding(); ?>
		</div>
	</div><!-- .header-mid -->
	<div class="header-bottom">
		<div class="container">
			<?php vilva_primary_nagivation(); ?>
			<div class="right">
				<div class="header-social">
					<?php vilva_social_links(); ?>
				</div><!-- .header-social -->
				<?php fashion_lite_search_cart(); ?>				
			</div><!-- .right -->
		</div>
	</div><!-- .header-bottom -->
</header>