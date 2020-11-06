<div class="rt-news-ticker-holder">
	<div class="container">
		<div id="news-ticker" style="width: 100%">
			<div class="ticker-title">Mới cập nhật</div>
			<ul>
				<?php
				$next_args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page'=>3,
					'order'=>'DESC',
					'orderby'=>'ID',
				);
				$next_the_query = new WP_Query( $next_args );
				if ( $next_the_query->have_posts() ) {
					while ( $next_the_query->have_posts() ) {
						$next_the_query->the_post(); ?>
						<li><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></li>
					<?php }
				}
				wp_reset_postdata();
				?>
			</ul>
		</div>
	</div>
</div>
<div class="rt-news-quick-info-bar">
	<div class="container">
		<ul class="news-info-list">
			<li><i class="fa fa-calendar" aria-hidden="true"></i><span id="current_date"><?php echo date('d/m/Y'); ?></span></li>
			<li><i class="fas fa-clock"></i></i>Cập nhật lần cuối <?php the_modified_date('d/m/Y H:i:s') ?></li>
			<li><i class="fa fa-map" aria-hidden="true"></i>Việt Nam</li>
		</ul>
	</div>
</div>
<script type="text/javascript">
	
</script>