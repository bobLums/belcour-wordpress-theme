<?php if( have_posts() ): while( have_posts() ): the_post();?>
	<div class="col-md-6 mb-3">
		<?php if(has_post_thumbnail()):?>
			<div class="mb-3">
				<img src="<?php the_post_thumbnail_url('blog-med')?>" alt="<?php the_title();?>" class="d-block m-auto img-fluid">
			</div>
		<?php endif;?>
		<h3><a href="<?php the_permalink();?>"><b><?php the_title();?></b></a></h3>
		<p><?php the_field('intro');?></p>
		<hr>
	</div>
<?php endwhile; else: endif;?>