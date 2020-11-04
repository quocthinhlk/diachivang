<div class="col-lg-3 col-md-12">
	<aside class="sidebar-widget-area">		
		
		<div id="rt-news-tab-4" class="title-style-2 widget rt-news-tab">

			<div id="rt-news-box-7" class="title-style-2 widget rt-news-box">		
				<div style="border-bottom: 2px solid #111" class="rt-widget-title-holder">
					<h3 style="background-color: #111" class="widgettitle">Bài viết mới nhất<span style="border-top: 10px solid #111" class="titleinner"></span></h3>
				</div>
				<div class=" light">
					<?php 
						$args = array(
							'post_type' => 'post',
							'posts_per_page'	=>	3,
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
	</aside>
</div>