<?php

/*****************
 * cssの読み込み *
 ****************/

/**
 * ファイルの更新日時をバージョンとしてCSSを読み込む関数
 *
 * @param string $handle ハンドル名
 * @param string $path   テーマフォルダからの相対パス (例: /assets/css/style.css)
 * @param array  $deps   依存関係 (省略可)
 */
function my_enqueue_style_ver($handle, $path, $deps = array())
{
  // テーマディレクトリのパスとURLを取得
  $theme_dir = get_template_directory();
  $theme_uri = get_template_directory_uri();

  // フルパスを作成して更新日時を取得
  $full_path = $theme_dir . $path;
  $version = file_exists($full_path) ? filemtime($full_path) : '1.0.0';

  // 読み込み実行
  wp_enqueue_style($handle, $theme_uri . $path, $deps, $version);
}









function add_stylesheet()
{
  // 通常のcssの読み込み
  wp_enqueue_style(
    'reset',
    get_template_directory_uri() . '/assets_yuino/css/reset_yd.css',
    array()
  );
  // // recruitページのときのみSwiper CSSを先に読み込む
  // if (is_page('recruit')) {
  //   wp_enqueue_style(
  //     'swiper',
  //     'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
  //     array('reset'), // 依存なし
  //     null
  //   );
  // }

  // if (is_page('main')) {
  //   my_enqueue_style_ver('main-yd-css', '/assets_yuino/css/style__yd.css');
  // }
  my_enqueue_style_ver('main-yd-css', '/assets_yuino/css/style__yd.css');
}
add_action('wp_enqueue_scripts', 'add_stylesheet');


/*****************
 * fontの読み込み *
 ****************/
function add_custom_fonts()
{
  // preconnect で Google Fonts の DNS/TLS を先行確立
  add_action('wp_head', function () {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
  }, 1);

  // 注：Google Fonts はファミリーごとに enqueue を分ける（まとめると稀に一部が読み込まれない事例があったため）
  // Noto Sans JP: リュウミン Medium / ロダン DB の代替（500=本文・小見出し, 700=見出し・強調）
  wp_enqueue_style(
    'google-fonts-noto-sans-jp',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&display=swap',
    array()
  );
  // Zen Maru Gothic: スーラ DB の代替（FV タグ等）
  wp_enqueue_style(
    'google-fonts-zen-maru-gothic',
    'https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@500;700&display=swap',
    array()
  );

  // // Adobe Fonts のCSSを全ページで読み込み
  // wp_enqueue_style(
  //   'adobe-fonts-1',
  //   'https://use.typekit.net/mzd4mgq.css',
  //   array(),
  //   null
  // );

  // wp_enqueue_style(
  //   'adobe-fonts-2',
  //   'https://use.typekit.net/tsx0aye.css',
  //   array(),
  //   null
  // );

  //   // service投稿タイプの個別ページのみでTypekitスクリプトを読み込み
  //   if (is_singular('service')) {
  //     add_action('wp_head', function () {
  //       <script>
  //         (function(d) {
  //           var config = {
  //               kitId: 'yqm8zob',
  //               scriptTimeout: 3000,
  //               async: true
  //             },
  //             h = d.documentElement,
  //             t = setTimeout(function() {
  //               h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
  //             }, config.scriptTimeout),
  //             tk = d.createElement("script"),
  //             f = false,
  //             s = d.getElementsByTagName("script")[0],
  //             a;
  //           h.className += " wf-loading";
  //           tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
  //           tk.async = true;
  //           tk.onload = tk.onreadystatechange = function() {
  //             a = this.readyState;
  //             if (f || a && a != "complete" && a != "loaded") return;
  //             f = true;
  //             clearTimeout(t);
  //             try {
  //               Typekit.load(config)
  //             } catch (e) {}
  //           };
  //           s.parentNode.insertBefore(tk, s)
  //         })(document);
  //       </script>
  //     });
  //   }
}
add_action('wp_enqueue_scripts', 'add_custom_fonts');





/*****************
 * jsの読み込み *
 ****************/
/**
 * ファイルの更新日時をバージョンとしてJSを読み込む関数
 *
 * @param string $handle ハンドル名
 * @param string $path   テーマフォルダからの相対パス
 * @param array  $deps   依存関係 (例: array('jquery'))
 */
function my_enqueue_script_ver($handle, $path, $deps = array())
{
  $theme_dir = get_template_directory();
  $theme_uri = get_template_directory_uri();
  $full_path = $theme_dir . $path;
  $version = file_exists($full_path) ? filemtime($full_path) : '1.0.0';

  // 第5引数をtrueにして、</body>直前で読み込むのが一般的です
  wp_enqueue_script($handle, $theme_uri . $path, $deps, $version, true);
}
function add_script()
{





  // // jQueryとSwiperを特定のページでのみ読み込む
  // if (is_page('contact') || is_singular('post')) { // 例: お問い合わせページや投稿ページのみ
  //   wp_deregister_script('jquery');
  //   wp_enqueue_script(
  //     'jquery',
  //     'https://code.jquery.com/jquery-3.7.1.min.js',
  //     array(),
  //     null,
  //     true
  //   );

  //   wp_enqueue_script(
  //     'swiper',
  //     'https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js',
  //     array('jquery'),
  //     null,
  //     true
  //   );

  //   wp_enqueue_script(
  //     'swiper.js',
  //     get_template_directory_uri() . '/assets_yuino/js/swiper.js',
  //     array('swiper'),
  //     null,
  //     true
  //   );
  // }

  // オリジナルスクリプトは常に読み込む

  my_enqueue_script_ver('original-js', '/assets_yuino/js/main.js', array());

  //   if (is_page('glp1')) {
  //     // 依存関係がない場合は array() を渡す
  //     my_enqueue_script_ver('original-glp1-js', '/assets_yuino/js/main-glp1.js', array());
  // }


}
add_action('wp_enqueue_scripts', 'add_script');


