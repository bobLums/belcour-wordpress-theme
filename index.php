<?php get_header();?>

	<div class="container mb-5">
		<h1>Belcour Blog</h1>
		<div class="row mb-4">
			<div class="col-3 col-lg-2 mr-3">
				<h3 class="catH3 mb-3">Categories</h3>
				<?php
				$terms = get_terms('category');
				if ( !empty( $terms ) && !is_wp_error( $terms ) ){
					foreach ( $terms as $term ) {
						echo '<h4 class="catH4"><a href="'. get_term_link( $term ) .'">'. $term->name .'</a></h4>';
					 }
				}
				?>
				<h3 class="catH3 mt-5 mb-3">Archives</h3>
				<?php 
				$args = array(
					'type'            => 'monthly',
					'limit'           => '',
					'format'          => 'custom', 
					'before'          => '<h4 class="catH4">',
					'after'           => '</h4>',
					'show_post_count' => false,
					'echo'            => 1,
					'order'           => 'DESC'
				);
				wp_get_archives( $args );
				?>
			</div>
			<div class="col">
				<?php get_template_part('includes/section','blogarchive');?>
			</div>
		</div>
	</div>
	<?php if (show_posts_nav()) : ?>
		<div class="colorBackFull bdpurp botMarg">
			<div class="row">
				<div class="col">
					<div class="mx-auto" style="text-align: center !important;">
						<?php 
							global $wp_query;
							$big = 999999999;
							echo paginate_links(
								array(
									'base' => str_replace( $big, "%#%", esc_url( get_pagenum_link( $big ) ) ),
									'format' => '?paged=%#%',
									'current' => max( 1, get_query_var('paged') ),
									'total' => $wp_query->max_num_pages
								)
							);
						?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer();?>