<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <main id="main">

 *

 * @package premium-code

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 9]>

	<script src="js/html5.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" href="ie.css" media="screen" />	

<![endif]-->



<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

	<span class="hiddenSpan"><?php echo get_template_directory_uri(); ?></span>	

		<header id="top">

			<div id="searchexpand" class="nod">

				<fieldset>


                    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                            <input type="text" value="" name="s" id="s" class="search" />
                            <input type="submit" id="searchsubmit" class="submit" value=" " />
                    </form>
				</fieldset>

			</div><!--/searchexpand-->

			<div id="topbar">

				<div id="topbarcenter">

					<nav id="headernav">

						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

					</nav><!--/headernav-->

					<!-- Mobile -->

					<div id="mobilenavexpand" class="nod"></div><!--/mobile nav expand button-->

					<?php
					
					if(get_theme_mod('logo_mobile')):
						echo '<div id="logo"><a href="'.esc_url( home_url( '/' ) ).'">';
							echo '<img src="'.get_theme_mod('logo_mobile').'" alt="'.get_bloginfo('name').'">';
						echo '</a></div>';
					else:
						echo '<div id="rwdlogo" class="nod">';
						echo '<h1 class="site-title"><a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name', 'display' ) ).'" rel="home">'.get_bloginfo( 'name' ).'</a></h1>';
						echo '<h2 class="site-description"><a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name', 'display' ) ).'" rel="home">'.get_bloginfo( 'description' ).'</a></h2>';
						echo '</div>';
					endif;

					?>

					<!-- Mobile -->

					<div id="searchicon">

						<div class="icon"></div>

						<div class="iconhover"></div>

					</div><!--/searchicon-->

				</div><!--/topbarcenter-->

			</div><!--/topbar-->

			<!-- Mobile -->

			<nav id="mobilenav" class="close_menu">

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

			</nav><!--/mobile menu-->

			<!-- Mobile -->

			<div id="headercenter">

				<?php

					if(get_theme_mod('logo')):
						echo '<div id="logo"><a href="'.esc_url( home_url( '/' ) ).'">';
							echo '<img src="'.get_theme_mod('logo').'" alt="'.get_bloginfo('name').'">';
						echo '</a></div>';
					else:
						echo '<div id="logo">';
						echo '<h1 class="site-title"><a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name', 'display' ) ).'" rel="home">'.get_bloginfo( 'name' ).'</a></h1>';
						echo '<h2 class="site-description"><a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name', 'display' ) ).'" rel="home">'.get_bloginfo( 'description' ).'</a></h2>';
						echo '</div>';
					endif;
				

					if( get_theme_mod('facebook_link') || get_theme_mod('twitter_link') || get_theme_mod('pinterest_link') || get_theme_mod('youtube_link') || get_theme_mod('linkedin_link') 
					|| get_theme_mod('flickr_link') || get_theme_mod('googleplus_link') || get_theme_mod('rss_link')):

					echo '<div id="socialmedia">';

					if(get_theme_mod('facebook_link')):

						echo '<a href="'.get_theme_mod('facebook_link').'">';

							echo '<div class="item">';

							echo '<div class="icon facebook"></div>';

							echo '<div class="iconh facebookh"></div>';

						echo '</div></a>';

					endif;

					if(get_theme_mod('twitter_link')):

						echo '<a href="'.get_theme_mod('twitter_link').'">';

							echo '<div class="item">';

							echo '<div class="icon twitter"></div>';

							echo '<div class="iconh twitterh"></div>';

						echo '</div></a>';

					endif;

					if(get_theme_mod('pinterest_link')):

						echo '<a href="'.get_theme_mod('pinterest_link').'">';

							echo '<div class="item">';

							echo '<div class="icon pinterest"></div>';

							echo '<div class="iconh pinteresth"></div>';

						echo '</div></a>';

					endif;

					if(get_theme_mod('youtube_link')):

						echo '<a href="'.get_theme_mod('youtube_link').'">';

							echo '<div class="item">';

							echo '<div class="icon youtube"></div>';

							echo '<div class="iconh youtubeh"></div>';

						echo '</div></a>';

					endif;

					if(get_theme_mod('linkedin_link')):

						echo '<a href="'.get_theme_mod('linkedin_link').'">';

							echo '<div class="item">';

							echo '<div class="icon linkedin"></div>';

							echo '<div class="iconh linkedinh"></div>';

						echo '</div></a>';

					endif;

					if(get_theme_mod('flickr_link')):

						echo '<a href="'.get_theme_mod('flickr_link').'">';

							echo '<div class="item">';

							echo '<div class="icon flickr"></div>';

							echo '<div class="iconh flickrh"></div>';

						echo '</div></a>';

					endif;

					if(get_theme_mod('googleplus_link')):

						echo '<a href="'.get_theme_mod('googleplus_link').'">';

							echo '<div class="item">';

							echo '<div class="icon googleplus"></div>';

							echo '<div class="iconh googleplush"></div>';

						echo '</div></a>';

					endif;

					if(get_theme_mod('rss_link')):

						echo '<a href="'.get_theme_mod('rss_link').'">';

							echo '<div class="item">';

							echo '<div class="icon rss"></div>';

							echo '<div class="iconh rssh"></div>';

						echo '</div></a>';

					endif;

					echo '</div>';

					endif;

				?>

				
			</div><!--/headercenter-->

		</header>

		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />