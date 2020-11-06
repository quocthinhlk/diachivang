
<?php get_header() ?>
<div id="primary" class="content-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-12 col-12">
				<main id="main" class="site-main">

					<div class="row auto-clear">
						
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post();  ?>
								<div id="post-4308" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-layout-2 post-4308 post type-post status-publish format-standard has-post-thumbnail hentry category-food" data-layout="right-sidebar">
									<div class="blog-wrap">
										<div class="blog-img-holder">
											<a href="<?php echo get_permalink() ?>" class="img-opacity-hover">
												<div class="thumb" style="background-image: url(http://i1.wp.com/webfaver.com/wp-content/uploads/2015/10/1377146863789.jpg?fit=600%2C600);"></div>
											</a>
										</div>
										<div class="blog-bottom-content-holder">
											<ul>
												<li><span><i class="fa fa-user" aria-hidden="true"></i></span><a href="" title="Posts by <?php echo get_the_author() ?>" rel="author"><?php echo get_the_author() ?></a></li>
												<li><i class="fas fa-clock"></i></i><?php echo get_the_date(); ?></li>
											</ul>
											<h3>
												<a href=""><?php the_title(); ?></a>
											</h3>		
										</div>
									</div>
								</div>

							<?php endwhile; else : ?>
						<?php endif; ?>
					</div>
					<?php if(paginate_links()!='') {?>
						<nav class="jellywp_pagination">
							<?php
							global $wp_query;
							$big = 999999999;
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'prev_text'    => __('PREV'),
								'next_text'    => __('NEXT'),
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages
							) );
							?>
						</nav>
					<?php } ?>
				</main>
			</div>
			<?php get_sidebar(); ?>	
		</div>
	</div>
</div>
<?php get_footer() ?>