/***********************
 * タイトルタグを動的に出力 *
 ************************/
function my_theme_setup()
{
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'my_theme_setup');


/***********************************
 * ユーザーエージェント判定（2025年版） *
 ***********************************/
function is_mobile()
{
  $useragents = array(
    'iPhone',       // iPhone
    'iPod',         // iPod touch
    'iPad',         // iPad
    'Android',      // Android
    'webOS',        // Palm Pre
    'BlackBerry',   // BlackBerry
    'BB10',         // BlackBerry 10
    'IEMobile',     // Windows Phone
    'Opera Mini',   // Opera Mini
    'Opera Mobi',   // Opera Mobile
    'Fennec',       // Firefox Mobile
    'Silk',         // Kindle Fire
    'Kindle',       // Amazon Kindle
    'PlayBook',     // BlackBerry PlayBook
    'Nokia',        // Nokia
    'Samsung',      // Samsung devices
    'Huawei',       // Huawei devices
    'MiuiBrowser',  // Xiaomi devices
    'Redmi',        // Xiaomi devices
    'OnePlus',      // OnePlus devices
    'Oppo',         // Oppo devices
    'Vivo',         // Vivo devices
    'LG',           // LG devices
    'HTC',          // HTC devices
    'ZTE',          // ZTE devices
    'Sony',         // Sony devices
    'Tizen',        // Tizen OS
    'Windows Phone' // Windows Phone
  );

  $pattern = '/' . implode('|', $useragents) . '/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}






/********************************
 * ContactForm7で<p>と<br>を取る *
 *********************************/
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

//
/********************
 * アイキャッチ有効化 *
 *********************/
add_theme_support('post-thumbnails');



/********************************
 * 管理画面「外観＞メニュー」 を表示 *
 *********************************/
add_action('after_setup_theme', 'register_menu');
function register_menu()
{
  register_nav_menu('primary', __('Primary Menu', 'theme-slug'));
}




/*******************
 * ACFプレビュー問題 *
 ********************/
// add_filter( 'use_block_editor_for_post', function( $use_block_editor, $post ) {
// 	// ‘page’は使用する投稿タイプに合わせて変更する（投稿：post、固定ページ：page、カスタム投稿タイプ：slug名）
// 	if ( $post->post_type === 'page'  ) { 
// 		$use_block_editor = false;
// 	}
// 	return $use_block_editor;
// }, 10, 2 );



/**********************
 * 管理画面メニュー 非表示 *
 ***********************/
// function remove_menus() {
//   remove_menu_page('index.php'); // ダッシュボード
//   remove_menu_page('edit.php'); // 投稿
//   remove_menu_page('edit.php?post_type=スラッグ名'); // カスタム投稿タイプ
//   remove_menu_page('upload.php'); // メディア
//   remove_menu_page('edit.php?post_type=page'); // 固定ページ
//   remove_menu_page('edit-comments.php'); // コメント
//   remove_menu_page('themes.php'); // 外観
//   remove_menu_page('plugins.php'); // プラグイン
//   remove_menu_page('users.php'); // ユーザー
//   remove_menu_page('tools.php'); // ツール
//   remove_menu_page('options-general.php'); // 設定
// }
// add_action('admin_menu', 'remove_menus', 999 );





/*******************************************
 * 管理画面からプラグインメニューを非表示にする *
 ******************************************/
// function remove_plugins_menus() {
//   remove_menu_page( 'cptui_main_menu' ); // Custom Post Type UI
// }
// add_action( 'admin_menu', 'remove_plugins_menus' );

/***********************
 * コメント機能の完全無効化 *
 ***********************/
add_action('init', function () {
  remove_post_type_support('post', 'comments');
  remove_post_type_support('page', 'comments');
  // カスタム投稿タイプがある場合スラッグを追加
});
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
add_action('admin_menu', function () {
  remove_menu_page('edit-comments.php');
}, 999);
add_action('admin_bar_menu', function ($bar) {
  $bar->remove_menu('comments');
}, 999);
update_option('default_comment_status', 'closed');


/******************
 * ゴミ箱を空にする *
 ******************/
add_action('admin_menu', function () {
  add_menu_page(
    'ゴミ箱を空にする',
    'ゴミ箱削除',
    'manage_options',
    'empty-trash',
    function () {
      if (isset($_POST['empty_trash'])) {
        global $wpdb;
        $wpdb->query("DELETE FROM {$wpdb->posts} WHERE post_status = 'trash'");
        echo '<div class="updated"><p>ゴミ箱を空にしました。</p></div>';
      }
      echo '<form method="post"><button type="submit" name="empty_trash">ゴミ箱を空にする</button></form>';
    }
  );
});

