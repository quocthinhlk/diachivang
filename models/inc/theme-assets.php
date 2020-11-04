<?php 
add_action( 'wp_enqueue_scripts', 'codementor_add_fa_css' );
function codementor_add_fa_css() {
	// wp_enqueue_style( 'bootstrap-font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	// wp_enqueue_style( 'bootstrap-style', THEME_URL . '/views/assets/css/style.min.css' );
	// wp_enqueue_style( 'bootstrap-theme', THEME_URL . '/views/assets/css/theme.min.css' );
	// wp_enqueue_style( 'vendors-style', THEME_URL . '/views/assets/css/vendors-style.css' );
	// wp_enqueue_style( 'style', THEME_URL . '/views/assets/css/style.css' );
	// wp_enqueue_style( 'fontawesome-all', THEME_URL . '/views/assets/css/fontawesome-all.css' );
	// wp_enqueue_style( 'frontend', THEME_URL . '/views/assets/css/frontend.css' );
	// wp_enqueue_style( 'rating', THEME_URL . '/views/assets/css/rating.css' );
	// wp_enqueue_style( 'styles', THEME_URL . '/views/assets/css/styles.css' );
	// wp_enqueue_style( 'woocommerce-layout', THEME_URL . '/views/assets/css/woocommerce-layout.css' );//
	// wp_enqueue_style( 'woocommerce-smallscreen', THEME_URL . '/views/assets/css/woocommerce-smallscreen.css' );
	// wp_enqueue_style( 'woocommerce', THEME_URL . '/views/assets/css/woocommerce.css' );
	// wp_enqueue_style( 'elementor-icons', THEME_URL . '/views/assets/css/elementor-icons.min.css' );
	// wp_enqueue_style( 'animations', THEME_URL . '/views/assets/css/animations.min.css' );
	// wp_enqueue_style( 'custom-frontend', THEME_URL . '/views/assets/css/custom-frontend.min.css' );
	// wp_enqueue_style( 'font-awesome', THEME_URL . '/views/assets/css/font-awesome.min.css' );
	// wp_enqueue_style( 'bootstrap', THEME_URL . '/views/assets/css/bootstrap.min.css' );
	// wp_enqueue_style( 'nivo-slider', THEME_URL . '/views/assets/css/nivo-slider.min.css' );
	// wp_enqueue_style( 'slick-theme', THEME_URL . '/views/assets/css/slick-theme.css' );
	// wp_enqueue_style( 'select2', THEME_URL . '/views/assets/css/select2.css' );
	// wp_enqueue_style( 'meanmenu', THEME_URL . '/views/assets/css/meanmenu.css' );
	// wp_enqueue_style( 'ticker-style', THEME_URL . '/views/assets/css/ticker-style.css' );
	// wp_enqueue_style( 'default', THEME_URL . '/views/assets/css/default.css' );
	// wp_enqueue_style( 'elementor', THEME_URL . '/views/assets/css/elementor.css' );
	// wp_enqueue_style( 'barta-grid', THEME_URL . '/views/assets/css/barta-grid.css' );
	// wp_enqueue_style( 'barta-box', THEME_URL . '/views/assets/css/barta-box.css' );
	// wp_enqueue_style( 'barta-tab', THEME_URL . '/views/assets/css/barta-tab.css' );
	// wp_enqueue_style( 'barta-list', THEME_URL . '/views/assets/css/barta-list.css' );
	// wp_enqueue_style( 'stylesheet', THEME_URL . '/views/assets/css/stylesheet.css' );
	// wp_enqueue_script( 'jquery', THEME_URL . '/views/assets/js/jquery.js' );
	// wp_enqueue_script( 'jquery-migrate', THEME_URL . '/views/assets/js/jquery-migrate.min' );

}

add_action( 'wp_enqueue_scripts', 'codementor_add_fa_js' );
function codementor_add_fa_js() {
	// wp_enqueue_script( 'bootstrap-scripts', THEME_URL . '/views/assets/js/scripts.js' );

	/*
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/core.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/widget.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/mouse.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/sortable.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/core-js.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/snap.svg-min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/hovers.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/scripts.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/jquery.blockUI.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/add-to-cart.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/js.cookie.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/cart-fragments.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/popper.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/select2.full.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/jquery.meanmenu.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/jquery.nav.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/jquery.countdown.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/cookie.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/jquery.nivo.slider.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/lazyload.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/jquery.ticker.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/imagesloaded.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/masonry.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/slick.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/rt-ticker.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/main.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/wp-embed.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/forms.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/frontend-modules.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/position.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/dialog.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/waypoints.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/swiper.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/share-link.min.js'></script>
	<script type='text/javascript' src='<?php echo THEME_URL ?>/views/assets/js/frontend.min.js'></script>
	*/
}

?>