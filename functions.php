<?php
/*
 *  GLOBAL VARIABLES
 */
define('theme_url',get_stylesheet_directory());
define('THEME_DIR', get_stylesheet_directory());
define('THEME_URL', get_stylesheet_directory_uri());

/*
 *  INCLUDED FILES
 */

$file_includes = [
    'models/inc/theme-assets.php',         // Style and JS
];

foreach ($file_includes as $file) {
	if (!$filePath = locate_template($file)) {
		trigger_error(sprintf(__('Missing included file'), $file), E_USER_ERROR);
	}

	require_once $filePath;
}

unset($file, $filePath);
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
	function wpt_setup() {  
		register_nav_menu( 'primary-bar', __( 'Primary bar', 'wptuts' ) );
	}
endif;
add_theme_support( 'post-thumbnails' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

//Code phan trang
function devvn_wp_corenavi($custom_query = null, $paged = null) {
	echo '<div class="pagination-area"><ul><li>';
    global $wp_query;
    if($custom_query) $main_query = $custom_query;
    else $main_query = $wp_query;
    $paged = ($paged) ? $paged : get_query_var('paged');
    $big = 999999999;
    $total = isset($main_query->max_num_pages)?$main_query->max_num_pages:'';
    if($total > 1) echo '<div class="pagenavi">';
    echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'prev_text'    => __('TRƯỚC'),
		'next_text'    => __('TIẾP'),
		'mid_size' => '1',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages
	) );
    echo '</li></ul></div>';
}


/*
	Shortcode
*/

function short_code_session_2($args, $content){
	$cat = $args['cat'];
	ob_start();
	?>	
	<div class="topic-border color-cinnabar">
		<div class="mb-25p">
			<div class="rt-news-box-title-holder style_2">
				<h2 class="el-rt-news-box-title style_2"><?php echo get_cat_name($cat);?><span class="titleinner"></span></h2>

			</div>
		</div>
	</div>
	<div class="rt-tab-news-holder">

		<div class="blockHalf2 row">
			<?php $args = array(
				'post_type' => 'post',
				'posts_per_page'	=>	5,
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field'    => 'term_id',
						'terms'    => $cat,
					),
				),
			);
			$the_query = new WP_Query( $args );
			$count = 0;
			?>
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
					<?php if($count == 1){ ?>
						<div class="col-md-6 col-sm-12">
							<div class="img-scale-animate">
								<a class="img-overlay-70" href="<?php echo get_permalink() ?>">
									<img src="<?php the_post_thumbnail_url(); ?>" class="img-res-h-400 img-h-530 img-fluid mb-10 width-100 rt-lazy wp-post-image loaded" data-was-processed="true">
								</a>
								<div class="mask-content-lg">
									<div class="post-meta-light">
										<ul><li><span><i class="fa fa-user" aria-hidden="true"></i></span><a href="<?php echo get_permalink() ?>" title="Posts by admin" rel="author"><?php echo get_the_author() ?></a></li>
											<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span><?php echo get_the_date(); ?></li>
										</ul>
									</div>
									<h2 class="title-medium-light">
										<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
									</h2>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
						<?php } else { ?>

							<div class="media mb-30 general ">
								<div class="image-left">
									<a class="img-opacity-hover" href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-h-110 img-fluid mb-10 width-100 rt-lazy wp-post-image loaded" data-was-processed="true"></a>
								</div>
								<div class="media-body">
									<div class="post-meta-dark">
										<ul>
											<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span><?php echo get_the_date(); ?></li>
										</ul>
									</div>
									<h3 class="title-medium-dark">
										<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
									</h3>
								</div>
							</div>
						<?php } ?>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div> 
			<div class="loading"></div>
		</div>
		<?php
		$out = ob_get_contents();
		ob_end_clean();
		return $out;
	}
	add_shortcode('short_code_session_2', 'short_code_session_2');


