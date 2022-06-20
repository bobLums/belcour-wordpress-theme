<?php if( have_posts() ): while( have_posts() ): the_post();?>
	<!-- Jumbotron -->
	<?php if(has_post_thumbnail()):?>
		<div class="jumbotron myHero botMarg" style="background-image: url('<?php the_post_thumbnail_url(__('(more…)'))?>'); background-position: <?php the_field('img-pos');?>;"></div>
	<?php endif;?>
	<div class="container">
		<h1 class="mt-3 postRec"><?php the_title();?></h1>
		<p class="mb-3"><b><?php the_field('intro');?></b></p>
		<?php if( get_field('introduction') ): ?>
			<p class="mb-3"><?php the_field('introduction');?></p>
		<?php endif; ?>
		<p class="pSmall">Categories:</p>
		<h4 style="text-align: left;" class="mt-2 mb-4"><?php the_terms( get_the_id(), 'types'); ?></h4>
		<div class="row mb-3">
			<div class="col-sm-7">
				<h3 style="text-align:left;" class="mb-3">Ingredients</h3>
				<?php the_field('ingredients');?>
			</div>
			<div class="col-sm">
				<h3 style="text-align:left;" class="mb-3">Equipment</h3>
				<?php the_field('equipment');?>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p class="pSmall">More recipes with:</p>
				<h4 style="text-align: left;" class="mt-2 mb-5"><?php the_terms( get_the_id(), 'components'); ?></h4>
				<h3 style="text-align:left;" class="mb-3">Method</h3>
				<?php the_field('method');?>
			</div>
		</div>
	</div>
	<div class="container postContent">
		<!-- <p class="mt-3"><?php echo get_the_date('l d/m/Y');?></p><br> -->
		<?php the_content();?>
	</div>
	<div class="container">
		<div class="mt-3 mb-3"><p>Author: <b><?php the_author();?></b></p></div>
		<hr>
		<div class="mt-5">
			<?php comments_template();?>
		</div>
	</div>
	<script type="text/javascript" src="https://belcourpreserves.com/wp-content/themes/belcour_2020_theme/dist/post.js"></script>
<?php endwhile; else: endif;?>