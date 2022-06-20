<?php get_header();?>

	<div class="container mb-5">
		<h1><?php echo single_cat_title();?></h1>
		<div class="row mb-4">
			<div class="col">
				<?php get_template_part('includes/section','archive');?>
			</div>
		</div>
		<div class="mt-3">
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
<?php get_footer();?>