function short_code_session_3($args, $content){
	$cat = $args['cat'];
	ob_start();
	?>	
	<div class="grid-default row rt-news-grid-2 tab-space1">
		<div class="col-12 mb-25p">
			<div class="rt-news-box-title-holder style_2">
				<h2 class="el-rt-news-box-title style_2"><?php echo get_cat_name($cat);?><span class="titleinner"></span></h2>
			</div>
		</div>
		<?php $args = array(
			'post_type' => 'post',
			'posts_per_page'	=>	4, 
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field'    => 'term_id',
					'terms'    => $cat,
				),
			),
		);
		$the_query = new WP_Query( $args );
		?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="img-scale-animate mb-2 img-mh-4">
						<div class="mask-content-xs">
							<div class="post-meta-light d-none d-sm-block">
								<ul>
									<li><span><i class="fa fa-user" aria-hidden="true"></i></span><a href="" title="Posts by admin" rel="author"><?php echo get_the_author() ?></a></li>
									<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span>September 20, 2018</li>
								</ul>
							</div>
							<h3 class="title-medium-light">
								<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
							</h3>
						</div>
						<a class="img-overlay-70" href="<?php echo get_permalink() ?>">
							<img src="<?php the_post_thumbnail_url(); ?>" class="img-h-240 img-fluid mb-10 width-100 rt-lazy wp-post-image loaded" alt="" data-was-processed="true" width="555" height="370">			
						</a>
						<div class="topic-box-top-sm">
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
		<?php
		$out = ob_get_contents();
		ob_end_clean();
		return $out;
	}
	add_shortcode('short_code_session_3', 'short_code_session_3');

function short_code_session_4($args, $content){
	$cat = $args['cat'];
	ob_start();
	?> 
	<div class="grid-default rt-news-grid-1 general">
		<div class="row">
			<div class="col-12 mb-25p">
				<div class="rt-news-box-title-holder style_2">
					<h2 class="el-rt-news-box-title style_2"><?php echo get_cat_name($cat);?><span class="titleinner"></span></h2>
				</div>
			</div>
			<?php 
			$args = array(
				'post_type' => 'post',
				'posts_per_page'  =>  6, 
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field'    => 'term_id',
						'terms'    => $cat,
					),
				),
			);
			$the_query = new WP_Query( $args );
			$count = 0;
			?>
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>

					<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="grid-item-1 img-mh-4">
							<div class="news-grid-img">
								<a href="<?php echo get_permalink() ?>" class="img-opacity-hover img-scale-animate">
									<img src="<?php the_post_thumbnail_url(); ?>" class="img-res-h-250 img-h-110 img-fluid mb-10 width-100 rt-lazy wp-post-image loaded" data-was-processed="true" width="555" height="370">	
								</a>
							</div>
							<div class="post-meta-dark">
								<ul>
								</ul>
							</div>
							<h3 class="post-cat-title">
								<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
							</h3>
						</div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>  
		<?php
		$out = ob_get_contents();
		ob_end_clean();
		return $out;
	}
	add_shortcode('short_code_session_4', 'short_code_session_4');

function short_code_session_5($args, $content){
	$cat = $args['cat'];
	ob_start();
	?> 
	<div class="grid-default row tab-space1 rt-news-grid-7">
		<?php 
		$args = array(
			'post_type' => 'post',
			'posts_per_page'  =>  3, 
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field'    => 'term_id',
					'terms'    => $cat,
				),
			),
		);
		$the_query = new WP_Query( $args );
		$count = 0;
		?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
				<div class="col-lg-4 col-md-4">
					<div class="img-scale-animate mb-2 img-mh-4">
						<a class="img-overlay-70" href="<?php echo get_permalink() ?>">
							<img src="<?php the_post_thumbnail_url(); ?>" class="img-h-248 img-fluid mb-10 width-100 rt-lazy wp-post-image loaded" data-was-processed="true">				
						</a>
						<div class="mask-content-sm">
							<h3 class="title-medium-light">
								<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
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
		<?php
		$out = ob_get_contents();
		ob_end_clean();
		return $out;
	}
	add_shortcode('short_code_session_5', 'short_code_session_5');

