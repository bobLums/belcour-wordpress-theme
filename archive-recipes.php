<?php get_header();?>

	<div class="container mb-5">
		<h1>Recipes</h1>
		<div class="row mb-4">
			<div class="col-3 col-lg-2">
				<h3 class="catH3 mb-3">Categories</h3>
				<?php
				$terms = get_terms('types');
				if ( !empty( $terms ) && !is_wp_error( $terms ) ){
					foreach ( $terms as $term ) {
						echo '<h4 class="catH4"><a href="'. get_term_link( $term ) .'">'. $term->name .'</a></h4>';
					 }
				}
				?>
			</div>
			<div class="col rightMarg">
				<div class="row">
					<?php get_template_part('includes/section','recarchive');?>
				</div>
			</div>
		</div>
	</div>
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
	<div class="imageDiv botMarg" style="background-image: url('https://belcourpreserves.com/wp-content/uploads/2022/02/belcour-fruits-and-brunch.jpg'); height: 600px;"></div>
<?php get_footer();?>