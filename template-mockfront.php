<?php
/*
Template Name: Mock Front
*/
?>
<?php get_header();?>
    <!-- <h1 style="color: #fff; font-size: 3.5rem; margin: 80px auto 0px auto; z-index: 1000; position: relative;">Belcour Preserves</h1>  style="margin-top: -147px;" -->
    <!-- Carousel -->
    <div id="tastyCarousel" class="carousel slide carousel-fade botMarg" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active frontSlide" style="background-image: url('<?php 
                $image = get_field('front_image_1');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');">
                <h1 style="color: #fff; font-weight: normal;">Belcour Preserves</h1>
            </div>
            <div class="carousel-item frontSlide" style="background-image: linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0)), url('<?php 
                $image = get_field('front_image_2');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');">
                <p class="fauxH">Belcour Preserves</p>
            </div>
            <div class="carousel-item frontSlide" style="background-image: url('<?php 
                $image = get_field('front_image_3');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');">
                <p class="fauxH">Belcour Preserves</p>
            </div>
            <div class="carousel-item frontSlide" style="background-image: linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0)), url('<?php 
                $image = get_field('front_image_4');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');">
                <p class="fauxH">Belcour Preserves</p>
            </div>
            <div class="carousel-item frontSlide" style="background-image: url('<?php 
                $image = get_field('front_image_5');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');">
                <p class="fauxH">Belcour Preserves</p>
            </div>
            <div class="carousel-item frontSlide" style="background-image: url('<?php 
                $image = get_field('front_image_6');
                $url = $image['url'];
                $size = 'full-height'; // (thumbnail, medium, large, full or custom size)
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];
                echo esc_url($thumb);
            ?>');">
                <p class="fauxH">Belcour Preserves</p>
            </div>
        </div> 
        <a class="carousel-control-prev" href="#tastyCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#tastyCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> 
    <!-- Full color block -->
    <div class="colorBackFull emerald botMarg">
        <div class="container">
            <h2 style="font-size: 1.20rem;"><?php the_field('tagline');?></h2>
            <div class="mx-auto mt-4 mb-3" style="width: 45px;">
                <img src="https://belcourpreserves.com/wp-content/uploads/2021/01/beecon3.png" alt="bee" class="img-fluid" style="width: 45px; height: 45px;">
            </div>
            <p class="mt-3"><?php the_field('company', false, false);?></p>
         </div>
    </div>
    <!-- Where to Buy -->
    <div class="colorBackFull mauve botMarg">
        <div class="container">       
            <h3 class="mb-3"><b>Available island-wide at major Jamaican supermarkets</b></h3>
            <div class="mx-auto mt-4 mb-3" style="width: 45px;">
                <img src="https://belcourpreserves.com/wp-content/uploads/2021/05/buttercon4.png" alt="butterfly" class="img-fluid" style="width: 45px; height: 45px;">
            </div>
            <p class="pSmall" style="text-align: center;">And for online purchase:</p>
            <h4><a href="https://loshusansupermarket.com/brands/Belcour.html" target="_blank">Loshusan's online store.</a></h4>
        </div>
    </div>
    <div class="container">
        <div class="row sidePad">
            <div class="mb-2 mt-4 mx-auto largeLink" style="max-width: 400px; text-align: center; font-size: 1.5rem;">  
                <h2><a href="https://belcourpreserves.com/products/" class=""><b>See Our Products</b></a></h2>
            </div>
            <div class="mx-auto mb-2">
                <img src="https://belcourpreserves.com/wp-content/uploads/2020/11/bannerSml.jpg" class="img-fluid" alt="Full product line">
            </div>
            <p><?php the_field('product_description');?></p>
        </div>
    </div>
    <!-- testimonials -->
    <div class="colorBackFull bpurp topbotMarg" style="padding-right: 0px; padding-left: 0px; padding-top:40px;">
        <div class="container" style="padding: 0px;">
		    <h2 class="mb-2">Big Ups</h2>
		    <hr class="whiteLine w-50 mb-4">
		    <div id="tastyCarousel3" class="carousel slide botMarg w-100 testimonials" data-ride="carousel" data-interval="4000" style="text-align: center;">
			    <div class="carousel-inner">
				    <div class="carousel-item active">
					    <div class="mx-auto testSlide">			
						    <p class="mb-4"><i>
							    "I have been a big fan of Belcour Products for many years. I love their consistent flavours and my absolute 
							    favorite is their Pepper Jam. I never run out of it! Their encouragement of and involvement with the local 
							    farmers is highly commendable. They just get it right!"
						    </i></p>
						    <div class="mx-auto mt-4 mb-5" style="width: 45px;">
							    <img src="https://belcourpreserves.com/wp-content/uploads/2021/05/dragoncon4.png" alt="dragon" class="img-fluid" style="width: 45px; height: 45px;">
						    </div>
						    <h3 class="mt-3 mb-3"><a href="https://couplesresorts.co.uk/blog/stefan-spath-executive-chef/" target="_blank">Stefan Spath</a></h3>
						    <p class="pSmall">
							    Corporate Executive Chef<br>
							    Couples Resorts, Jamaica 
						    </p>
					    </div>
				    </div>
				    <div class="carousel-item">
					    <div class="mx-auto testSlide">			
						    <p class="mb-4"><i>
							    "I fell in love with the whole line of Belcour preserves and sauces while visiting dear friends in Jamaica several 
							    years ago.  We couldn't stuff our suitcases with enough to bring home!  The intense and fresh flavour these sweet 
							    and savoury masterpieces bring to my dishes keep me ordering more and no other sauce will do! If you want to kick 
							    up your cooking a notch, I highly recommend the entire line of Belcour Preserves." 
						    </i></p>
						    <h3 class="mt-3 mb-3"><a href="https://www.msdnutrition.com/" target="_blank">Molly Devine</a></h3>
						    <p class="pSmall">
							    Registered Dietitian | Cookbook Author | Personal Chef<br>
							    Durham, NC
						    </p>
					    </div>
				    </div> 
				    <div class="carousel-item">
					    <div class="mx-auto testSlide">			
						    <p class="mb-4"><i>
							    "Belcour's entire line of sauces, jams and chutneys are a gourmet's paradise. As a chef, the honey mustard is my go-to for 
							    dressings, marinades and to flavour my potpies and curries. The sorrel chutney and guava preserves add an exotic twist to both 
							    sweet and savoury dishes, giving extra depth and a sensory trip to the Caribbean. The company's commitment to bees and local 
							    farmers is an admirable way or preserving Jamaica's land and heritage."
						    </i></p>
						    <h3 class="mt-3 mb-3"><a href="https://www.instagram.com/sweet_cassava/?hl=en" target="_blank">Chef Susan Taves</a></h3>
						    <p class="pSmall">
							    Executive Chef | Cookbook Editor<br>
							    Recipe Developer | Food Waste Subject Matter Expert<br>
							    Austin, Texas
						    </p>
					    </div>
				    </div> 
				    <div class="carousel-item">
					    <div class="mx-auto testSlide" style="width: 80%;">			
						    <p class="mb-5"><i>
                            "I am the biggest fan of Belcour Preserve products! I use them all. The fact that they are all natural is a big plus but the flavours 
                            are bar none. They are consistent and smoothness is so palate pleasing. Hard to pick a favorite but I am never without Honey Jerk, 
                            Honey mustard and the only Guava Jam to use ever!"
						    </i></p>
						    <h3 class="mt-3 mb-3"><a href="https://www.instagram.com/2kchefs/" target="_blank">Kara Pessoa</a></h3>
						    <p class="pSmall">
							    Caterer | Executive Chef<br>
							    Kingston, Jamaica
						    </p>
					    </div>
				    </div> 
				    <!--
				    <div class="carousel-item">
					    <div class="mx-auto testSlide" style="width: 80%;">			
						    <p class="mb-5"><i>
						    </i></p>
						    <h3 class="mt-3 mb-3"><a href="" target="_blank"></a></h3>
						    <p class="pSmall">
							    Chef<br>
							    Establishment
						    </p>
					    </div>
				    </div> -->
				    <a class="carousel-control-prev" href="#tastyCarousel3" role="button" data-slide="prev" style="align-self: flex-end;">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
				    </a>
				    <a class="carousel-control-next" href="#tastyCarousel3" role="button" data-slide="next" style="align-self: flex-end;">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
				    </a>
			    </div> 
		    </div>
        </div>
    </div>
    <div class="container">
        <!-- Dynamic Section -->
        <div class="row d-flex align-items-stretch">
        <!-- Recipe Section -->
            <div class="col-sm-6 topbotMarg sidePad">    
                <?php
                $args2 = array( 'post_type' => 'Recipes', 
                                'numberposts' => 1 );
                $lastrecipes = get_posts( $args2 );
                foreach($lastrecipes as $post) : setup_postdata($post); ?>
                <div class="colorBackFull darkRed" style="padding: 0 0 15px 0; height: 100%;">
                    <div class="imageDiv mb-3" style="background-image: linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0)), url('<?php the_post_thumbnail_url( 'page-img' )?>');">
                        <p class="pSmall mt-3" style="text-align: center;">Newest Recipe:</p>  
                        <h3><a href="<?php the_permalink();?>"><b><?php the_title();?></b></a></h3>
                    </div>
                    <div class="mx-auto mb-3 pt-1 pr-4 pl-4" style="text-align: center;"> 
                        <p><?php the_field('intro');?></p>  
                        <div class="mx-auto mb-3 mt-3" style="width: 45px;">
                            <img src="https://belcourpreserves.com/wp-content/uploads/2021/05/buttercon4.png" alt="bee" class="img-fluid" style="width: 45px; height: 45px;">
                        </div>
                        <h3 class="mt-3"><a href="https://belcourpreserves.com/recipes/"><b>See All Our Recipes</b></a></h3>
                    </div>
                    <?php endforeach; ?> 
                </div>
            </div>
        <!-- Blog Section -->
            <div class="col-sm-6 topbotMarg sidePad">
                <?php
                $args = array( 'numberposts' => 1,);
                $lastposts = get_posts( $args );
                foreach($lastposts as $post) : setup_postdata($post); ?>
                <div class="colorBackFull darkRed" style="padding: 0 0 15px 0; height: 100%;">
                    <div class="imageDiv mb-3" style="background-image: linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0)), url('<?php the_post_thumbnail_url( 'page-img' )?>');">
                        <p class="pSmall mt-3" style="text-align: center;">Goings On:</p>
                        <h3><a href="<?php the_permalink();?>"><b><?php the_title();?></b></a></h3> 
                    </div>
                    <div class="mx-auto mb-3 pt-1 pr-4 pl-4" style="text-align: center;">
                        <p><?php the_excerpt();?></p>
                        <div class="mx-auto mb-3 mt-3" style="width: 45px;">
                            <img src="https://belcourpreserves.com/wp-content/uploads/2021/05/dragoncon4.png" alt="bee" class="img-fluid" style="width: 45px; height: 45px;">
                        </div>
                        <h3 class="mt-3"><a href="https://belcourpreserves.com/blog/"><b>The Belcour Blog</b></a></h3>
                    </div>
                    <?php endforeach; ?> 
                </div>
            </div>
        </div>
        <div class="row topbotMarg sidePad">
            <div class="imageDiv" style="background-image: url('https://belcourpreserves.com/wp-content/uploads/2021/02/IMG_2443-scaled.jpeg');"></div>
        </div>
    </div>
    <div class="colorBackFull bHoney" style="margin-top: 10px; margin-bottom: 5px;">
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
				    <div class="mx-auto mt-3 mb-3" style="width: 45px;">
					    <img src="https://belcourpreserves.com/wp-content/uploads/2021/05/buttercon4.png" alt="butterfly" class="img-fluid" style="width: 45px; height: 45px;">
				    </div>
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
    <div class="container">
        <div class="row bigFeed">
            <?php echo do_shortcode("[instagram-feed showfollow=false]"); ?>
        </div>
        <div class="row smallFeed">
            <?php echo do_shortcode("[instagram-feed showfollow=false num=3 cols=1]"); ?>
        </div>
        <!-- Logo -->
        <div class="mx-auto mt-5 mb-5" style="width:65%">
            <img src="https://belcourpreserves.com/wp-content/uploads/2016/03/BelcourPreserves_LOGOLinear-400.jpg" class="img-fluid mb-5" > 
        </div>
    </div>

<?php get_footer();?>