function short_code_session_6($args, $content){
	$cat = $args['cat'];
	ob_start();
	?> 
	<div class="elementor-widget-container">
		<div class="box-default rt-news-box-13 general">
			<div class="mb-25p">
				<div class="rt-news-box-title-holder style_2">
					<h2 class="el-rt-news-box-title style_2"><?php echo get_cat_name($cat);?><span class="titleinner"></span></h2>
				</div>
			</div>
			<?php 
			$args = array(
				'post_type' => 'post',
				'posts_per_page'	=>	4, 
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field'    => 'term_id',
						'terms'    => $cat,
					),
				),
			);
			$the_query = new WP_Query( $args );
			$count = 0;
			?>
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
					<?php if($count == 1){ ?>
						<div class="img-scale-animate mb-30">
							<div class="mask-content-sm">
								<div class="post-meta-light">
									<ul>
										<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span><?php echo get_the_date(); ?></li>
									</ul>
								</div>
								<h2 class="title-medium-light">
									<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
								</h2>
							</div>
							<a class="img-overlay-70" href="<?php echo get_permalink() ?>">
								<img src="<?php the_post_thumbnail_url(); ?>" class="img-h-240" data-was-processed="true">					
							</a>
						</div>
						<div class="content-bottom item-shadow-gray">
						<?php } else { ?>
							<div class="media mb-30">
								<div class="image-left">
									<a class="img-opacity-hover" href="<?php echo get_permalink() ?>">
										<img src="<?php the_post_thumbnail_url(); ?>" class="img-h-110" data-was-processed="true" width="152" height="136">					
									</a>
								</div>
								<div class="media-body">
									<div class="post-meta-dark">
										<ul>
											<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span><?php echo get_the_date(); ?></li>
										</ul>
									</div>
									<h3 class="title-medium-dark">
										<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
									</h3>
								</div>
							</div>
						<?php } ?>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<?php
		$out = ob_get_contents();
		ob_end_clean();
		return $out;
	}
	add_shortcode('short_code_session_6', 'short_code_session_6');


function short_code_session_7($args, $content){
	$cat = $args['cat'];
	ob_start();
	?> 
	<div class="elementor-widget-container">
		<div class="tab-default rt-news-tab-2 general">
			<div class="mb-20-r rtin-tab-container">
				<div class="topic-border color-cinnabar">
					<div class="mb-25p">
						<div class="rt-news-box-title-holder style_2">
							<h2 class="el-rt-news-box-title style_2"><?php echo get_cat_name($cat);?><span class="titleinner"></span></h2>
						</div>
					</div>
				</div>
				<div class="rt-tab-news-holder">
					<div class="blockHalf2">
						<div class="blockHalf2 row">
							<?php 
							$args = array(
								'post_type' => 'post',
								'posts_per_page'  =>  7, 
								'tax_query' => array(
									array(
										'taxonomy' => 'category',
										'field'    => 'term_id',
										'terms'    => $cat,
									),
								),
							);
							$the_query = new WP_Query( $args );
							$count = 0;
							?>
							<?php if ( $the_query->have_posts() ) : ?>
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
									<?php if($count == 1){ ?>
										<div class="col-xl-4 col-lg-6 col-md-12 mb-30">
											<div class="img-scale-animate mx-col-2">
												<a class="img-overlay-70" href="<?php echo get_permalink() ?>">			
													<img src="<?php the_post_thumbnail_url(); ?>" class="img-h-585 img-res-h-400" data-was-processed="true">			
												</a>
												<div class="mask-content-lg">								
													<div class="post-meta-light">
														<ul>
															<li><span><i class="fa fa-user" aria-hidden="true"></i></span><a href="" title="Posts by <?php echo get_the_author() ?>" rel="author"><?php echo get_the_author() ?></a></li>
															<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span><?php echo get_the_date(); ?></li>
														</ul>
													</div>
													<h2 class="title-medium-light">
														<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
													</h2>
												</div>
											</div>
										</div>
										<div class="col-xl-8 col-lg-6 col-md-12">
											<div class="row">
											<?php } else { ?>

												<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 general">
													<div class="small-item-img">
														<a class="img-opacity-hover img-scale-animate" href="<?php echo get_permalink() ?>">
															<img src="<?php the_post_thumbnail_url(); ?>" data-was-processed="true" width="555" height="370">					
														</a>
													</div>				
													<div class="small-item-meta">
														<div class="post-meta-dark">
															<ul>
																<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span><?php echo get_the_date(); ?></li>
															</ul>
														</div>
														<h3 class="title-medium-dark">
															<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
														</h3>
													</div>
												</div>
											<?php } ?>
										<?php endwhile; ?>
									</div>
								</div>
								<?php wp_reset_postdata(); ?>
								<?php else : ?>
									<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
								<?php endif; ?>
							</div>
							<div class="loading"></div>
						</div>
						<div class="loading"></div>
					</div>
				</div>
			</div>
		</div>
		<?php
		$out = ob_get_contents();
		ob_end_clean();
		return $out;
	}
	add_shortcode('short_code_session_7', 'short_code_session_7');


