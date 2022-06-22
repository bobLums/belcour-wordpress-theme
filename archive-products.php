<?php get_header();?>

	<!-- Jumbotron -->
    <div class="jumbotron myHero myHero botMarg" style="background-image: url('<?php 
		$heroImg = get_the_post_thumbnail_url(1085, $size = 'full-height');
		echo $heroImg;
	?>'); position: bottom;">
        <h1><?php echo get_the_title( 1085 ); ?></h1>
    </div>
	<div class="colorBackFull darkRed botMarg">
        <div class="container">
            <div class="row">
				<div class="col">
					<h2 class="mb-4" style="color: #ffffff !important; font-size: 1.35rem;" class="mb-2" id="tobuy"><b>Available island-wide at major Jamaican supermarkets</b></h2>
					<p class="pSmall" style="text-align: center;">And for online purchase:</p>
					<div class="linkBox mx-auto mt-3 mb-4"><a href="https://loshusansupermarket.com/brands/Belcour.html" target="_blank" rel="noopener">Loshusan's online store</a></div>
					<div class="mx-auto mt-4 mb-4" style="width: 45px;">
						<img src="https://belcourpreserves.com/wp-content/uploads/2021/01/beecon3.png" alt="bee" class="img-fluid" style="width: 45px; height: 45px;">
					</div>
					</p>
					<p class="">
						<?php 
						$value = get_field( "product_intro", 1085, false, false );
						echo $value;
						?>
					</p>	
				</div>
			</div>
        </div>
    </div>
	<div class="container">
	<!-- Retail Products -->
		<div class="row">
			<div class="col-md-4 sidePad botMarg">
				<div class="imageDiv d-flex" style="background-image: linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0)),  url('https://belcourpreserves.com/wp-content/uploads/2021/02/shrimp-with-honey-mustard.jpg');">
					<div class="mx-auto">
						<h3 class="" style="font-size: 1.65rem;"><a href="https://belcourpreserves.com/products/hots/"><b>
							<?php 
							$value = get_field( "hots-heading", 1085 );
							echo $value;
							?>
						</b></a></h3>
				</div>
				</div>
			</div>
			<div class="col-md-4 sidePad botMarg">
				<div class="imageDiv d-flex" style="background-image: linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0)), url('https://belcourpreserves.com/wp-content/uploads/2016/05/Sorrel-Chutney-Log-Method-2.jpg'); background-position: top;">
					<div class="mx-auto">
						<h3 class="" style="font-size: 1.65rem;"><a href="https://belcourpreserves.com/products/savouries/"><b>
							<?php 
							$value = get_field( "sav-heading", 1085 );
							echo $value;
							?>
						</b></a></h3>
				</div>
				</div>
			</div>
			<div class="col-md-4 sidePad botMarg">
				<div class="imageDiv d-flex" style="background-image: linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0)),  url('https://belcourpreserves.com/wp-content/uploads/2021/03/ginger-bread-pineapple-jam.jpg');">
					<div class="mx-auto">
						<h3 class="" style="font-size: 1.65rem;"><a href="https://belcourpreserves.com/products/sweets/"><b>
							<?php 
							$value = get_field( "sweets-heading", 1085 );
							echo $value;
							?>
						</b></a></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row d-flex align-items-stretch">
			<div class="col botMarg sidePad">
				<div class="colorBackFull emerald" style="height: 100%;">
					<h2 class="mt-3 mb2">
						<?php 
						$value = get_field( "food_service_title", 1085, false, false );
						echo $value;
						?>
					</h2>
					<hr class="whiteLine w-50 mb-4">
					<p class="mt-3" style="text-align: center;">
						<?php 
						$value = get_field( "food_service_tag", 1085, false, false );
						echo $value;
						?>
					</p>
					<div class="mx-auto mt-4 mb-3" style="width: 45px;">
						<img src="https://belcourpreserves.com/wp-content/uploads/2021/01/beecon3.png" alt="bee" class="img-fluid" style="width: 45px; height: 45px;">
					</div>
					<div class="mx-auto" style="width: 80%">
						<p>
							<?php 
							$value = get_field( "food_service_desc", 1085, false, false );
							echo $value;
							?>
						</p>
					</div>
					<h3 class="mt-5"><a href="https://belcourpreserves.com/contact/">Contact Us for Pricing and Availibity</a></h3>
				</div>
			</div>
		</div>
		<div class="row sidePad">
			<div class="imageDiv botMarg" style="background-image: url('<?php 
                $image = get_field('accent_image_1', 1085 );
                $url = $image['url'];
                $size = 'full-width'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');" alt="peppers tomatoes okras"></div>
		</div>
        </div>
	</div>
<?php get_footer();?>

