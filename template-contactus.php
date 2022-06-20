<?php
/*
Template Name: Contact US
*/
?>
<?php get_header();?>
	<?php if(has_post_thumbnail()):?>
		<div class="jumbotron myHero mb-5" style="background-image: linear-gradient(rgba(0,0,0,0.45),rgba(0,0,0,0)), url('<?php the_post_thumbnail_url( 'full-width' )?>');">
			<h1><?php the_title()?></h1>
		</div>
	<?php endif;?>
	<div class="container mb-4">
		<div class="row">
			<div class="col-sm-7 mb-3">
				<h2 class="mb-4" style="text-align: left;"><?php the_field('form_title');?></h2>
				<?php gravity_form(1, '', null, false, [], true, 100, true);?>
			</div>
			<div class="col-sm-5 ownersContact">
				<h2 class="mb-4" style="text-align: left;"><?php the_field('above_contact');?></h2>
				<?php the_field('owners_contact');?>
				<hr class="mb-4">
				<?php the_field('owners_contact_2');?>
				<hr class="mb-4">
				<img src="https://belcourpreserves.com/wp-content/uploads/2021/05/dragoncon1.png" alt="dragonfly" class="img-fluid mt-3 mb-4" style="width: 45px; height: 45px;">
				<h4 style="text-align: left;">Our Business Email:</h4>
				<p><b><?php the_field('owner_email');?></b></p>
				<?php if( get_field('owner_pic') ): ?>
					<img src="<?php 
						$image = get_field('owner_pic');
						$url = $image['url'];
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
						$thumb = $image['sizes'][ $size ];
						$width = $image['sizes'][ $size . '-width' ];
						$height = $image['sizes'][ $size . '-height' ];
						echo esc_url($thumb);
					?>" alt="Robin and Michael" class="w-100 img-responsive">
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="colorBackFull emerald mb-5">
        <div class="row">
			<div class="col">
				<div class="mx-auto mt-2 mb-3" style="width: 45px;">
					<img src="https://belcourpreserves.com/wp-content/uploads/2021/01/beecon3.png" alt="bee" class="img-fluid" style="width: 45px; height: 45px;">
				</div>
				<div class="mx-auto mb-4" style="text-align: center !important;">
					<h3><a href="<?php the_field('sellsheet_link');?>" class="mb-3"><b>Belcour Preserves Sellsheet</b></a></h3>
				</div>
			</div>
		</div>
	</div>
	<div class="container mb-4">
		<h2 class="mb-4"><?php the_field('distributor_info');?></h2>
		<hr class="hr">
		<div class="row mt-4">
			<div class="col-md-7">
				<?php the_field('distributor_info_text');?>
			</div>
			<div class="col-md-5">
				<?php if( get_field('distributor_pic') ): ?>
					<img src="<?php 
						$image = get_field('distributor_pic');
						$url = $image['url'];
						$size = 'medium'; // (thumbnail, medium, large, full or custom size)
						$thumb = $image['sizes'][ $size ];
						$width = $image['sizes'][ $size . '-width' ];
						$height = $image['sizes'][ $size . '-height' ];
						echo esc_url($thumb);
					?>" alt="Robin and Michael" class="w-100 img-responsive">
				<?php endif; ?>
			</div>
		</div>
		<hr class="hr">
		<!-- Logo -->
        <div class="mx-auto mt-5 mb-5" style="width:65%">
            <img src="https://belcourpreserves.com/wp-content/uploads/2016/03/BelcourPreserves_LOGOLinear-400.jpg" class="img-fluid mb-5" > 
        </div>
	</div>

<?php get_footer();?>