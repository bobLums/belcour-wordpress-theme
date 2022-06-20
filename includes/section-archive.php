<?php if( have_posts() ): while( have_posts() ): the_post();?>
	<div class="row">
		<div class="col-md-5 col-lg-4 mb-2">
			<?php if(has_post_thumbnail()):?>
				<img src="<?php the_post_thumbnail_url('blog-small')?>" alt="<?php the_title();?>" class="img-fluid">
			<?php endif;?>
		</div>
		<div class="col-md col-lg-8">
			<h3 style="text-align:left;"><?php the_title();?></h3>
			<?php the_excerpt();?>
			<?php if( get_field('intro') ): ?>
				<p><?php the_field('intro')?></p>
			<?php endif; ?>
			<a href="<?php the_permalink();?>">Read more</a>
		</div>
		<div class="mx-auto w-100"><hr></div>
	</div>
<?php endwhile; else: endif;?>