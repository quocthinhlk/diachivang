<div id="meanmenu" ></div>		
<div id="header-area-space"></div>

<div id="content" class="site-content"><!--#content-->
	<div class="show-ad-in-mobile mobile-header-search">
		<div class="container">
			<form action="<?php bloginfo('url'); ?>/" method="GET" role="form" class="search-form">
				<div class="row custom-search-input">
					<div class="input-group col-md-12">
						<input type="hidden" name="post_type" value="post">
						<input type="text" name="s" class="search-text" placeholder="Tìm kiếm" required>
						<span class="input-group-btn">
							<button class="btn" type="submit">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</span>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php get_template_part('views/sections/sidebar-bottom'); ?>
	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-12">
					<main id="main" class="site-main">

						<article id="post-1732" class="post-1732 page type-page status-publish hentry">

							<div class="entry-content">
								<div data-elementor-type="wp-post" data-elementor-id="1732" class="elementor elementor-1732 elementor-bc-flex-widget" data-elementor-settings="[]">
									<div class="elementor-inner">
										<div class="elementor-section-wrap">

											<section class="elementor-element elementor-element-611cd12 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="611cd12" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-element elementor-element-9362d10 elementor-column elementor-col-100 elementor-top-column" data-id="9362d10" data-element_type="column">
															<div class="elementor-column-wrap  elementor-element-populated">
																<?php echo do_shortcode('[short_code_session_1 cat="11"]'); ?>
															</section>

															<section class="elementor-element elementor-element-c6dd321 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="c6dd321" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-row">
																		<div class="elementor-element elementor-element-16c35b4 elementor-column elementor-col-66 elementor-top-column" data-id="16c35b4" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-71259a0 elementor-widget elementor-widget-rt-news-tab" data-id="71259a0" data-element_type="widget" data-widget_type="rt-news-tab.default">
																						<div class="elementor-widget-container">
																							<div class="tab-default rt-news-tab-1 general">
																								<div class="mb-20-r rtin-tab-container">
																									<?php echo do_shortcode('[short_code_session_2 cat="12"]'); ?>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="elementor-element elementor-element-d393ec0 elementor-widget elementor-widget-rt-news-grid" data-id="d393ec0" data-element_type="widget" data-widget_type="rt-news-grid.default">
																						<div class="elementor-widget-container">
																							<?php echo do_shortcode('[short_code_session_3 cat="2"]'); ?>
																						</div>
																					</div>

																				</div>
																			</div>
																		</div>
																		<div class="elementor-element elementor-element-12e5242 elementor-column elementor-col-33 elementor-top-column" data-id="12e5242" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-22e3d7a elementor-widget elementor-widget-rt-title" data-id="22e3d7a" data-element_type="widget" data-widget_type="rt-title.default">
																						<div class="elementor-widget-container">
																							<div class="sec-title">
																								<div class="rt-news-box-title-holder style_2">
																									<h2 class="el-rt-news-box-title style_2">Kết nối với chúng tôi<span class="titleinner"></span></h2>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="elementor-element elementor-element-c07b133 elementor-widget elementor-widget-wp-widget-apsc_widget" data-id="c07b133" data-element_type="widget" data-widget_type="wp-widget-apsc_widget.default">
																						<div class="elementor-widget-container">
																							<div class="apsc-icons-wrapper clearfix apsc-theme-2 " >
																								<div class="apsc-each-profile">
																									<a  class="apsc-facebook-icon clearfix" href="#" target="_blank" >
																										<div class="apsc-inner-block">
																											<span class="social-icon"><i class="fa fa-facebook-square"></i><span class="media-name">Facebook</span></span>
																											<span class="apsc-count"><?php the_field('facebook-fans'); ?></span><span class="apsc-media-type">Fans</span>
																										</div>
																									</a>
																								</div>                
																								<div class="apsc-each-profile">
																									<a  class="apsc-twitter-icon clearfix"  href="#" target="_blank"  >
																										<div class="apsc-inner-block">
																											<span class="social-icon"><i class="fa fa-twitter apsc-twitter"></i><span class="media-name">Twitter</span></span>
																											<span class="apsc-count"><?php the_field('twitter-followrs'); ?></span><span class="apsc-media-type">Followers</span>
																										</div>
																									</a>
																								</div>                
																								<div class="apsc-each-profile">
																									<a class="apsc-youtube-icon clearfix" href="#" target="_blank"  >
																										<div class="apsc-inner-block">
																											<span class="social-icon"><i class="fa fa-youtube-square"></i><span class="media-name">Youtube</span></span>
																											<span class="apsc-count"><?php the_field('youtube-subscribe'); ?></span><span class="apsc-media-type">Subscriber</span>
																										</div>
																									</a>
																								</div>                
																								<div class="apsc-each-profile">

																									<a class="apsc-edit-icon clearfix" href="javascript:void(0);" >
																										<div class="apsc-inner-block">
																											<span class="social-icon"><i class="fa fa-edit"></i><span class="media-name">Post</span></span>
																											<span class="apsc-count"><?php the_field('post'); ?></span><span class="apsc-media-type">Post</span>
																										</div>
																									</a>
																								</div>
																							</div>		
																						</div>
																					</div>
																					<div class="elementor-element elementor-element-f0a1f87 elementor-widget elementor-widget-image" data-id="f0a1f87" data-element_type="widget" data-widget_type="image.default">
																						<div class="elementor-widget-container">
																							<div class="elementor-image">
																								<a href="#">
																									<img width="382" height="287" src="https://www.radiustheme.com/demo/wordpress/themes/barta/wp-content/themes/barta/assets/img/loading-lazyload-555x370.gif" class="attachment-full size-full rt-lazy" alt="" data-src="https://www.radiustheme.com/demo/wordpress/themes/barta/wp-content/uploads/2018/11/llbanner1.jpg" />
																								</a>
																							</div>
																						</div>
																					</div>
																					<div class="elementor-element elementor-element-baa67c9 elementor-widget elementor-widget-rt-news-grid" data-id="baa67c9" data-element_type="widget" data-widget_type="rt-news-grid.default">
																						<div class="elementor-widget-container">
																							<?php echo do_shortcode('[short_code_session_4 cat="11"]'); ?>	 
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>

															<section class="elementor-element elementor-element-bd5102f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="bd5102f" data-element_type="section">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-row">
																		<div class="elementor-element elementor-element-84db7d6 elementor-column elementor-col-100 elementor-top-column" data-id="84db7d6" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-dccdf8d elementor-widget elementor-widget-image" data-id="dccdf8d" data-element_type="widget" data-widget_type="image.default">
																						<div class="elementor-widget-container">
																							<div class="elementor-image">
																								<a href="#">
																									<img width="728" height="90" src="https://www.radiustheme.com/demo/wordpress/themes/barta/wp-content/themes/barta/assets/img/loading-lazyload-555x370.gif" class="attachment-large size-large rt-lazy" alt="" data-src="https://www.radiustheme.com/demo/wordpress/themes/barta/wp-content/uploads/2018/10/ads1-728x90.jpg" />								
																								</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>

															<section class="elementor-element elementor-element-c314cd2 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="c314cd2" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-row">
																		<div class="elementor-element elementor-element-6c899de elementor-column elementor-col-100 elementor-top-column" data-id="6c899de" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-1bdf314 elementor-widget elementor-widget-rt-news-grid" data-id="1bdf314" data-element_type="widget" data-widget_type="rt-news-grid.default">
																						<div class="elementor-widget-container">
																							<?php echo do_shortcode('[short_code_session_5 cat="12"]'); ?>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>


															<section class="elementor-element elementor-element-ac1e9d0 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="ac1e9d0" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-row">
																		<div class="elementor-element elementor-element-0ca1f4c elementor-column elementor-col-33 elementor-top-column" data-id="0ca1f4c" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-fb2c083 elementor-widget elementor-widget-rt-news-box" data-id="fb2c083" data-element_type="widget" data-widget_type="rt-news-box.default">
																						<?php echo do_shortcode('[short_code_session_6 cat="12"]'); ?>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="elementor-element elementor-element-629319f elementor-column elementor-col-33 elementor-top-column" data-id="629319f" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-e61508f elementor-widget elementor-widget-rt-news-box" data-id="e61508f" data-element_type="widget" data-widget_type="rt-news-box.default">
																						<?php echo do_shortcode('[short_code_session_6 cat="8"]'); ?>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="elementor-element elementor-element-bcabc7a elementor-column elementor-col-33 elementor-top-column" data-id="bcabc7a" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-e79a5d4 elementor-widget elementor-widget-rt-news-box" data-id="e79a5d4" data-element_type="widget" data-widget_type="rt-news-box.default">
																						<?php echo do_shortcode('[short_code_session_6 cat="2"]'); ?>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>


															<section class="elementor-element elementor-element-4b02cf6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="4b02cf6" data-element_type="section">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-row">
																		<div class="elementor-element elementor-element-362c4d1 elementor-column elementor-col-100 elementor-top-column" data-id="362c4d1" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-6db4c4e elementor-widget elementor-widget-image" data-id="6db4c4e" data-element_type="widget" data-widget_type="image.default">
																						<div class="elementor-widget-container">
																							<div class="elementor-image">
																								<img width="728" height="90" src="https://www.radiustheme.com/demo/wordpress/themes/barta/wp-content/themes/barta/assets/img/loading-lazyload-555x370.gif" class="attachment-large size-large rt-lazy" alt="" data-src="https://www.radiustheme.com/demo/wordpress/themes/barta/wp-content/uploads/2018/11/ads-728x90.png" />
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>


															<section class="elementor-element elementor-element-8e1d57d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="8e1d57d" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-row">
																		<div class="elementor-element elementor-element-5bbcd1f elementor-column elementor-col-100 elementor-top-column" data-id="5bbcd1f" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-8098b37 elementor-widget elementor-widget-rt-news-tab" data-id="8098b37" data-element_type="widget" data-widget_type="rt-news-tab.default">
																						<?php echo do_shortcode('[short_code_session_7 cat="12"]'); ?>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>


															<section class="elementor-element elementor-element-cf7f8d0 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="cf7f8d0" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-row">
																		<div class="elementor-element elementor-element-a36b6c8 elementor-column elementor-col-66 elementor-top-column" data-id="a36b6c8" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-f114623 elementor-widget elementor-widget-rt-news-tab" data-id="f114623" data-element_type="widget" data-widget_type="rt-news-tab.default">
																						<?php echo do_shortcode('[short_code_session_8 cat="11"]'); ?>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="elementor-element elementor-element-39187fe elementor-column elementor-col-33 elementor-top-column" data-id="39187fe" data-element_type="column">
																			<div class="elementor-column-wrap  elementor-element-populated">
																				<div class="elementor-widget-wrap">
																					<div class="elementor-element elementor-element-2c68272 elementor-widget elementor-widget-image" data-id="2c68272" data-element_type="widget" data-widget_type="image.default">
																						<div class="elementor-widget-container">
																							<div class="elementor-image">
																								<a href="#">
																									<img width="382" height="388" src="https://www.radiustheme.com/demo/wordpress/themes/barta/wp-content/themes/barta/assets/img/loading-lazyload-555x370.gif" class="attachment-large size-large rt-lazy" alt="" data-src="https://www.radiustheme.com/demo/wordpress/themes/barta/wp-content/uploads/2018/11/ads.png" />								</a>
																								</div>
																							</div>
																						</div>
																						<div class="elementor-element elementor-element-f80f55f elementor-widget elementor-widget-rt-title" data-id="f80f55f" data-element_type="widget" data-widget_type="rt-title.default">
																							<div class="elementor-widget-container">
																								<div class="sec-title">
																									<div class="rt-news-box-title-holder style_2">
																										<h2 class="el-rt-news-box-title style_2">Newsletter<span class="titleinner"></span></h2>
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="elementor-element elementor-element-c2d8f56 elementor-widget elementor-widget-wp-widget-mc4wp_form_widget" data-id="c2d8f56" data-element_type="widget" data-widget_type="wp-widget-mc4wp_form_widget.default">
																							<div class="elementor-widget-container">
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
																									}})();
																								</script>
																								<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-2228" method="post" data-id="2228" data-name="" ><div class="mc4wp-form-fields"><div class="newsletter-area">
																									<h2>Subscribe to our mailing list to get the new updates!</h2>
																									<i class="fa fa-envelope-o" aria-hidden="true"></i>
																									<p>Subscribe our newsletter to stay updated</p>
																									<div class="input-group stylish-input-group">
																										<input type="email" name="EMAIL" placeholder="Your email address" required />
																										<span class="input-group-addon">
																											<button type="submit">
																												<i class="fa fa-paper-plane" aria-hidden="true"></i>
																											</button>  
																										</span>


																									</div>
																								</div>
																							</div>
																							<label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label>
																							<input type="hidden" name="_mc4wp_timestamp" value="1601516110" />
																							<input type="hidden" name="_mc4wp_form_id" value="2228" />
																							<input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
																							<div class="mc4wp-response"></div>
																						</form><!-- / Mailchimp for WordPress Plugin -->		
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</section>


														<section class="elementor-element elementor-element-4952283 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="4952283" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
															<div class="elementor-container elementor-column-gap-default">
																<div class="elementor-row">
																	<div class="elementor-element elementor-element-f938a74 elementor-column elementor-col-100 elementor-top-column" data-id="f938a74" data-element_type="column">
																		<div class="elementor-column-wrap  elementor-element-populated">
																			<div class="elementor-widget-wrap">
																				<div class="elementor-element elementor-element-542af01 elementor-widget elementor-widget-rt-news-grid" data-id="542af01" data-element_type="widget" data-widget_type="rt-news-grid.default">
																					<?php echo do_shortcode('[short_code_session_9 cat="11"]'); ?>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</section>
													</div>
												</div>
											</div>
										</div>
									</article>
								</main>
							</div>
						</div>
					</div>
				</div>
</div><!--#content-->