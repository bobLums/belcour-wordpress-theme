<?php if( have_posts() ): while( have_posts() ): the_post();?>
	<p><?php echo get_the_date('l d/m/Y');?></p>
	<?php the_content();?>
	<div class="mt-5 mb-3"><p>Author: <b><?php the_author();?></b></p></div>
	<h4 style="text-align: left;"><?php the_tags( 'Tags: ', ', ', '<br />' ); ?></h4>
	<div class="mt-5">
		<?php comments_template();?>
	</div>
<?php endwhile; else: endif;?>