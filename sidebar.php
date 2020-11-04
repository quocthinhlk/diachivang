<div class="col-lg-3 col-md-12">
	<aside class="sidebar-widget-area">		
		<div id="search-3" class="title-style-2 widget widget_search">
			<form role="search" method="get" class="search-form" action="<?php bloginfo('url'); ?>/">
				<div class="row custom-search-input">
					<div class="input-group col-md-12">
						<input type="hidden" name="post_type" value="post">
						<input type="text" class="search-query form-control" placeholder="Tìm kiếm ..." name="s">
						<span class="input-group-btn">
							<button class="btn" type="submit">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</span>
					</div>
				</div>
			</form>
		</div>		
		
		<div id="rt-news-tab-4" class="title-style-2 widget rt-news-tab">

			<div id="rt-news-box-7" class="title-style-2 widget rt-news-box">		
				<div style="border-bottom: 2px solid #111" class="rt-widget-title-holder">
					<h3 style="background-color: #111" class="widgettitle">Bài viết mới nhất<span style="border-top: 10px solid #111" class="titleinner"></span></h3>
				</div>
				<div class=" light">
					<?php 
						$args = array(
							'post_type' => 'post',//post = slug cuar bafi vieest
							'posts_per_page'	=>	3, //so luong bai viet can hien thi
						);
						$the_query = new WP_Query( $args );
						$count = 0;
						 ?>
						 <?php if ( $the_query->have_posts() ) : ?>

							<!-- pagination here -->
						 
							<!-- the loop -->
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
								<div class="rt-news-box-widget box-style-1">
									<div class="media">
										<a class="post-img-holder img-opacity-hover" href="<?php echo get_permalink() ?>" title="Ducati ‘has all the cards’ to win 2017 MotoGP title, says CEO">
											<div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 98px; height: 78px;background-repeat: no-repeat; background-position: center center; background-size: cover;"></div>
										</a>
										<div class="media-body">
											<div class="post-date-dark">
												<ul>
													<li>
														<span><i class="fa fa-clock-o" aria-hidden="true"></i></span><?php echo get_the_date(); ?>									
													</li>
												</ul>
											</div>
											<h3 class="title-medium-dark mb-none">
												<a href=""><?php the_title(); ?></a>
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
			
			<div id="media_image-2" class="title-style-2 widget widget_media_image">
				<a href="#">
					<img src="https://www.radiustheme.com/demo/wordpress/themes/barta/wp-content/uploads/2018/10/ads1.jpg" class="image wp-image-3859 attachment-full size-full rt-lazy loaded" alt="" style="max-width: 100%; height: auto;" data-src="https://www.radiustheme.com/demo/wordpress/themes/barta/wp-content/uploads/2018/10/ads1.jpg" data-was-processed="true" width="382" height="388">
				</a>
			</div>
			<div id="mc4wp_form_widget-3" class="title-style-2 widget widget_mc4wp_form_widget">
				<div style="border-bottom: 2px solid #111" class="rt-widget-title-holder">
					<h3 style="background-color: #111" class="widgettitle">Newsletter<span style="border-top: 10px solid #111" class="titleinner"></span></h3>
				</div>
				<script>(function() {
					window.mc4wp = window.mc4wp || {
						listeners: [],
						forms: {
							on: function(evt, cb) {
								window.mc4wp.listeners.push(
								{
									event   : evt,
									callback: cb
								}
								);
							}
						}
					}
				})();
			</script>
			<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-2228" method="post" data-id="2228" data-name="">
				<div class="mc4wp-form-fields">
					<div class="newsletter-area">
						<h2>Subscribe to our mailing list to get the new updates!</h2>
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<p>Subscribe our newsletter to stay updated</p>
						<div class="input-group stylish-input-group">
							<input class="newsletter-email" type="email" name="EMAIL" placeholder="Your email address" required="">
							<span class="input-group-addon">
								<button type="submit">
									<i class="fa fa-paper-plane" aria-hidden="true"></i>
								</button>  
							</span>
						</div>
					</div>
				</div>
				<label style="display: none !important;">Leave this field empty if you're human: 
					<input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off">
				</label>
				<input type="hidden" name="_mc4wp_timestamp" value="1602043605">
				<input type="hidden" name="_mc4wp_form_id" value="2228">
				<input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
				<div class="mc4wp-response"></div>
			</form>
		</div>	
	</aside>
</div>