		<div class="generalheadline">
			<h3>
				<?php
					if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							the_post();
							printf( __( 'Author: %s', 'premium-code' ), '<span class="vcard">' . get_the_author() . '</span>' );
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'premium-code' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'premium-code' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'premium-code' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'premium-code' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'premium-code');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'premium-code' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'premium-code' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'premium-code' );

						elseif (is_search()):
							printf( __( 'Search Results for: %s', 'premium-code' ),   get_search_query() );
						else :
							_e( 'Archives', 'premium-code' );

						endif;
				 ?>
			</h3>
		</div><!--/generalheadline-->
		<div id="wrap">
				<?php while ( have_posts() ) : the_post(); ?>
						<div class="postfull">
									<?php
										if ( has_post_thumbnail($post->ID) ) {
											$postcalign_class="postcalign";
											echo '<div class="img thumbleft">';
											echo get_the_post_thumbnail($post->ID, 'blog-style45-image'); 
											echo '</div>';
										}
										else {
											$postcalign_class="";
										}
									?>

							<div class="<?php echo $postcalign_class; ?> fleft">

								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

								<section class="post-details">

											<?php
												_e('On ','premium-code');
												echo get_the_date('F d S, Y').'&#183;';
												echo '<a href="'.get_comments_link().'">';
												comments_number( ' no comments ', ' one comment ', ' % comments ' );
												echo '</a>&#183;';
												
												$cat = get_the_category();
												if(!empty($cat)) :
												_e(' In ','premium-code');
												foreach($cat as $cat_item):
													echo '<a class="sub-link" href="'.get_category_link($cat_item->cat_ID).'">'.$cat_item->cat_name.'</a>';
												endforeach;
												endif;
											?>	

								</section>

								<?php the_excerpt(); ?>

								<div class="post-bottom">

									<div class="avatar">
										<div class="img"><?php echo get_avatar(get_the_author_meta('ID'),68); ?></div>
										<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php _e('by ','premium-code'); the_author(); ?></a>

									</div><!--/avatar-->

									<div class="readmore simplebutton blue"><a href="<?php the_permalink(); ?>"><?php _e('Read More','premium-code'); ?></a></div>

								</div><!--/post-bottom-->

							</div><!--/postcalign-->

						</div><!--/postfull-->

					<?php
					endwhile;
				?>

				<div id="generalnavi" class="noborder" style="margin-bottom: 40px;">
					<?php previous_posts_link('<span class="prev">Prev</span>') ?>
					<?php next_posts_link('<span class="next">Next</span>') ?>
				</div><!--/generalnavi-->

		</div><!--/wrap-->