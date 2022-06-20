<?php if( have_posts() ): while( have_posts() ): the_post();?>
	<div class="row altPosts">
		<?php if ($wp_query->current_post % 2 == 0): ?>
			<div class="col-md-5 col-lg-4 mb-2">
				<?php if(has_post_thumbnail()):?>
					<img src="<?php the_post_thumbnail_url('blog-small')?>" alt="<?php the_title();?>" class="img-fluid">
				<?php endif;?>
			</div>
			<div class="col-md col-lg-8">
				<h3 style="text-align:left;"><?php the_title();?></h3>
				<?php the_excerpt();?>
				<p class="mb-3" style="font-size: 1.0rem;"><?php the_date(); ?></p>
				<a href="<?php the_permalink();?>">Read more</a>
			</div>
			<div class="mx-auto w-100"><hr></div>
		<?php else: ?>
			<div class="col-md col-lg-8">
				<h3 style="text-align:left;"><?php the_title();?></h3>
				<?php the_excerpt();?>
				<p class="mb-3" style="font-size: 1.0rem;"><?php the_date(); ?></p>
				<a href="<?php the_permalink();?>">Read more</a>
			</div>
			<div class="col-md-5 col-lg-4 mb-2">
				<?php if(has_post_thumbnail()):?>
					<img src="<?php the_post_thumbnail_url('blog-small')?>" alt="<?php the_title();?>" class="img-fluid">
				<?php endif;?>
			</div>
			<div class="mx-auto w-100"><hr></div>
		<?php endif ?>
	</div>
	<div class="row oneSidePosts rightMarg">
		<div class="col-md-5 col-lg-4 mb-2">
			<?php if(has_post_thumbnail()):?>
				<img src="<?php the_post_thumbnail_url('blog-small')?>" alt="<?php the_title();?>" class="img-fluid">
			<?php endif;?>
		</div>
		<div class="col-md col-lg-8">
			<h3 style="text-align:left;"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<?php the_excerpt();?>
			<p class="mb-3" style="font-size: 1.0rem;"><?php echo get_the_date('F j, Y'); ?></p>
		</div>
		<div class="mx-auto w-100"><hr></div>
	</div>
<?php endwhile; else: endif;?>