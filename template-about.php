<?php
/*
Template Name: About
*/
?>
<?php get_header();?>
	<!-- Jumbotron -->
    <div id="business" class="jumbotron myHero myHero mb-4" style="background-image: linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0)), url('<?php the_post_thumbnail_url(__('(more…)'))?>'); background-position: bottom;">
        <h1><?php the_title();?></h1>
    </div>
	<div class="container">
	<!-- Business -->
		<h2 class="text-center mb-3"><?php the_field('thebusiness');?></h2>
		<div class="row mb-4">
			<div class="col">
				<div class="mx-auto mb-4" style="width: 45px;">
					<img src="https://belcourpreserves.com/wp-content/uploads/2021/01/beecon5.png" alt="bee" class="img-fluid" style="width: 45px; height: 45px;">
				</div>
				<p><?php the_field('business_history', false, false);?></p>
			</div>
		</div>
	<!-- Img gallery 1 5-c-c-5 -->
		<div class="row mb-4 tilePad">
			<div class="col-5 sidePad botMarg">
				<div class="imageDivsml" style="background-image: url('<?php 
                $image = get_field('business_gallery_1');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
			<div class="col sidePad">
				<div class="imageDivsml botMarg" style="background-image: url('<?php 
                $image = get_field('business_gallery_2');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
			<div class="w-100"></div>
			<div class="col sidePad">
				<div class="imageDivsml botMarg" style="background-image: url('<?php 
                $image = get_field('business_gallery_3');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
			<div class="col-5 sidePad">
				<div class="imageDivsml botMarg" style="background-image: url('<?php 
                $image = get_field('business_gallery_4');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>'); background-position: bottom;"></div>
			</div>
		</div>
	<!-- Business Contd -->
		<div class="row mb-4">
			<div class="col">
				<p><?php the_field('business_history_contd', false, false);?></p>
			</div>
		</div>
		<?php if( get_field('about_video_link') ): ?>
			<div class="mx-auto mb-4" style="width: 45px;">
				<img src="https://belcourpreserves.com/wp-content/uploads/2021/01/beecon5.png" alt="bee" class="img-fluid" style="width: 45px; height: 45px;">
			</div>
			<div class="mx-auto mb-5">
				<h3><a href="<?php the_field('about_video_link');?>"><b><?php the_field('about_video_link_title');?></b></a></h3>
			</div>
		<?php endif; ?>
	<!-- Img gallery 2 c-5-5-c -->
		<div class="row mb-4 tilePad">
			<div class="col sidePad botMarg">
				<div class="imageDivsml" style="background-image: url('<?php 
                $image = get_field('business_gallery_5');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
			<div class="col-5 sidePad">
				<div class="imageDivsml botMarg" style="background-image: url('<?php 
                $image = get_field('business_gallery_6');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
			<div class="w-100"></div>
			<div class="col-5 sidePad">
				<div class="imageDivsml botMarg" style="background-image: url('<?php 
                $image = get_field('business_gallery_7');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
			<div class="col sidePad">
				<div class="imageDivsml botMarg" style="background-image: url('<?php 
                $image = get_field('business_gallery_8');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
		</div>
	<!-- Business Contd 2 -->
		<div class="row">
			<div class="col">
				<p><?php the_field('business_history_contd_2', false, false);?></p>
			</div>
		</div>
	</div>
	<!-- Farmers Section -->
	<div class="colorBackFull bHoney botMarg" style="margin-top: 10px; margin-bottom: 5px;">
		<div class="container">
			<h2 class="text-center mb-3"><?php the_field('heading_local_farmers');?></h2>
			<div class="row mb-4">
				<div class="col">
					<p><?php the_field('local_farmers', false, false);?></p>
				</div>
			</div>
		</div>
	</div>
	<!-- Apiary Hero Image -->
	<div class="imageDiv" style="background-image: url('<?php 
                $image = get_field('apiary_hero');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>'); height: 600px;"></div>
	<!-- Apiary -->
	<div class="container mt-4">
		<h2 style="text-center mb-3" id="apiary"><?php the_field('theapiary');?></h2>
		<div class="row mb-5">
			<div class="col">
				<p><?php the_field('apiary', false, false);?></p>
			</div>
		</div>
	<!-- Img gallery apiary 5-c-c-5 -->
		<div class="row mb-4 tilePad">
			<div class="col-5 sidePad botMarg">
				<div class="imageDivsml" style="background-image: url('<?php 
                $image = get_field('apiary_gallery_1');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
			<div class="col sidePad">
				<div class="imageDivsml botMarg" style="background-image: url('<?php 
                $image = get_field('apiary_gallery_2');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
			<div class="w-100"></div>
			<div class="col sidePad">
				<div class="imageDivsml botMarg" style="background-image: url('<?php 
                $image = get_field('apiary_gallery_3');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
			<div class="col-5 sidePad">
				<div class="imageDivsml botMarg" style="background-image: url('<?php 
                $image = get_field('apiary_gallery_4');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
		</div>
	<!-- Apiary Contd-->
		<div class="row mb-5">
			<div class="col">
				<p><?php the_field('apiary_2', false, false);?></p>
			</div>
		</div>
	<!-- Img gallery apiary c-5-5-c -->
		<div class="row tilePad">
			<div class="col sidePad botMarg">
				<div class="imageDivsml" style="background-image: url('<?php 
                $image = get_field('apiary_gallery_5');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
			<div class="col-5 sidePad">
				<div class="imageDivsml botMarg" style="background-image: url('<?php 
                $image = get_field('apiary_gallery_6');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
			<div class="w-100"></div>
			<div class="col-5 sidePad">
				<div class="imageDivsml botMarg" style="background-image: url('<?php 
                $image = get_field('apiary_gallery_7');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
			<div class="col sidePad">
				<div class="imageDivsml botMarg" style="background-image: url('<?php 
                $image = get_field('apiary_gallery_8');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
		</div>
	<!-- <?php the_content();?> -->
	</div>

<?php get_footer();?>