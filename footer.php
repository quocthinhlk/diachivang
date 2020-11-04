<?php wp_reset_query(); ?>
<footer><!--#footer-->
		<div class="footer-top-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div id="rt-about-social-4" class="title-style-2 widget rt_footer_social_widget">
							<h3 class="widgettitle">Về chúng tôi</h3>		
							<div class="rt-about-widget">
								<div class="footer-about">
									<?php echo get_field('about_company', 'option'); ?>			
								</div>
								<div>
									<ul class="footer-social">
										<li><a href="<?php echo get_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="<?php echo get_field('twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="<?php echo get_field('google_plus', 'option'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="<?php echo get_field('linkedin', 'option'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="<?php echo get_field('pinterest', 'option'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
										<li><a href="<?php echo get_field('instagram', 'option'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-lg-3 col-sm-6 col-xs-12">
						<?php echo get_field('about_company', 'option'); ?>
					</div> -->
					<div class="col-lg-3 col-sm-6 col-xs-12">		
						<div id="rt-news-box-5" class="title-style-2 widget rt-news-box">		
							<h3 class="widgettitle">Bài viết gần đây</h3>		
							<div class=" dark">
								<?php 
									$args = array(
										'post_type' => 'post',//post = slug cuar bafi vieest
										'posts_per_page'	=>	3, //so luong bai viet can hien thi
										'tax_query' => array(
											// array(
											// 	'taxonomy' => 'category',
											// 	'field'    => 'term_id',
											// 	'terms'    => 11,
											// ),
										),
										);
									$the_query = new WP_Query( $args );
									?>
									<?php if ( $the_query->have_posts() ) : ?>

										<!-- pagination here -->

										<!-- the loop -->
										<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

											<div class="rt-news-box-widget box-style-1">
												<div class="media">
													<div class="media-body">
														<div class="post-date-dark">
															<ul>
																<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span><?php echo get_the_date(); ?></li>
															</ul>
														</div>
														<h3 class="title-medium-dark mb-none">
															<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
														</h3>
													</div>
												</div>
											</div>

										<?php endwhile; ?>
										<!-- end of the loop -->

										<!-- pagination here -->

										<?php wp_reset_postdata(); ?>

										<?php else : ?>
											<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
											<?php endif; ?>

							</div>
						</div>		
					</div>

					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div id="categories-7"  class="title-style-2 widget widget_categories">
							<h3 class="widgettitle">Chuyên mục</h3>		
							<ul>
								<?php 
								$categories = get_categories();
									foreach($categories as $category) {
									   echo '<li class="cat-item cat-item-213"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
									}
								?>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div id="tag_cloud-3"  class="title-style-2 widget widget_tag_cloud">
							<h3 style='background-color: #000000' class="widgettitle">Tags</h3>
							<div class="tagcloud">
								<?php 
									$tags = get_tags(array(
										'hide_empty' => false
									));
									foreach ($tags as $tag) {
								  	echo '<a href="">'.$tag->name.'</a>';
									}
								?>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</div>
		<div class="footer-bottom-area">
			<div class="container">
				<div class="row">
					<?php $image = get_field('logo', 'option'); ?>
					<div class="footer-logo"><a class="dark-logo" href="<?php echo get_site_url() ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a></div>
					<div class="footer-bottom-social">
						<ul class="tophead-social">
							<li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-sm-12 col-xs-12">&copy; Copyright DiaChiVang 2020. Designed and Developed by <a rel="nofollow" target="_blank" href="<?php echo get_site_url() ?>">Diachivang</a></div>
				</div>
			</div>
		</div>
	</footer><!--#footer-->
</div>

<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/cart-fragments.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/popper.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/select2.full.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/jquery.meanmenu.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/jquery.nav.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/js.cookie.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/jquery.nivo.slider.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/lazyload.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/jquery.ticker.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/imagesloaded.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/masonry.min.js'></script>+
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/slick.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/rt-ticker.min.js'></script>
<script type='text/javascript'>
var ThemeObj = {"stickyMenu":"1","meanWidth":"992","siteLogo":"<a href=\"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/barta\/\" alt=\"Barta\"><img class=\"logo-small\" src=\"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/barta\/wp-content\/uploads\/2018\/11\/big-logo-1.png\" \/><\/a>","day":"Day","hour":"Hour","minute":"Minute","second":"Second","extraOffset":"70","extraOffsetMobile":"52","tickerSpeed":".10","tickerControl":"","tickerTitleText":"Top Stories","tickerStyle":"reveal","tickerDirection":"ltr","tickerDelay":"2000","rtl":"no","ajaxURL":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/barta\/wp-admin\/admin-ajax.php","nonce":"41a5238a44"};
</script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/main.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/wp-embed.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/forms.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/frontend-modules.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/position.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/dialog.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/waypoints.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/swiper.min.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/share-link.min.js'></script>
<script type='text/javascript'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","downloadImage":"Download image"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1024,"xl":1440,"xxl":1600},"version":"2.9.14","urls":{"assets":"https:\/\/www.radiustheme.com\/demo\/wordpress\/themes\/barta\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"general":{"elementor_global_image_lightbox":"yes","elementor_lightbox_enable_counter":"yes","elementor_lightbox_enable_fullscreen":"yes","elementor_lightbox_enable_zoom":"yes","elementor_lightbox_enable_share":"yes","elementor_lightbox_title_src":"title","elementor_lightbox_description_src":"description"},"editorPreferences":[]},"post":{"id":1732,"title":"Home%201%20-%20Barta","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/frontend.min.js'></script>
</body>
</html>