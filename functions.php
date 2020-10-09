<?php 

// 外部ファイル読み込み
function my_script() {
	wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.14.0/css/all.css', array(), '5.14.0', 'all');
	wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array());
	wp_enqueue_style('reset', get_template_directory_uri(). '/assets/dest/css/reset.min.css', array(), '1.0.1', 'all');
	wp_enqueue_style('swiper', get_template_directory_uri(). '/assets/dest/css/swiper.min.css', array(), '1.0.1', 'all');
	wp_enqueue_style('wow', get_template_directory_uri(). '/assets/dest/css/animate.min.css', array(), '1.0.1', 'all');
	wp_enqueue_style('my', get_template_directory_uri(). '/assets/dest/css/style.min.css', array(), '1.0.1', 'all');
	wp_enqueue_script('swiperjs', get_template_directory_uri(). '/assets/dest/js/swiper.min.js', array(), '1.0.1', true);
	wp_enqueue_script('wowjs', get_template_directory_uri(). '/assets/dest/js/wow.min.js', array(), '1.0.1', true);
	wp_enqueue_script('my', get_template_directory_uri(). '/assets/dest/js/script.min.js', array('jquery'), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'my_script');


// titleタグを自動生成
add_theme_support('title-tag');


// メニューを動的にする
function my_menu() {
	register_nav_menus(
		array(
			'global' => 'ヘッダーメニュー',
			'drawer' => 'ドロワーメニュー',
		)
	);
}
add_action('init', 'my_menu');


// アイキャッチ画像を有効化
add_theme_support('post-thumbnails');


// 問い合わせ完了ページへの遷移
add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
	echo <<< EOD
	<script>
		document.addEventListener( 'wpcf7mailsent', function( event ) {
			location = 'http://portfolio.local/contact/thanks/'; /* 遷移先のURL */
		}, false );
	</script>
EOD;
}


































