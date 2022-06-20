<?php
/*
Template Name: Visit
*/
?>
<?php get_header();?>
	<!-- Jumbotron -->
    <div id="events" class="jumbotron myHero myHero--large mb-4" style="background-image: linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0)), url('<?php the_post_thumbnail_url( 'full-height' )?>');">
        <h1><?php the_title();?></h1>
    </div>
	<!-- Events -->
	<div class="container">
		<h2 style="text-align: center;"><?php the_field('events');?></h2>
		<div class="row mb-5">
			<div class="col">
				<p><?php the_field('events-text', false, false);?></p>
			</div>
		</div>
	</div>
	<div class="colorBackFull mauve botMarg">
		<div class="row">
			<div class="col" style="text-align: center;">
				<div class="mx-auto mb-4" style="width: 45px;">
					<img src="https://belcourpreserves.com/wp-content/uploads/2021/05/dragoncon4.png" alt="dragonfly" class="img-fluid" style="width: 45px; height: 45px;">
				</div>
				<h3><a href="<?php the_field('events_info');?>"><b>Additional Information</b></a></h3>
			</div>
		</div>
	</div>
	<!-- Mailing List -->
    <div class="colorBackFull bHoney botMarg" style="margin-top: 10px;">
        <div class="container">
            <div class="row">
			    <div class="col" style="text-align: center;">
				    <h2>Join our mailing list</h2>
                    <p>For News and Events:</p>
                    <!-- Begin Mailchimp Signup Form -->
                    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
	                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    </style>
                    <div id="mc_embed_signup">
                    <form action="https://belcourpreserves.us6.list-manage.com/subscribe/post?u=981e7aeb45b7827986acd146c&amp;id=09d2c89700" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
	                    <label for="mce-EMAIL">Subscribe</label>
	                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_981e7aeb45b7827986acd146c_09d2c89700" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                    </form>
                    </div>

                    <!--End mc_embed_signup-->
				    <p>Follow us on social media:</p>
                    <div class="mx-auto" style="width: 60px;">
			            <div class="row">
				            <div class="col-6 noPad">
					            <div class="mx-auto" style="width: 30px;">
						            <a href="https://www.instagram.com/belcourpreserves/" target="_blank">
							            <img src="https://belcourpreserves.com/wp-content/uploads/2021/05/belInsta-wt.png" alt="insta" class="img-fluid" style="width: 30px; height: 30px;">
						            </a>
					            </div>
				            </div>
				            <div class="col-6 noPad">
					            <div class="mx-auto" style="width: 30px;">
						            <a href="https://www.facebook.com/BelcourPreserves" target="_blank">
							            <img src="https://belcourpreserves.com/wp-content/uploads/2021/05/belFace-wt.png" alt="fb" class="img-fluid" style="width: 30px; height: 30px;">
						            </a>
					            </div>
				            </div>
			            </div>
		            </div>
			    </div>
		    </div>
        </div>
    </div>
	<div class="container mb-4">
	<!-- Img gallery 4 5-c-c-5 -->
		<div class="row tilePad">
			<div class="col-5 sidePad botMarg">
				<div class="imageDivsml" style="background-image: url('<?php 
                $image = get_field('events_image_1');
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
                $image = get_field('events_image_2');
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
                $image = get_field('events_image_3');
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
                $image = get_field('events_image_4');
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
	<!-- Cottage -->
	<div class="container">
		<h2 id="cottage" style="text-align: center;"><?php the_field('cottage');?></h2>
		<div class="row mb-4">
			<div class="col">
				<p><?php the_field('cottage-text', false, false);?></p>
			</div>
		</div>
	</div>
	<!-- Img gallery 3 c-5-5-c -->
	<div class="container">
		<div class="row tilePad">
			<div class="col sidePad botMarg">
				<div class="imageDivsml" style="background-image: url('<?php 
                $image = get_field('cottage_image_1');
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
                $image = get_field('cottage_image_2');
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
                $image = get_field('cottage_image_3');
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
                $image = get_field('cottage_image_4');
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
	<div class="colorBackFull mauve botMarg">
		<div class="row">
			<div class="col" style="text-align: center;">
				<h2>Ways to Book</h2>
				<p class="pSmall mt-3" style="text-align: center;">Book online:</p>  
				<?php if( get_field('moon_booking_link') ): ?>
					<h3><a href="<?php the_field('moon_booking_link');?>"><b>Moon Jamaica</b></a></h3>
				<?php endif; ?>
				<p class="pSmall mt-3" style="text-align: center;">Or book through:</p>
				<?php if( get_field('airbnb_link') ): ?>
					<h3><a href="<?php the_field('airbnb_link');?>"><b>AirBnB</b></a></h3>
				<?php endif; ?>
				<div class="mx-auto mt-4 mb-4" style="width: 45px;">
						<img src="https://belcourpreserves.com/wp-content/uploads/2021/05/dragoncon4.png" alt="dragonfly" class="img-fluid" style="width: 45px; height: 45px;">
				</div>
				<p><b>Or contact Robin directly at 876-383-8942<br> or email at belcourpreserves[at]gmail[dot]com</b></p>
				<h3 class="mt-4"><a href="<?php the_field('cottage_info');?>"><b>Additional Information</b></a></h3>
			</div>
		</div>
	</div>
	<div class="container">
        <!-- The Garden -->
		<div id="tastyCarousel2" class="carousel slide carousel-fade mb-4" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner">
			    <div class="carousel-item active bookSlide" style="background-image: url('<?php 
                    $image = get_field('garden_image_1');
                    $url = $image['url'];
                    $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];
                    echo esc_url($thumb);
                ?>');"></div>
			    <div class="carousel-item bookSlide" style="background-image: url('<?php 
                    $image = get_field('garden_image_2');
                    $url = $image['url'];
                    $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];
                    echo esc_url($thumb);
                ?>');"></div>
                <div class="carousel-item bookSlide" style="background-image: url('<?php 
                    $image = get_field('garden_image_3');
                    $url = $image['url'];
                    $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];
                    echo esc_url($thumb);
                ?>');"></div>
			    <div class="carousel-item bookSlide" style="background-image: url('<?php 
                    $image = get_field('garden_image_4');
                    $url = $image['url'];
                    $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];
                    echo esc_url($thumb);
                ?>');"></div>
			    <div class="carousel-item bookSlide" style="background-image: url('<?php 
                    $image = get_field('garden_image_5');
                    $url = $image['url'];
                    $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];
                    echo esc_url($thumb);
                ?>');"></div>
			    <div class="carousel-item bookSlide" style="background-image: url('<?php 
                    $image = get_field('garden_image_6');
                    $url = $image['url'];
                    $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];
                    echo esc_url($thumb);
                ?>');"></div>
			    <div class="carousel-item bookSlide" style="background-image: url('<?php 
                    $image = get_field('garden_image_7');
                    $url = $image['url'];
                    $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];
                    echo esc_url($thumb);
                ?>');"></div>
			    <div class="carousel-item bookSlide" style="background-image: url('<?php 
                    $image = get_field('garden_image_8');
                    $url = $image['url'];
                    $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];
                    echo esc_url($thumb);
                ?>');"></div>
			    <div class="carousel-item bookSlide" style="background-image: url('<?php 
                    $image = get_field('garden_image_9');
                    $url = $image['url'];
                    $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];
                    echo esc_url($thumb);
                ?>');"></div>
			    <div class="carousel-item bookSlide" style="background-image: url('<?php 
                    $image = get_field('garden_image_10');
                    $url = $image['url'];
                    $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];
                    echo esc_url($thumb);
                ?>');"></div>
            </div> 
            <a class="carousel-control-prev" href="#tastyCarousel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#tastyCarousel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
		<h2 id="garden" style="text-align: center;"><?php the_field('garden');?></h2>
		<div class="row mb-5">
			<div class="col">
				<p><?php the_field('garden-text', false, false);?></p>
			</div>
		</div>
	<!-- Img gallery 4 5-c-c-5 -->
		<div class="row tilePad">
			<div class="col-5 sidePad botMarg">
				<div class="imageDivsml" style="background-image: url('<?php 
                $image = get_field('flower_image_1');
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
                $image = get_field('flower_image_2');
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
                $image = get_field('flower_image_3');
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
                $image = get_field('flower_image_4');
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			</div>
            <div class="w-100"></div>
            <div class="col-5 sidePad botMarg">
				<div class="imageDivsml" style="background-image: url('<?php 
                $image = get_field('flower_image_5');
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
                $image = get_field('flower_image_6');
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
    </div>
<?php get_footer();?>