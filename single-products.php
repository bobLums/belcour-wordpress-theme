<?php get_header();?>
	<!-- Jumbotron --> 
    <div class="jumbotron vh-100 myHero botMarg" style="background-image: linear-gradient(rgba(0,0,0,0.35),rgba(0,0,0,0)), url('<?php the_post_thumbnail_url( 'full-height' )?>'); background-position: center;">
        <h1><?php the_title();?></h1>
    </div> 
	<!-- Product -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 botMarg">
				<div class="mx-auto">
					<img src=<?php the_field('product_image_1');?> alt="<?php the_field('product_name_1');?>" class="img-fluid w-100">
				</div>
			</div>
			<div class="col botMarg">
				<h2 class="mt-3 mb-3 prodH" id="<?php the_field('product_id_link_1');?>"><?php the_field('product_name_1');?></h2>
				<hr>
				<h3 style="text-align:left;"><?php the_field('tagline_1');?></h3>
				<p class="mb-3"><?php the_field('description1', false, false);?></p>
				<p class="pSmall mt-3" style="text-align:left;">Featured Recipe:</p>
				<h4 class="mt-2 mb-4" style="text-align:left;"><a href="<?php the_field('recipe_link_1');?>"><b><?php the_field('recipe_title_1');?></b></a></h4>
				<h3 style="text-align:left;">Ingredients</h3>
				<p class="mb-3"><?php the_field('ingredients1');?></p>
				<hr>
				<h4 style="text-align:left;"><a href="<?php the_field('recipes_with_product_1');?>"><b>See more Recipes</b></a></h4>
			</div>
		</div>
	</div>
	<div class="imageDiv myHero botMarg" style="background-image: url('<?php 
                $image = get_field('recipe_image_1');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>'); background-position: bottom;"></div>
	<!-- Product -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 botMarg">
				<div class="mx-auto">
					<img src=<?php the_field('product_image_2');?> alt="<?php the_field('product_name_2');?>" class="img-fluid w-100">
				</div>
			</div>
			<div class="col botMarg">
				<h2 class="mt-3 mb-3 prodH" id="<?php the_field('product_id_link_2');?>"><?php the_field('product_name_2');?></h2>
				<hr>
				<h3 style="text-align:left;"><?php the_field('tagline_2');?></h3>
				<p class="mb-3"><?php the_field('description2', false, false);?></p>
				<p class="pSmall mt-3" style="text-align:left;">Featured Recipe:</p>
				<h4 class="mt-2 mb-4" style="text-align:left;"><a href="<?php the_field('recipe_link_2');?>"><b><?php the_field('recipe_title_2');?></b></a></h4>
				<h3 style="text-align:left;">Ingredients</h3>
				<p class="mb-3"><?php the_field('ingredients2');?></p>
				<hr>
				<h4 style="text-align:left;"><a href="<?php the_field('recipes_with_product_2');?>"><b>See more Recipes</b></a></h4>
			</div>
		</div>
	</div>
	<div class="imageDiv myHero botMarg" style="background-image: url('<?php 
                $image = get_field('recipe_image_2');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>'); background-position: bottom;"></div>
	<!-- Product -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 botMarg">
				<div class="mx-auto">
					<img src=<?php the_field('product_image_3');?> alt="<?php the_field('product_name_3');?>" class="img-fluid w-100">
				</div>
			</div>
			<div class="col botMarg">
				<h2 class="mt-3 mb-3 prodH" id="<?php the_field('product_id_link_3');?>"><?php the_field('product_name_3');?></h2>
				<hr>
				<h3 style="text-align:left;"><?php the_field('tagline_3');?></h3>
				<p class="mb-3"><?php the_field('description3', false, false);?></p>
				<p class="pSmall mt-3" style="text-align:left;">Featured Recipe:</p>
				<h4 class="mt-2 mb-4" style="text-align:left;"><a href="<?php the_field('recipe_link_3');?>"><b><?php the_field('recipe_title_3');?></b></a></h4>
				<h3 style="text-align:left;">Ingredients</h3>
				<p class="mb-3"><?php the_field('ingredients3');?></p>
				<hr>
				<h4 style="text-align:left;"><a href="<?php the_field('recipes_with_product_3');?>"><b>See more Recipes</b></a></h4>
			</div>
		</div>
	</div>
	<div class="imageDiv myHero botMarg" style="background-image: url('<?php 
                $image = get_field('recipe_image_3');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>'); background-position: bottom;"></div>
	<!-- Product -->
	<?php if( get_field('product_name_4') ): ?>
		<div class="container">
			<div class="row botMarg">
				<div class="col-md-5 mb-3">
					<div class="mx-auto">
						<img src=<?php the_field('product_image_4');?> alt="<?php the_field('product_name_4');?>" class="img-fluid w-100">
					</div>
				</div>
				<div class="col">
					<h2 class="mt-3 mb-3 prodH" id="<?php the_field('product_id_link_4');?>"><?php the_field('product_name_4');?></h2>
					<hr>
					<h3 style="text-align:left;"><?php the_field('tagline_4');?></h3>
					<p class="mb-3"><?php the_field('description4', false, false);?></p>
					<p class="pSmall mt-3" style="text-align:left;">Featured Recipe:</p>
					<h4 class="mt-2 mb-4" style="text-align:left;"><a href="<?php the_field('recipe_link_4');?>"><b><?php the_field('recipe_title_4');?></b></a></h4>
					<h3 style="text-align:left;">Ingredients</h3>
					<p class="mb-3"><?php the_field('ingredients4');?></p>
					<hr>
					<h4 style="text-align:left;"><a href="<?php the_field('recipes_with_product_4');?>"><b>See more Recipes</b></a></h4>
				</div>
			</div>
		</div>
		<div class="imageDiv myHero botMarg" style="background-image: url('<?php 
                $image = get_field('recipe_image_4');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');?>'); background-position: bottom;"></div>
	<?php endif; ?>
	<div class="colorBackFull bdpurp botMarg">
		<div class="row">
			<div class="col-4">
				<h4 class=""><a href="<?php the_field('link_before');?>"><?php the_field('link_before_label');?></a></h4>
			</div>
			<div class="col-4">
				<div class="mx-auto" style="width: 30px;">
					<img src="https://belcourpreserves.com/wp-content/uploads/2021/01/beecon3.png" alt="bee" class="img-fluid" style="width: 30px; height: 30px;">
                </div>
			</div>
			<div class="col-4">
				<h4 class=""><a href="<?php the_field('link_after');?>" style="text-align:right;"><?php the_field('link_after_label');?></a></h4>
			</div>
		</div>
	</div>
	<div class="imageDiv myHero botMarg" style="background-image: url('<?php 
                $image = get_field('accent_image');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>'); background-position: center;"></div>
<?php get_footer();?>