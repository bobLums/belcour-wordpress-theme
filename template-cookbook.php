<?php
/*
Template Name: Cookbook
*/
?>
<?php get_header();?>
	<!-- Jumbotron -->
    <div id="events" class="jumbotron myHero botMarg" style="background-image: linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0)), url('<?php the_post_thumbnail_url( 'full-height' )?>');">
        <h1><?php the_title();?></h1>
    </div>
	<!-- where to Buy -->
    <div class="colorBackFull bHoney mb-4">
        <div class="row">
			<div class="col" style="text-align: center;">
				<h2>Where to get a copy</h2>
				<p class="pSmall mt-3" style="text-align: center;">Purchase online:</p>  
				<h3><a href="https://www.amazon.com/Belcour-Cookbook-Robin-Lim-Lumsden/dp/9768246081/ref=sr_1_1?dchild=1&keywords=the+belcour+cookbook&qid=1593274531&sr=8-1#ace-2545694624" target="_blank" rel="noopener"><b>On Amazon</b></a></h3>
				<p class="pSmall mt-3" style="text-align: center;">Available in-store:</p>
				<h3><a href="#bookshops"><b>Jamaican Art Stores, Boutiques and Pharmacies</b></a></h3>
				<div class="mx-auto mt-3 mb-3" style="width: 45px;">
					<img src="https://belcourpreserves.com/wp-content/uploads/2021/05/buttercon4.png" alt="butterfly" class="img-fluid" style="width: 45px; height: 45px;">
				</div>
				<p><b>For a signed copy contact Robin at 876-383-8942<br> or email at belcourpreserves[at]gmail[dot]com</b></p>
			</div>
		</div>
    </div>
	<div class="container mb-4">
		<div class="row">
			<div class="col">
				<h2><?php the_field('main_tag');?></h2>
				<p class="mb-3"><?php the_field('main_desc');?></p>
				<h3><a href="http://divafoodies.com/interview-with-cookbook-author-robin-lin-lumsden/" target="_blank" rel="noopener"><b>Interview with author Robin Lim Lumsden</b></a></h3>
				<div class="mx-auto mt-3 mb-3" style="width: 45px;">
					<img src="https://belcourpreserves.com/wp-content/uploads/2021/01/beecon4.png" alt="bee" class="img-fluid" style="width: 45px; height: 45px;">
				</div>
				<div class="mx-auto">
					<h3><a href="<?php the_field('cookbook_video_link');?>"><b><?php the_field('cookbook_interview_video_title');?></b></a></h3>
				</div>
			</div>
		</div>
	</div>
	<!-- Image -->
		<a href="
			<?php 
                $image = get_field('hero_cookbook_img_1');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>
		"><img src="
			<?php 
                $image = get_field('hero_cookbook_img_1');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>
		" alt="Belcour Cookbook Grid" class="img-responsive w-100 hover-shadow"></a>
	<!-- Cookbook History -->
	<div class="container container--cookbookGrid">
		<div class="row mb-5">
			<div class="col">
				<h2 class="mt-4"><?php the_field('first_para_t');?></h2>
				<p><?php the_field('first_para', false, false);?></p>
			</div>
		</div>
	</div>
	<!-- Cookbook Carousel -->
	    <div id="tastyCarousel2" class="carousel slide carousel-fade botMarg" data-ride="carousel" data-interval="3500">
        <div class="carousel-inner">
            <div class="carousel-item active bookSlide" style="background-image: url('<?php 
                $image = get_field('cookbook_car_img_1');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
            <div class="carousel-item bookSlide" style="background-image: url('<?php 
                $image = get_field('cookbook_car_img_2');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
			<div class="carousel-item bookSlide" style="background-image: url('<?php 
                $image = get_field('cookbook_car_img_3');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>'); position: bottom;"></div>
            <div class="carousel-item bookSlide" style="background-image: url('<?php 
                $image = get_field('cookbook_car_img_4');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');"></div>
            <div class="carousel-item bookSlide" style="background-image: url('<?php 
                $image = get_field('cookbook_car_img_5');
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
	<!-- Cookbook History Contd -->
	<div class="container">
		<div class="row mb-5">
			<div class="col">
				<h2 class="mt-4"><?php the_field('second_para_t');?></h2>
				<p><?php the_field('second_para', false, false);?></p>
			</div>
		</div>
	</div>
	    <!-- testimonials -->
    <div class="colorBackFull emerald botMarg" style="padding-right: 0px; padding-left: 0px; padding-top:40px;">
        <div class="container" style="padding: 0px;">
		    <h2 class="mb-2">What people are saying:</h2>
		    <hr class="whiteLine w-50 mb-4">
		    <div id="tastyCarousel4" class="carousel slide botMarg w-100 testimonials" data-ride="carousel" data-interval="4000" style="text-align: center;">
			    <div class="carousel-inner">
					<div class="carousel-item active">
					    <div class="mx-auto testSlide2">			
						    <p class="mb-4"><i>
								"Author Robin Lim Lumsden takes three cuisines from her heritage, Jamaican, French, and Chinese, which are three of my favorites, and has 
								rolled them into one gorgeous cookbook you'll want to open again and again whether you're making a weeknight dinner for your family or 
								having friends over for a party. Some of my favorites include Flank Steak with Mango, Green Curry Shrimp with Chive Dumplings, Honey 
								Jerked Roast Chicken, Green Papaya Salad, Robin's Coconut Cream Pie, and Scotch on the Rocks Rum Cake. But with all the flavors in 
								these well thought-out recipes, you'll be eating well for months if you use this book on a regular basis. It's one of my absolute 
								favorites."
						    </i></p>
						    <h3 class="mt-3 mb-3"><a href="https://twitter.com/traceyceurvels" target="_blank">Tracey Ceurvels</a></h3>
						    <p class="pSmall">
							    Author of The NYC Kitchen | Editor at Tracey's Global Kitchen<br>
						    </p>
					    </div>
				    </div> 
					<div class="carousel-item">
					    <div class="mx-auto testSlide2">			
						    <p class="mb-4"><i>
							    "Flipping through the pages of the Belcour Cookbook, I was transported into a journey that tingles all your senses... A beautiful 
								array of colours, tastes, scents, spices, flavours... Belcour truly epitomizes what Jamaica is all about "out of many, one people". 
								It is beautifully set up and never feels stagnant or impersonal: the author takes you on a journey throughout the island with her 
								recipes but also by sharing precious family anecdotes. The recipes are wonderfully written and photographed with much finesse.
								I truly enjoyed this book which respects tradition but was never predictable enough for the curious cook... there are some unexpected 
								twists & turns around flavour combinations which make this cookbook truly unique!" 
						    </i></p>
						    <h3 class="mt-3 mb-3"><a href="https://nanas.kitchen/" target="_blank">Marianna Farag</a></h3>
							<p class="pSmall mb-4">
							    Food Blogger | Restaurateur, Marianna's Kitchen<br>
								Kingston, Jamaica
						    </p>
					    </div>
				    </div>
				    <div class="carousel-item">
					    <div class="mx-auto testSlide2">			
						    <p class="mb-4"><i>
							    "This far exceeded my expectations. More than just a cookbook, it is a look into the diverse culture of Jamaica and a Jamaican 
								family's history and culinary legacy. The author's passion for cooking, entertaining and family shines through, and her recipes 
								are easy to follow. I have already made some of the dishes with great success. The suggested menus for entertaing groups of 12-15 
								are also a wonderful idea. the photography in the book is beautiful, and showcases the beauty of Jamaica as well as the beauty of 
								it's food and diverse ethnic mixtures. So glad I bought this!"
						    </i></p>
						    <h3 class="mt-3 mb-3">Donna Brice</h3>
							<a href="https://www.amazon.com/Belcour-Cookbook-Robin-Lim-Lumsden/dp/9768246081/ref=sr_1_1?dchild=1&keywords=the+belcour+cookbook&qid=1593274531&sr=8-1#ace-2545694624" target="_blank">See more reviews on amazon.com</a>
					    </div>
				    </div> 
				    <!--
				    <div class="carousel-item testSlide2">
					    <div class="mx-auto" style="width: 80%;">			
						    <p class="mb-5"><i>
						    </i></p>
						    <h3 class="mt-3 mb-3"><a href="" target="_blank"></a></h3>
						    <p class="pSmall">
							    Chef<br>
							    Establishment
						    </p>
					    </div>
				    </div> -->
				    <a class="carousel-control-prev" href="#tastyCarousel4" role="button" data-slide="prev" style="align-self: flex-end;">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
				    </a>
				    <a class="carousel-control-next" href="#tastyCarousel4" role="button" data-slide="next" style="align-self: flex-end;">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
				    </a>
			    </div> 
		    </div>
        </div>
    </div>
	<!-- Bookstores -->
	<div class="d-flex align-items-center botMarg colorBackFull bpurp">
		<div class="container pt-3">
			<h2 id="bookshops">Jamaican Art Stores, Boutiques and Pharmacies</h2>
			<hr class="w-50 whiteLine mt-4 mb-4">
			<div class="row">
				<div class="col-6 col-sm-4 mb-4">
					<p class="myBookshops"><b>
						Craft Cottage<br>
						Village Plaza, Constant Spring Rd<br>
						Kingston, Jamaica<br>
						876-926-0719
					</b></p>
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<p class="myBookshops"><b>
						Liguanea Drug and Garden<br>
						134 Old Hope Rd<br>
						Kingston, Jamaica<br>
						876-977-0066
					</b></p>
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<p class="myBookshops"><b>
						Uncorked Ltd.<br>
						Shop 2, 29 Barbican Rd<br>
						Kingston, Jamaica<br>
						876-632-5500
					</b></p>
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<p class="myBookshops"><b>
						Monarch Pharmacy<br>
						Shop 23, 106 Hope Rd<br>
						Kingston, Jamaica<br>
						876-978-3495
					</b></p>
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<p class="myBookshops"><b>
						Island Art & Framing<br>
						20 Barbican Rd<br> 
						Kingston, Jamaica<br>
						876-977-0318
					</b></p>
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<p class="myBookshops"><b>
						Olympia Gallery<br>
						202 Old Hope Rd<br>
						Kingston, Jamaica<br>
						876-927-1608
					</b></p>
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<p class="myBookshops"><b>
						My Jamaica<br>
						General Food Plaza, 6 Liguanea Ave<br>
						Kingston, Jamaica<br>
						876-977-2805
					</b></p>
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<p class="myBookshops"><b>
						Gallery of West Indian Art<br>
						Nicola De Lissa<br>
						Montego Bay, Jamaica<br>
						876-839-9001
					</b></p>
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<p class="myBookshops"><b>
						Books & CDs<br>
						Norman Manley Int'l Airport<br>
						Kingston, Jamaica<br>
						876-924-8379
					</b></p>
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<p class="myBookshops"><b>
						Uncorked Jamaica<br>
						Sovereign North<br>
						29 Barbican Road<br>
						Kingston 6, Jamaica<br>
						876-632-5500
					</b></p>
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<p class="myBookshops"><b>
						Liguanea Lane Pharmacy<br>
						Liguanea Lane / Hi-Lo Plaza<br>
						Kingston 6, Jamaica<br>
						876-977-2639
					</b></p>
				</div>
				<div class="col-6 col-sm-4 mb-4">
					<p class="myBookshops"><b>
						Harmony Hall Gallery<br>
						Ocho Rios, Jamaica<br>
						876-975-4222
					</b></p>
				</div>
				<!--
				<div class="col-6 col-sm-4 mb-4">
					<p class="myBookshops"><b>
						Calabash Boutique<br>
						Treasure Beach, St. Elizabeth
					</b></p>
				</div>
				
				<div class="col col-sm-4 mb-4">
					<p><b>
						[Shop]<br>
					</b></p>
				</div>
				-->
			</div>
			<div class="mx-auto mt-4 mb-5" style="width: 45px;">
				<img src="https://belcourpreserves.com/wp-content/uploads/2021/05/buttercon4.png" alt="butterfly" class="img-fluid" style="width: 45px; height: 45px;">
			</div>
		</div>
    </div>
<div class="imageDiv botMarg" style="background-image: url('<?php the_field('pic1');?>'); height: 600px;"></div>

<?php get_footer();?>