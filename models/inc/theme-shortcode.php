
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

				<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
					<?php if($count == 1){ ?>
						<div class="col-md-6 col-sm-12">
							<div class="img-scale-animate">
								<div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 350px; height: 380px;background-repeat: no-repeat; background-position: center center; background-size: cover;">
									<!-- <a class="img-overlay-70" href="<?php echo get_permalink() ?>">
										<img src="<?php the_post_thumbnail_url(); ?>" width="700" height="1015">					
									</a> -->
								</div>
								
								
								<div class="mask-content-lg">
									<div class="post-meta-light">
										<ul>
											<li><span><i class="fa fa-user" aria-hidden="true"></i></span><a href="<?php echo get_permalink() ?>" title="Posts by <?php echo get_the_author() ?>" rel="author"><?php echo get_the_author() ?></a></li>
											<li><span><i class="fas fa-clock"></i></i></span><?php echo get_the_date(); ?></li>
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
									<a class="img-opacity-hover" href="<?php echo get_permalink() ?>">
										<div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 115px; height: 100px;background-repeat: no-repeat; background-position: center center; background-size: cover;"></div>
									</a>			
									
								</div>
								<div class="media-body">
									<div class="post-meta-dark">
										<ul>
											<li><span><i class="fas fa-clock"></i></i></span><?php echo get_the_date(); ?></li>
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

				<!-- end of the loop -->

				<!-- pagination here -->

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
			'post_type' => 'post',//post = slug cuar bafi vieest
			'posts_per_page'	=>	4, //so luong bai viet can hien thi
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

   			<!-- the loop -->
   			<?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
   				<div class="col-lg-6 col-md-6 col-sm-12">
   					<div class="img-scale-animate mb-2">
   						<div class="mask-content-xs">
   							<div class="post-meta-light d-none d-sm-block">
   								<ul>
   									<li><span><i class="fa fa-user" aria-hidden="true"></i></span><a href="<?php echo get_permalink() ?>" title="Posts by <?php echo get_the_author() ?>" rel="author"><?php echo get_the_author() ?></a></li>
   									<li><span><i class="fas fa-clock"></i></i></span><?php echo get_the_date(); ?></li>
   								</ul>
   							</div>
   							<h3 class="title-medium-light">
   								<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
   							</h3>
   						</div>
   						<!-- <a class="img-overlay-70 thumb-4" href=""><img src="<?php the_post_thumbnail_url(); ?>" width="555" height="370" ></a> -->
   						<a class="img-overlay-70" href="<?php echo get_permalink() ?>">
   							<div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 359px; height: 240px;background-repeat: no-repeat; background-position: center center; background-size: cover;">
   								<a class="img-overlay-70 thumb-4" href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" width="555" height="370" ></a>
   							</div>
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
          'post_type' => 'post',//post = slug cuar bafi vieest
          'posts_per_page'  =>  4, //so luong bai viet can hien thi
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

          <!-- pagination here -->

          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>

            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="grid-item-1">
                <div class="news-grid-img">
                  <a href="<?php echo get_permalink() ?>" class="img-opacity-hover img-scale-animate"><img src="<?php the_post_thumbnail_url(); ?>" ></a>


                        <!-- <a href="<?php echo get_permalink() ?>" class="img-opacity-hover img-scale-animate">
                          <div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 160px; height: 100px;background-repeat: no-repeat; background-position: center center; background-size: cover;"></div>
                        </a> -->
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
                <!-- end of the loop -->

                <!-- pagination here -->

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
        'post_type' => 'post',//post = slug cuar bafi vieest
        'posts_per_page'  =>  3, //so luong bai viet can hien thi
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

        <!-- pagination here -->

        <!-- the loop -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>

          <div class="col-lg-4 col-md-4">
            <div class="img-scale-animate mb-2">
              
              <a class="img-overlay-70" href="<?php echo get_permalink() ?>">
                <div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 360px; height: 240px;background-repeat: no-repeat; background-position: center center; background-size: cover;">
                  <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-10 width-100 rt-lazy wp-post-image loaded">
                </div>
              </a>
              <!-- <a class="img-overlay-70 thum-70" href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" data-was-processed="true" width="360" height="240"></a> -->
              <div class="mask-content-sm">
                <h3 class="title-medium-light">
                  <a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
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
				'post_type' => 'post',//post = slug cuar bafi vieest
				'posts_per_page'	=>	4, //so luong bai viet can hien thi
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

				<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
					<?php if($count == 1){ ?>
						<div class="img-scale-animate mb-30">
							<div class="mask-content-sm">
								<div class="post-meta-light">
									<ul>
										<li><span><i class="fas fa-clock"></i></i></span><?php echo get_the_date(); ?></li>
									</ul>
								</div>
								<h2 class="title-medium-light">
									<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
								</h2>
							</div>
							<a class="img-overlay-70" href="<?php echo get_permalink() ?>">
								<div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 350px; height: 260px;background-repeat: no-repeat; background-position: center center; background-size: cover;">
									<a class="img-overlay-70" href=""><img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-10 width-100 rt-lazy wp-post-image loaded" data-was-processed="true"></a>
								</div>
							</a>

						</div>
						<div class="content-bottom item-shadow-gray">
						<?php } else { ?>
							<div class="media mb-30">
								<div class="image-left">
									<a class="img-opacity-hover" href="<?php echo get_permalink() ?>">
										<div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 112px; height: 84px;background-repeat: no-repeat; background-position: center center; background-size: cover;"></div>
									</a>
								</div>
								<div class="media-body">
									<div class="post-meta-dark">
										<ul>
											<li><span><i class="fas fa-clock"></i></i></span><?php echo get_the_date(); ?></li>
										</ul>
									</div>
									<h3 class="title-medium-dark">
										<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
									</h3>
								</div>
							</div>
							<!-- // -->
						<?php } ?>

					<?php endwhile; ?>
				</div>
				<!-- end of the loop -->

				<!-- pagination here -->

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
                  'post_type' => 'post',//post = slug cuar bafi vieest
                  'posts_per_page'  =>  7, //so luong bai viet can hien thi
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

                  <!-- pagination here -->

                  <!-- the loop -->
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
                    <?php if($count == 1){ ?>
                      <div class="col-xl-4 col-lg-6 col-md-12 mb-30">
                        <div class="img-scale-animate">
                          <a class="img-overlay-70" href="<?php echo get_permalink() ?>">     
                            <div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 746px; height: 537px;background-repeat: no-repeat; background-position: center center; background-size: cover;">
                              <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-10 width-100 rt-lazy wp-post-image loaded" data-was-processed="true">
                            </div>
                          </a>

                          
                          <div class="mask-content-lg">               
                            <div class="post-meta-light">
                              <ul>
                                <li><span><i class="fa fa-user" aria-hidden="true"></i></span><a href="<?php echo get_permalink() ?>" title="Posts by <?php echo get_the_author() ?>" rel="author"><?php echo get_the_author() ?></a></li>
                                <li><span><i class="fas fa-clock"></i></i></span><?php echo get_the_date(); ?></li>
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
                                <!-- <div class="small-item-img">
                                  
                                <a class="img-opacity-hover img-scale-animate" href="<?php echo get_permalink() ?>">
                                  <div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 220px; height: 135px;background-repeat: no-repeat; background-position: center center; background-size: cover;">
                                    <a class="img-opacity-hover img-scale-animate" href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" data-was-processed="true" width="555" height="370"></a>
                                  </div>
                                </a>
                                  
                              </div>     -->
                              <div class="small-item-img">
                                <a class="img-opacity-hover img-scale-animate" href="<?php echo get_permalink() ?>">
                                  <img src="<?php the_post_thumbnail_url(); ?>" width="555" height="370">         
                                </a>
                              </div>    
                              <div class="small-item-meta">
                                <div class="post-meta-dark">
                                  <ul>
                                    <li><span><i class="fas fa-clock"></i></i></span><?php echo get_the_date(); ?></li>
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
                    <!-- end of the loop -->

                    <!-- pagination here -->

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
                  'post_type' => 'post',//post = slug cuar bafi vieest
                  'posts_per_page'  =>  4, //so luong bai viet can hien thi
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

                  <!-- pagination here -->

                  <!-- the loop -->
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="col-md-12 col-sm-6 col-12">
                      <div class="media item-shadow-gray">
                        <div class="image-left">
                          <a href="<?php echo get_permalink() ?>" class="img-opacity-hover">
                            <div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 280px; height: 200px;background-repeat: no-repeat; background-position: center center; background-size: cover;"></div>
                          </a>
                          
                        </div>
                        <div class="media-body">
                          <div class="post-meta-dark">
                            <ul>
                              <li><span><i class="fa fa-user" aria-hidden="true"></i></span><a href="<?php echo get_permalink() ?>" title="Posts by <?php echo get_the_author() ?>" rel="author"><?php echo get_the_author() ?></a></li>
                              <li><span><i class="fas fa-clock"></i></i></span><?php echo get_the_date(); ?></li>
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
                  <!-- end of the loop -->

                  <!-- pagination here -->

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
      'post_type' => 'post',//post = slug cuar bafi vieest
      'posts_per_page'  =>  6, //so luong bai viet can hien thi
    );
    $the_query = new WP_Query( $args );
    ?>
    <?php if ( $the_query->have_posts() ) : ?>

      <!-- pagination here -->

      <!-- the loop -->
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="grid-content-middle overlay-dark-level-2 img-scale-animate text-center mb-2">
            <div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 362px; height: 226px;background-repeat: no-repeat; background-position: center center; background-size: cover;">
              <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-10 width-100 rt-lazy wp-post-image loaded" data-was-processed="true">
            </div>

            <div class="content p-30-r">        

              <h3 class="title-regular-light">
                <a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
              </h3>
              <div class="post-meta-light">
                <ul>
                  <li><span><i class="fa fa-user" aria-hidden="true"></i></span><a href="<?php echo get_permalink() ?>" title="Posts by <?php echo get_the_author() ?>" rel="author"><?php echo get_the_author() ?></a></li>
                  <li><span><i class="fas fa-clock"></i></i></span><?php echo get_the_date(); ?></li>
                </ul>
              </div>
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

      <div class="box-default row tab-space1 rt-news-box-3"><!-- start -->
        <?php 
        $args = array(
          'post_type' => 'post',//post = slug cuar bafi vieest
          'posts_per_page'  =>  5, //so luong bai viet can hien thi
        );
        $the_query = new WP_Query( $args );
        $count = 0;
        ?>
        <?php if ( $the_query->have_posts() ) : ?>

          <!-- pagination here -->

          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
            <?php if($count == 1){ ?>
              <div class="col-lg-5 col-md-5 col-12">
                <div class="item-wrap">
                  <div class="img-scale-animate mb-2 ">
                    <a class="img-overlay-70" href="<?php echo get_permalink() ?>">
                      <div class="thumb-1" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 640px; height: 200px;background-repeat: no-repeat; background-position: center center; background-size: cover;">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-10 width-100 rt-lazy wp-post-image loaded">
                      </div>
                      
                    </a>
                    <div class="mask-content-lg">
                      <div class="post-meta-light">
                        <ul>
                        </ul>
                      </div>
                      <h2 class="title-medium-light">
                        <a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
                      </h2>

                    </div>
                  </div>
                </div>
              <?php } else if($count == 2){ ?>
                <div class="item-wrap">
                  <div class="img-scale-animate mb-2">
                    <a class="img-overlay-70" href="<?php echo get_permalink() ?>">
                      <div class="thumb-1" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 640px; height: 200px;background-repeat: no-repeat; background-position: center center; background-size: cover;">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-10 width-100 rt-lazy wp-post-image loaded">
                      </div>
                      <!-- <img width="670" height="324" src="<?php the_post_thumbnail_url(); ?>" /> -->
                    </a>
                    <div class="mask-content-lg">
                      <div class="post-meta-light">
                        <ul>
                        </ul>
                      </div>
                      <h2 class="title-medium-light">
                        <a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
                      </h2>

                    </div>
                  </div>
                </div>
              </div>
            <?php }  else if($count == 3){ ?>
              <div class="col-lg-4 col-md-4 col-12">
                <div class="tab-space1">

                  <div class="item-wrap">
                    <div class="img-scale-animate mb-2">
                      <div class="mask-content-sm">
                        <h2 class="title-medium-light">
                          <a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
                        </h2>
                      </div>
                      <a class="img-overlay-70" href="<?php echo get_permalink() ?>">
                        <div class="thumb-1" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 700px; height: 400px;background-repeat: no-repeat; background-position: center center; background-size: cover;">
                          <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-10 width-100 rt-lazy wp-post-image loaded">
                        </div>
                        <!-- <img width="700" height="850" src="<?php the_post_thumbnail_url(); ?>" /> -->
                      </a>
                    </div>
                  </div>

                </div>
              </div>
            <?php }  else if($count == 4){ ?>
              <div class="col-lg-3 col-md-3 col-12">
                <div class="item-wrap">
                  <div class="img-scale-animate small-img mb-2">
                    <div class="mask-content-sm">         
                    <h3 class="title-medium-light">
                      <a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
                    </h3>
                  </div>                
                  <a class="img-overlay-70" href="<?php echo get_permalink() ?>">
                    <div class="thumb-1" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 430px; height: 200px;background-repeat: no-repeat; background-position: center center; background-size: cover;">
                      <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-10 width-100 rt-lazy wp-post-image loaded">
                    </div>
                    <!-- <img width="400" height="323" src="<?php the_post_thumbnail_url(); ?>" /> -->
                  </a> 
                  </div>
                </div>
              <?php }  else if($count == 5){ ?>
                <div class="item-wrap">
                  <div class="img-scale-animate small-img mb-2">
                    <div class="mask-content-sm">         
                    <h3 class="title-medium-light">
                      <a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
                    </h3>
                  </div>                
                  <a class="img-overlay-70" href="<?php echo get_permalink() ?>">
                    <div class="thumb-1" style="background-image: url(<?php the_post_thumbnail_url(); ?>); width: 430px; height: 200px;background-repeat: no-repeat; background-position: center center; background-size: cover;">
                      <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-10 width-100 rt-lazy wp-post-image loaded">
                    </div>
                    <!-- <img width="400" height="323" src="<?php the_post_thumbnail_url(); ?>" /> -->
                    </a>
                  </div>
                </div>
              </div>
            <?php } ?>
            
          <?php endwhile; ?>
          <!-- end of the loop -->

          <!-- pagination here -->

          <?php wp_reset_postdata(); ?>

          <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        </div><!-- end -->
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