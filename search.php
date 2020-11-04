<?php get_header() ?>

<div id="meanmenu" ></div>		
<div id="header-area-space"></div>
<?php get_template_part('views/sections/sidebar-bottom'); ?>

<div id="primary" class="content-area">
	<div class="container">
		<div class="row">

			<div class="col-lg-9 col-md-12 col-12">
				<main id="main" class="site-main">
					
						<?php while (have_posts()) : the_post(); ?>
							<div data-taxonomy="category" data-termid="194" class="auto-clear barta-pagination blog-layouts ajax-content-wrapper">
								<div class="row entry-header blog-layout-1 kk post-2777 post type-post status-publish format-standard has-post-thumbnail hentry category-politics">
									<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
										<div class="entry-thumbnail-area">
											<a href="<?php the_permalink(); ?>" class="img-opacity-hover img-overlay-70">
												<img src="<?php the_post_thumbnail_url(); ?>" class="img-h-210 img-responsive rt-lazy wp-post-image loaded" alt="">
											</a>
											<?php
												$categories = get_the_category();
												if ( ! empty( $categories ) ) {
													echo '<a href="'.esc_url( get_category_link( $categories[0]->term_id ) ).'"><span class="el-rt-cat style_2" style="background:#e53935">'.esc_html( $categories[0]->name ).'<span class="titleinner" style="border-top: 8px solid #e53935;"></span></span></a>';
												}
											?>
										</div>
									</div>
									<div class="col-lg-7 col-md-12">
										<div class="entry-meta">
											<ul>
												<li><span><i class="fa fa-user" aria-hidden="true"></i></span><?php echo get_the_author() ?></li>
												<li><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo get_the_date( 'd-m-Y' ); ?></li>
											</ul>
										</div>
										<div class="entry-content">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<div class="blog-text"><?php the_excerpt() ?></div>
										</div>
									</div>	
								</div>
							</div>

						<?php endwhile; ?>

						<!-- Phân trang -->
						<?php if (function_exists('devvn_wp_corenavi')) devvn_wp_corenavi(); ?>
					
				</main>
			</div>
			<?php get_template_part('views/sections/slidebar-search'); ?>
		</div>
	</div>
</div>
<?php get_footer() ?>
<!-- <h2 class="block-heading mb-40">
<?php
foreach((get_the_category()) as $category) { 
	echo $category->cat_name . ' '; 
} 
?>	
</h2> -->

