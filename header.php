<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php 
            if ( is_post_type_archive( 'products' ) ) {
                echo 'Belcour Preserves - Products';
            } elseif ( is_post_type_archive( 'recipes' ) ) {
                echo 'Belcour Preserves - Recipes';
            } elseif ( is_singular( 'products' ) ) {
                echo the_field('page_title');
            }  elseif ( is_singular( 'recipes' ) ) {
                echo get_the_title();
            } elseif ( is_home() ) {
                echo "The Belcour Blog";    
			} elseif ( is_front_page() ){
                echo "Belcour Preserves";
			} elseif ( is_page_template( 'template-about.php' ) ){
                echo "About Belcour Preserves";
            } elseif ( is_page_template( 'template-cookbook.php' ) ){
                echo "The Belcour cookbook";
            } elseif ( is_page_template( 'template-media.php' ) ){
                echo "Media about Belcour Preserves";
            } elseif ( is_page_template( 'template-visit.php' ) ){
                echo "Visit Belcour Lodge";
            } elseif ( is_page_template( 'template-contactus.php' ) ){
                echo "Contact Belcour Preserves";
            } elseif ( is_tax( 'types' ) ){
                echo "Belcour Recipes: ";
                echo single_cat_title();
            } elseif ( is_tax( 'components' ) ){
                echo "Belcour Recipes with ";
                echo single_cat_title();
            } elseif ( is_category() ){
                echo "Belcour Blog Posts: ";
                echo single_cat_title();
            } else {
                echo get_the_title();
			}
         ?></title>
        <meta name="description" content="<?php 
            if ( is_post_type_archive( 'products' ) ) {
                echo 'Artisanal hot pepper sauces, fruit preserves, and savory condiments made in Jamaica with locally grown, fresh produce, herbs and Blue Mountain honey.';
            } elseif ( is_post_type_archive( 'recipes' ) ) {
                echo 'Jamaican, Caribbean and other Recipes for entertaining and healthy eating';
            } elseif ( is_singular( 'products' ) ) {
                echo the_field('page_title');
            }  elseif ( is_singular( 'recipes' ) ) {
                echo the_field('intro', false, false);
            } elseif ( is_home() ) {
                echo 'Blogging about Jamaican food, culture, entertaining, gardening, hospitality and more.';    
			} elseif ( is_front_page() ){
                echo 'Artisanal hot pepper sauces, fruit preserves, and savory condiments made in Jamaica with locally grown, fresh produce, herbs and Blue Mountain honey.';
			} elseif ( is_page_template( 'template-about.php' ) ){
                echo 'How Belcour Preserves the business came to be, and how we became bee farmers in the Blue Mountains.';
            } elseif ( is_page_template( 'template-cookbook.php' ) ){
                echo 'This book celebrates a Jamaican family’s legacy of love, food and hospitality.';
            } elseif ( is_page_template( 'template-media.php' ) ){
                echo 'Videos and other media about Belcour Preserves';
            } elseif ( is_page_template( 'template-visit.php' ) ){
                echo 'Belcour Lodge is a venue for occasional pop-up themed food and wellness events and welcomes guests at our cottage bed and breakfast.';
            } elseif ( is_page_template( 'template-contactus.php' ) ){
                echo 'Get in touch via email or phone';
            } elseif ( is_tax( 'types' ) ){
                echo 'Jamaican, Caribbean and other Recipes by Course';
            } elseif ( is_tax( 'components' ) ){
                echo 'Jamaican, Caribbean and other Recipes by Ingredient';
            } elseif ( is_category() ){
                echo 'Blogging about Jamaican food, culture, entertaining, gardening, hospitality and more.';
            } elseif ( is_single() ) {
                echo get_the_excerpt();
			} else {
                echo get_the_title();
			}
         ?>" />
         <?php 
            if ( is_home() ){
                echo '<link rel="canonical" href="https://belcourpreserves.com/">';  
		    }
            if ( has_post_thumbnail() ){
                echo '<meta property="og:image" content="';
                echo the_post_thumbnail_url(__('(more…)'));
                echo '" />';  
		    }
            else {
                echo '<meta property="og:image" content="';
                echo home_url( '/wp-content/uploads/2022/02/belcour-preserves-products-1766x1000.jpg' );
                echo '" />';
			}
            echo '<meta property="og:image:type" content="image/jpeg" />';
            echo '<meta property="og:image:width" content="400" />';
            echo '<meta property="og:image:height" content="300" />';
            if ( is_singular( 'recipes' ) || is_single ){
                echo '<meta property="og:type" content="article" />';
            }
            else {
                echo '<meta property="og:type" content="website" />';
			}
            if ( is_post_type_archive( 'products' ) ) {
                echo '<meta property="og:url" content="';
                echo home_url('/products/');
                echo '" />';
			}
            else if ( is_post_type_archive( 'recipes' ) ) {
                echo '<meta property="og:url" content="';
                echo home_url('/recipes/');
                echo '" />';
            }
            else {
                echo '<meta property="og:url" content="';
                echo the_permalink();
                echo '" />';
			}
            echo '<meta property="og:locale" content="en_GB" />';
        ?>
        <meta property="og:title" content="<?php 
            if ( is_post_type_archive( 'products' ) ) {
                echo 'Belcour Preserves - Products';
            } elseif ( is_post_type_archive( 'recipes' ) ) {
                echo 'Belcour Preserves - Recipes';
            } elseif ( is_singular( 'products' ) ) {
                echo the_field('page_title');
            }  elseif ( is_singular( 'recipes' ) ) {
                echo get_the_title();
            } elseif ( is_home() ) {
                echo "The Belcour Blog";    
			} elseif ( is_front_page() ){
                echo "Belcour Preserves";
			} elseif ( is_page_template( 'template-about.php' ) ){
                echo "About Belcour Preserves";
            } elseif ( is_page_template( 'template-cookbook.php' ) ){
                echo "The Belcour cookbook";
            } elseif ( is_page_template( 'template-media.php' ) ){
                echo "Media about Belcour Preserves";
            } elseif ( is_page_template( 'template-visit.php' ) ){
                echo "Visit Belcour Lodge";
            } elseif ( is_page_template( 'template-contactus.php' ) ){
                echo "Contact Belcour Preserves";
            } elseif ( is_tax( 'types' ) ){
                echo "Belcour Recipes: ";
                echo single_cat_title();
            } elseif ( is_tax( 'components' ) ){
                echo "Belcour Recipes with ";
                echo single_cat_title();
            } elseif ( is_category() ){
                echo "Belcour Blog Posts: ";
                echo single_cat_title();
            } else {
                echo get_the_title();
			}
        ?>" />
        <meta property="og:description" content="<?php 
            if ( is_post_type_archive( 'products' ) ) {
                echo 'Artisanal hot pepper sauces, fruit preserves, and savory condiments made in Jamaica with locally grown, fresh produce, herbs and Blue Mountain honey.';
            } elseif ( is_post_type_archive( 'recipes' ) ) {
                echo 'Jamaican, Caribbean and other Recipes for entertaining and healthy eating';
            } elseif ( is_singular( 'products' ) ) {
                echo the_field('page_title');
            }  elseif ( is_singular( 'recipes' ) ) {
                echo the_field('intro', false, false);
            } elseif ( is_home() ) {
                echo 'Blogging about Jamaican food, culture, entertaining, gardening, hospitality and more.';    
			} elseif ( is_front_page() ){
                echo 'Artisanal hot pepper sauces, fruit preserves, and savory condiments made in Jamaica with locally grown, fresh produce, herbs and Blue Mountain honey.';
			} elseif ( is_page_template( 'template-about.php' ) ){
                echo 'How Belcour Preserves the business came to be, and how we became bee farmers in the Blue Mountains.';
            } elseif ( is_page_template( 'template-cookbook.php' ) ){
                echo 'This book celebrates a Jamaican family’s legacy of love, food and hospitality.';
            } elseif ( is_page_template( 'template-media.php' ) ){
                echo 'Videos and other media about Belcour Preserves';
            } elseif ( is_page_template( 'template-visit.php' ) ){
                echo 'Belcour Lodge is a venue for occasional pop-up themed food and wellness events and welcomes guests at our cottage bed and breakfast.';
            } elseif ( is_page_template( 'template-contactus.php' ) ){
                echo 'Get in touch via email or phone';
            } elseif ( is_tax( 'types' ) ){
                echo 'Jamaican, Caribbean and other Recipes by Course';
            } elseif ( is_tax( 'components' ) ){
                echo 'Jamaican, Caribbean and other Recipes by Ingredient';
            } elseif ( is_category() ){
                echo 'Blogging about Jamaican food, culture, entertaining, gardening, hospitality and more.';
            } elseif ( is_single() ) {
                echo get_the_excerpt();
			} else {
                echo get_the_title();
			}
         ?>" />
		<?php wp_head();?>
        <link rel="stylesheet" href="https://use.typekit.net/qmg0jmj.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C300%2C300italic%2C400%2C500%2C700&amp;ver=5.5.3" type="text/css" media="all">
        <script defer data-domain="belcourpreserves.com" src="https://plausible.io/js/plausible.js"></script>
        <?php 
            if ( is_page_template( 'template-shop.php' ) ){
                echo "
                <style>
                	.select2-dropdown {
		                border-color: #DDDDDD !important;
		                border-radius: 0px;
	                }
	                .select2-container--default .select2-search--dropdown .select2-search__field 
	                {
		                border: 1px solid #DDDDDD !important;
	                }
                </style>";
			}
            ?>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-controls="multiCollapseExample1 multiCollapseExample2 multiCollapseExample3" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="https://belcourpreserves.com/" style="margin: 0px;"><div class="homeIcon"></div></a>
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'main-menu',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse multi-collapse',
                            'container_id'      => 'multiCollapseExample1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                    <div class="collapse navbar-collapse multi-collapse" id="multiCollapseExample3">
                        <div class="row-icons-col">
                            <a href="https://www.instagram.com/belcourpreserves/" style="margin-right: 5px;" target="_blank" rel="noopener"><div class="instaIcon"></div></a>
                            <a href="https://www.facebook.com/BelcourPreserves" target="_blank" rel="noopener"><div class="faceIcon"></div></a>
                        </div>
                    </div>
                    <div class="row-icons">
                        <a href="https://www.instagram.com/belcourpreserves/" style="margin-right: 5px;" target="_blank" rel="noopener"><div class="instaIcon"></div></a>
                        <a href="https://www.facebook.com/BelcourPreserves" target="_blank" rel="noopener"><div class="faceIcon"></div></a>
                    </div> 
                    <div id="multiCollapseExample2" class="collapse navbar-collapse multi-collapse searcher" style="flex-grow:0; margin:0px;"><?php get_search_form();?></div>
                </div>
            </nav>
		</header>
        <div class="content-wrap">

