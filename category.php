
<?php get_header() ?>

<div id="meanmenu" ></div>		
<div id="header-area-space"></div>
<?php get_template_part('views/sections/sidebar-bottom'); ?>

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
												<div class="thumb cate-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 400px; height: 323px;background-repeat: no-repeat; background-position: center center; background-size: cover;"></div>
											</a>
										</div>
										<div class="blog-bottom-content-holder">
											<ul>
												<li><span><i class="fa fa-user" aria-hidden="true"></i></span><a href="" title="Posts by <?php echo get_the_author() ?>" rel="author"><?php echo get_the_author() ?></a></li>
												<li><i class="fas fa-clock"></i><?php echo get_the_date(); ?></li>
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
					<?php if (function_exists('devvn_wp_corenavi')) devvn_wp_corenavi(); ?>
				</main>
			</div>
			<?php get_sidebar(); ?>	
		</div>
	</div>
</div>
<?php get_footer() ?>