function short_code_session_8($args, $content){
	$cat = $args['cat'];
	ob_start();
	?> 
	<div class="elementor-widget-container">
		<div class="tab-default rt-news-tab-5 general">
			<div class="mb-20-r rtin-tab-container">
				<div class="topic-border color-cinnabar">
					<div class="mb-25p">
						<div class="rt-news-box-title-holder style_2">
							<h2 class="el-rt-news-box-title style_2"><?php echo get_cat_name($cat);?><span class="titleinner"></span></h2>
						</div>
					</div>
				</div>
				<div class="rt-tab-news-holder">
					<div class="blockHalf2">
						<div class="blockHalf2 row">
							<?php 
							$args = array(
								'post_type' => 'post',
								'posts_per_page'  =>  4, 
								'tax_query' => array(
									array(
										'taxonomy' => 'category',
										'field'    => 'term_id',
										'terms'    => $cat,
									),
								),
							);
							$the_query = new WP_Query( $args );
							?>
							<?php if ( $the_query->have_posts() ) : ?>
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<div class="col-md-12 col-sm-6 col-12">
										<div class=" md-200 media item-shadow-gray">
											<div class="image-left">
												<a href="<?php echo get_permalink() ?>" class="img-opacity-hover">
													<img src="<?php the_post_thumbnail_url(); ?>" data-was-processed="true" class="img-h-200">				
												</a>
											</div>
											<div class="media-body">
												<div class="post-meta-dark">
													<ul>
														<li><span><i class="fa fa-user" aria-hidden="true"></i></span><a href="" title="Posts by <?php echo get_the_author() ?>" rel="author"><?php echo get_the_author() ?></a></li>
														<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span><?php echo get_the_date(); ?></li>
													</ul>
												</div>
												<h3 class="title-semibold-dark size-lg mb-15">
													<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
												</h3>
												<p><?php the_excerpt() ?></p>
											</div>
										</div>
									</div> 
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
								<?php else : ?>
									<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
								<?php endif; ?>
							</div>
							<div class="loading"></div>     
						</div>
						<div class="loading"></div>
					</div>
				</div>
			</div>    
		</div>
		<?php
		$out = ob_get_contents();
		ob_end_clean();
		return $out;
	}
	add_shortcode('short_code_session_8', 'short_code_session_8');


