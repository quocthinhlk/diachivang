<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<div id="meanmenu" ></div>		
<div id="header-area-space"></div>
<?php get_template_part('views/sections/sidebar-bottom'); ?>
<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post(); ?>
		<?php $banner = get_field('banner_single_page', 'option'); ?>
		<div class="entry-banner" style="background:url(<?php echo esc_url($banner['url']); ?>) no-repeat scroll center center / cover">
			<div class="container">
				<div class="entry-banner-content">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="breadcrumb-area">
						<div class="entry-breadcrumb">
							<span property="itemListElement" class=" 1 breadcrumb-first" typeof="ListItem">
								<a href="/"><span class="fa fa-home" aria-hidden="true"></span> Home</a>
							</span>
							<em class="delimiter"> - </em>
							<span property="itemListElement" class=" 2 breadcrumb-first" typeof="ListItem"><a href="">
								<?php
								$categories = get_the_category();
								if ( ! empty( $categories ) ) {
									echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
								}
								?>
							</a></span>
							<em class="delimiter"> - </em>
							<span><span class="current" style="color: white;"><?php the_title(); ?></span></span>
						</div>
					</div>							
				</div>
			</div>
		</div>

		<div id="primary" class="content-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-12">
						<main id="main" class="site-main">
							<div id="post-2767" class="post-2767 post type-post status-publish format-standard has-post-thumbnail hentry category-sports tag-games tag-sports">
								<div id="contentHolder">
									<div class="entry-header">
										<div class="entry-meta">
											<h1 class="entry-title"><?php the_title(); ?></h1>
											<div class="entry-thumbnail-area" >
												<img class="thumbnail-img" src="<?php the_post_thumbnail_url(); ?>" />
											</div>
											<div class="entry-category">
												<div class="entry-cat-tag">
													<div class="ui-cat">
														<div class="ui-cat-tag" style="background:#0089ff">
															<span class="amount">
																<a href="#">
																	<?php
																	$categories = get_the_category();
																	if ( ! empty( $categories ) ) {
																		echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
																	}
																	?>
																</a>
															</span>
															<span class="r1"></span>
															<span class="r2"></span>
															<span class="r3"></span>
														</div>
													</div>
												</div>
											</div>
											<div class="entry-date">
												<ul>
													<li><span class="fa fa-clock-o" aria-hidden="true"></span> <span class="published updated"><?php echo get_the_date(); ?></span></li>
												</ul>									
											</div>

											<div class="entry-post-meta row">
												<div class="col-sm-8 col-xs-12  pull-left text-left  post-author">
													Posted by <?php echo get_the_author() ?> 
												</div>

											</div>
											<div class="clear"></div>
										</div>
									</div>
									<div class="entry-content">
										<?php the_content() ?>
									</div>
								</div>
						<!-- <div class="entry-footer">
							<div class="entry-footer-meta">			
								<div class="item-tags">
									<span>Tags:</span>
									<ul class="tag_styles">
										<li><a href="" rel="tag"><?php //get_the_tags() ?></a></li>
									</ul>			
								</div>
							</div>
						</div> -->

						
						<div class="post-share-area post-footer-share">
							<p>Chia sẻ bài viết</p>
							<div class="share-social">
								<p>
									<a href="<?php echo get_field('facebook', 'option'); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
									<a href="<?php echo get_field('twitter', 'option'); ?>" target="_blank"><i class="fab fa-twitter-square"></i></i></a>
									<a href="<?php echo get_field('google_plus', 'option'); ?>" target="_blank"><i class="fab fa-google-plus-square"></i></a>
									<a href="<?php echo get_field('linkedin', 'option'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
									
								</p>
							</div>
						</div>
						<div class="related-post">
							<p>Bài viết liên quan</p>
							<div class="container">
								<div class="row">
									<?php
									/*
									    Hiển thị bài viết liên quan theo post tags
									 */
									    $tags = wp_get_post_tags(get_the_ID());
									    if ($tags){
									    	$tag_ids = array();
									    	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
									    	$args=array(
									    		'tag__in' => $tag_ids,
									    		'post__not_in' => array(get_the_ID()),
									    		'posts_per_page' => 3,
									    	);
									    	$my_query = new wp_query($args);
									    	if( $my_query->have_posts() ):
									    		while ($my_query->have_posts()):$my_query->the_post();
									    			?>
									    			<div class="col-md-4 col-sm-4 col-xs-12">
														<div class="position-relative">
															<div class="img-scale-animate img-scale-thumb">
																<a href=""><img class="img-thumb-relative" alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>"></a>
															</div>
															<div class="rt-related-post-info">
																<h3 class="post-title">
																	<a href=""><?php the_title(); ?></a>
																</h3>
																<div class="post-date">
																	<ul>
																		<li><span><i class="fas fa-clock"></i></span> <?php echo get_the_date(); ?></li>
																	</ul>
																</div>
															</div>
														</div>
									</div>
								    				<?php
									    		endwhile;
									    	endif;
									    	wp_reset_query();
									    }
									    ?>

									
								</div>
							</div>
						</div>

					</div>							
					<div id="comments" class="comments-area single-blog-bottom">

						<div></div>
					</div>											
				</main>
			</div>

			<?php get_sidebar() ?>

		</div>
	</div>

</div>
		<?php endwhile;
		?>
	</main>

	<?php
	get_footer();
