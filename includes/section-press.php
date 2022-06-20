<?php if( have_posts() ): while( have_posts() ): the_post();?>
	<p><?php echo get_the_date('l d/m/Y');?></p>
	<?php if(has_post_thumbnail()):?>
		<div class="row w-50">
			<img src="<?php the_post_thumbnail_url(__('(more…)'))?>" alt="<?php the_title();?>" class="w-100 img-responsive">
		</div>
	<?php endif;?>
	<?php the_content();?>
	<div class="mt-5 mb-3"><p>Author: <b><?php the_author();?></b></p></div>
	<h4 style="text-align: left;"><?php the_tags( 'Tags: ', ', ', '<br />' ); ?></h4>
	<div class="mt-5">
	</div>
<?php endwhile; else: endif;?>