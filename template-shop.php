<?php
/*
Template Name: Shop Page
*/
?>
<?php get_header();?>

	<h1 class=""><?php the_title();?></h1>
	<div class="container mb-4">
		<div class="row">
			<?php get_template_part('includes/section','content');?>
		</div>
	</div>

<?php get_footer();?>