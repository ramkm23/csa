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
 * @package cwt
 */

get_header();
?>
<div class="default-tepmlate">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="section-navigation">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'header-menu', // Replace with your menu location slug
							'container' => 'nav',          // HTML container type
							'menu_class' => 'menu',        // Class for the <ul> element
						));
					?>
					
				</div>
			</div>
			<div class="col-sm-9 sectioncontent">
				
				<!-- Get Default Content Template -->
				<?php //get_template_part('template-parts/most-popular-news'); ?>
				<div id="content" role="main">
					<h1 class="entry-title"><?php the_title() ?></h1>
						<?php while ( have_posts() ) : the_post(); ?>     
							<?php // Get Standard Comp	onents
								if( have_rows('default-content') ):
									while ( have_rows('default-content') ) : the_row();
										$section_path = 'template-parts/'.get_row_layout();
										get_template_part($section_path);
									endwhile;
								endif; ?>	
					<?php endwhile; // end of the loop. ?>
				</div><!-- #content -->
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>