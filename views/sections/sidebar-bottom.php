<div class="rt-news-ticker-holder">
	<div class="container">	
		<ul id="rt-js-news" class="js-hidden">
			<?php $args = array(
				'post_type' => 'post',//post = slug cuar bafi vieest
				'posts_per_page'	=>	4, //so luong bai viet can hien thi
				// 'tax_query' => array(
				// 	array(
				// 		'taxonomy' => 'category',
				// 		'field'    => 'term_id',
				// 		'terms'    => 2,
				// 	),
				// ),
			);
			$the_query = new WP_Query( $args );
			?>
			<?php if ( $the_query->have_posts() ) : ?>

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
					<li class="news-item">
						<a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
					</li>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			<!-- <li class="news-item">
				<a href="https://www.radiustheme.com/demo/wordpress/themes/barta/the-company-behind-vespa-built-a-cargo-robot-that-follows-you-around-2/">The company behind Vespa built a cargo robot that follows you around</a>
			</li> -->
	</ul>
</div>
</div>

<div class="rt-news-quick-info-bar">
	<div class="container">
		<ul class="news-info-list">
			<li><i class="fa fa-calendar" aria-hidden="true"></i><span id="current_date"><?php echo date('d/m/Y'); ?></span></li>
			<li><i class="fa fa-clock-o" aria-hidden="true"></i>Cập nhật lần cuối <?php the_modified_date('d/m/Y H:i:s') ?></li>
			<li><i class="fa fa-map" aria-hidden="true"></i>Việt Nam</li>
		</ul>
	</div>
</div>