function short_code_session_9($args, $content){
	$cat = $args['cat'];
	ob_start();
	?>	
	<div class="elementor-widget-container">
		<div class="grid-default row tab-space1 rt-news-grid-6">
			<?php 
			$args = array(
				'post_type' => 'post',
				'posts_per_page'  =>  6, 
			);
			$the_query = new WP_Query( $args );
			?>
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="grid-content-middle overlay-dark-level-2 img-scale-animate text-center mb-2">
							<img src="<?php the_post_thumbnail_url(); ?>" data-was-processed="true" class="img-h-240">						
							<div class="content p-30-r">				
								<h3 class="title-regular-light">
									<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
								</h3>
								<div class="post-meta-light">
									<ul>
										<li><span><i class="fa fa-user" aria-hidden="true"></i></span><a href="" title="Posts by <?php echo get_the_author() ?>" rel="author"><?php echo get_the_author() ?></a></li>
										<li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span><?php echo get_the_date(); ?></li>
									</ul>
								</div>
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
		<?php
		$out = ob_get_contents();
		ob_end_clean();
		return $out;
	}
	add_shortcode('short_code_session_9', 'short_code_session_9');



function short_code_session_1($args, $content){
	$cat = $args['cat'];
	ob_start();
	?>	
	<div class="elementor-widget-wrap">
		<div class="elementor-element elementor-element-bda6df2 elementor-widget elementor-widget-rt-news-box" data-id="bda6df2" data-element_type="widget" data-widget_type="rt-news-box.default">
			<div class="elementor-widget-container">

				<div class="box-default mc-row tab-space1 rt-news-box-3">
					<?php 
					$args = array(
						'post_type' => 'post',
						'posts_per_page'  =>  5, 
					);
					$the_query = new WP_Query( $args );
					$count = 0;
					?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
							<?php if($count == 1){ ?>
								<div class="mc-col mc-col-5">
									<div class="item-wrap">
										<div class="img-scale-animate mb-2 img-h-249">
											<a class="img-overlay-70" href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-h-250 img-mb-h img-fluid mb-10 width-100 rt-lazy wp-post-image loaded" alt="" data-was-processed="true"></a>
											<div class="mask-content-lg">
												<div class="post-meta-light">
													<ul>
													</ul>
												</div>
												<h3 class="text-left title-medium-light">
													<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
												</h3>

											</div>
										</div>
									</div>
								<?php } else if($count == 2){ ?>
									<div class="item-wrap">
										<div class="img-scale-animate mb-2 img-h-249">
											<a class="img-overlay-70" href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-h-250 img-mb-h img-fluid mb-10 width-100 rt-lazy wp-post-image loaded" alt="" data-was-processed="true"></a>
											<div class="mask-content-lg">
												<div class="post-meta-light">
													<ul>
													</ul>
												</div>
												<h3 class="text-left title-medium-light">
													<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
												</h3>
											</div>
										</div>
									</div>
								</div>
							<?php }  else if($count == 3){ ?>
								<div class="mc-col mc-col-4">
									<div class="tab-space1">
										<div class="item-wrap">
											<div class="img-scale-animate o-us mb-2">
												<div class="mask-content-sm">
													<h3 class="text-center title-medium-light">
														<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
													</h3>
												</div>
												<a class="img-overlay-70" href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-mb-h img-h-492 img-fluid mb-10 width-100 rt-lazy wp-post-image loaded" data-was-processed="true"></a>
											</div>
										</div>
									</div>
								</div>
							<?php }  else if($count == 4){ ?>
								<div class="mc-col mc-col-3">
									<div class="item-wrap">
										<div class="img-scale-animate small-img mb-2 img-h-249">
											<div class="mask-content-sm">         
												<h3 class="title-medium-light">
													<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
												</h3>
											</div>  
											<a class="img-overlay-70" href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-mb-h img-h-250" data-was-processed="true"></a>
										</div>
									</div>
								<?php }  else if($count == 5){ ?>
									<div class="item-wrap">
										<div class="img-scale-animate small-img mb-2 img-h-249">
											<div class="mask-content-sm">         
												<h3 class="title-medium-light">
													<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
												</h3>
											</div>    
											<a class="img-overlay-70" href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-mb-h img-h-250" data-was-processed="true"></a>            
										</div>
									</div>
								</div>
							<?php } ?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<?php
$out = ob_get_contents();
ob_end_clean();
return $out;
}
add_shortcode('short_code_session_1', 'short_code_session_1');