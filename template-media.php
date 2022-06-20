<?php
/*
Template Name: Media
*/
?>
<?php get_header();?>
    <h1><?php the_title();?></h1>
	<div class="container mb-5">
	<!-- About Video  -->
		<h2>About the Business</h2>
		<?php if( get_field('about_video') ): ?>
			<div class="row mb-5">
				<div class="col">
				<div id="about-video"></div>
					<div class="mx-auto w-100">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="<?php the_field('about_video');?>" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<!-- Book Video  -->
		<h2>About the Cookbook</h2>
		<?php if( get_field('book_video') ): ?>
			<div class="row mb-4">
				<div class="col-sm-6 mb-3">
					<div id="cookbook-video"></div>
					<div class="mx-auto w-100">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="<?php the_field('book_video');?>" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="col-sm-6 mb-3">
					<div class="mx-auto w-100">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="<?php the_field('book_video_2');?>" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<!-- Press and Promotion -->
		<h2 style="text-center mb-5" id="promo"><?php the_field('promo');?></h2>
	<!-- Press and Promotion -->
		<div class="card-columns mt-3 mb-4">
			<?php
                $args = array( 'post_type' => 'Press', 
                                'numberposts' => 999 );
                $lastPress = get_posts( $args );
                foreach($lastPress as $post) : setup_postdata($post); ?>
					<div class="card sidePad botMarg" style="display: inline-block">
						<a href="<?php the_post_thumbnail_url()?>" target="_blank">
							<img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title();?>" class="w-100 img-responsive hover-shadow card-img">
						</a>
					</div>
                <?php endforeach; ?> 
		</div>
		<div class="row sidePad">
			<div class="imageDiv botMarg" style="background-image: url('<?php 
                $image = get_field('accent_image');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
		</div>
	</div>
</div>
<?php get_footer();?>