<?php wp_reset_query(); ?>
<footer>
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
									<li><a href="<?php echo get_field('facebook', 'option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="<?php echo get_field('twitter', 'option'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
									<li><a href="<?php echo get_field('google_plus', 'option'); ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
									<li><a href="<?php echo get_field('linkedin', 'option'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="<?php echo get_field('pinterest', 'option'); ?>" target="_blank"><i class="fab fa-pinterest"></i></a></li>
									<li><a href="<?php echo get_field('instagram', 'option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 col-xs-12">		
					<div id="rt-news-box-5" class="title-style-2 widget rt-news-box">		
						<h3 class="widgettitle">Bài viết gần đây</h3>		
						<div class=" dark">
							<?php 
							$args = array(
								'post_type' => 'post',
								'posts_per_page'	=>	3,
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
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

									<div class="rt-news-box-widget box-style-1">
										<div class="media">
											<div class="media-body">
												<div class="post-date-dark">
													<ul>
														<li><span><i class="fas fa-clock"></i></span><?php echo get_the_date(); ?></li>
													</ul>
												</div>
												<h3 class="title-medium-dark mb-none">
													<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
												</h3>
											</div>
										</div>
									</div>

								<?php endwhile; ?>
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
							<li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-pinterest"></i></a></li>
							<li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-sm-12 col-xs-12">&copy; Copyright DiaChiVang 2020. Designed and Developed by <a rel="nofollow" target="_blank" href="<?php echo get_site_url() ?>">Diachivang</a></div>
				</div>
			</div>
		</div>
	</footer>
</div>
<a href="#" class="backToTop" style="display: block; background-color: rgba(229, 57, 53, 0.98);"><i class="fa fa-arrow-up"></i></a>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/jquery.js'></script>
<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/main.js'></script>
<?php wp_footer(); ?>
</body>
</html>
