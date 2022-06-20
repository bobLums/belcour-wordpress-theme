<h1>Results for: <?php the_search_query();?></h1>
<?php if( have_posts() ): while( have_posts() ): the_post();?>
	<div class="row">
		<div class="col-sm-4">
			<?php if(has_post_thumbnail()):?>
				<img src="<?php the_post_thumbnail_url('blog-small')?>" alt="<?php the_title();?>" class="img-fluid mb-3">
			<?php endif;?>
		</div>
		<div class="col-sm-8">
			<h3 style="text-align:left;"><?php the_title();?></h3>
			<p><?php the_field('description');?></p>
			<p><?php the_field('intro');?></p>
			<?php the_excerpt();?>
			<a href="<?php the_permalink();?>">Read more</a>
		</div>
		<div class="col">
			<hr>
		</div>
	</div>
<?php endwhile; else: ?> 
	There are no results for <?php the_search_query();?>.	
<?php endif;?>