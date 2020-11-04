<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package demo
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

		<div class="entry-banner" style="background:url(https://www.radiustheme.com/demo/wordpress/themes/barta/wp-content/themes/barta/assets/img/banner.jpg) no-repeat scroll center center / cover">
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
										<li><a href="" rel="tag"><?php get_the_tags() ?></a></li>
									</ul>			
								</div>
							</div>
						</div> -->


						<div class="post-share-area post-footer-share">
							<p>You can share this post!</p><?php the_field('facebook'); ?>
							<div class="post-footer">
								<div class="share-links ">
									<a href="<?php echo get_field('facebook', 'option'); ?>" rel="external" target="_blank" class="facebook-share-button large-share-button"><span class="fa fa-facebook"></span> <span class="social-text"></span></a>
									<a href="<?php echo get_field('twitter', 'option'); ?>" rel="external" target="_blank" class="twitter-share-button large-share-button"><span class="fa fa-twitter"></span> <span class="social-text"></span></a>
									<a href="<?php echo get_field('google_plus', 'option'); ?>" rel="external" target="_blank" class="google-share-button"><span class="fa fa-google"></span> <span class="screen-reader-text"></span></a>
									<a href="<?php echo get_field('linkedin', 'option'); ?>>" rel="external" target="_blank" class="linkedin-share-button"><span class="fa fa-linkedin"></span> <span class="screen-reader-text"></span></a>
									<!-- <a href="#" rel="external" target="_blank" class="whatsapp-share-button"><span class="fa fa-whatsapp"></span> <span class="screen-reader-text">Whatsapp</span></a> -->
									<!-- <a href="#" rel="external" target="_blank" class="stumbleupon-share-button"><span class="fa fa-stumbleupon"></span> <span class="screen-reader-text">StumbleUpon</span></a> -->
									<!-- <a href="#" rel="external" target="_blank" class="tumblr-share-button"><span class="fa fa-tumblr"></span> <span class="screen-reader-text">Tumblr</span></a> -->
									<a href="<?php echo get_field('pinterest', 'option'); ?>" rel="external" target="_blank" class="pinterest-share-button"><span class="fa fa-pinterest"></span> <span class="screen-reader-text"></span></a>
									<!-- <a href="#" rel="external" target="_blank" class="reddit-share-button"><span class="fa fa-reddit"></span> <span class="screen-reader-text">Reddit</span></a> -->
									<!-- <a href="#" rel="external" target="_blank" class="email-share-button"><span class="fa fa-envelope"></span> <span class="screen-reader-text">Share via Email</span></a> -->
									<a href="#" rel="external" target="_blank" class="print-share-button"><span class="fa fa-print"></span> <span class="screen-reader-text"></span></a>				
								</div>	
							</div>
						</div>	
						<!-- next/prev post -->

						<!-- <div class="row no-gutters divider post-navigation">

							<div class="col-lg-6 col-md-6 col-sm-6 col-6 text-left">
								<i class="fa fa-angle-left" aria-hidden="true"></i>	
								<a href="" rel="prev">Previous article</a>				
								<h3 class="post-nav-title"><a href="" rel="prev">Vinales will be as tough for Rossi as Lorenzo – Suzuki MotoGP boss</a></h3>			
							</div>
							<div class=" col-lg-6 col-md-6 col-sm-6 col-6  text-right">
								<a href="" rel="prev">Next article</a> 
								<i class="fa fa-angle-right" aria-hidden="true"></i>
								<h3 class="post-nav-title"><a href="" rel="next">Magical fish basically has the power to conjure its own Patronus</a></h3>			
							</div>

						</div> -->	


						<!-- author bio -->
						<!-- <div class="media about-author">
							<div class="pull-left">
								<img alt="" src="https://secure.gravatar.com/avatar/20947e665211ab91db569a6f7fbe44ac?s=105&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/20947e665211ab91db569a6f7fbe44ac?s=210&amp;d=mm&amp;r=g 2x" class="avatar avatar-105 photo" width="105" height="105">			
							</div>
							<div class="media-body">
								<div class="about-author-info">
									<div class="author-title"><a href="" title="Posts by <?php echo get_the_author() ?>" rel="author"><?php echo get_the_author() ?></a></div>
									<div class="author-designation">administrator</div>
								</div>
								<div class="about-author-social">
									<ul class="author-box-social"></ul>
								</div>
							</div>
							<div class="clear"></div>
						</div>	 -->		

						<div class="related-post">

							<!-- <div></div> -->

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




		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

	<?php
// get_sidebar();
	get_footer();
