<?php

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');
remove_filter('the_title', 'wptexturize');

// 余計な変換をオフ
function override_mce_options( $init_array ) {
    global $allowedposttags;

    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
    $init_array['indent']                  = true;
    $init_array['wpautop']                 = false;

    return $init_array;
}
add_filter( 'tiny_mce_before_init', 'override_mce_options' );

//カスタム投稿タイプ「メディア掲載情報」の追加
add_action( 'init', 'CreatePostType_Mediacoverage' );
function CreatePostType_Mediacoverage() {
	register_post_type(
		'mediacoverage',
		array(
			'labels' => array(
				'name' => __( 'メディア掲載情報' ),
				'singular_name' => __( 'メディア掲載情報' )
			),
			'public' => true,
			'menu_position' =>5,
		)
	);
}

//カスタム投稿タイプ「お知らせ」の追加
add_action( 'init', 'CreatePostType_Informations' );
function CreatePostType_Informations() {
	register_post_type(
		'informations',
		array(
			'labels' => array(
				'name' => __( 'お知らせ' ),
				'singular_name' => __( 'お知らせ' )
			),
			'public' => true,
			'menu_position' =>5,
		)
	);
}

//カスタム投稿タイプ「社内行事」の追加
add_action( 'init', 'CreatePostType_Events' );
function CreatePostType_Events() {
	register_post_type(
		'events',
		array(
			'labels' => array(
				'name' => __( '社内行事' ),
				'singular_name' => __( '社内行事' )
			),
			'public' => true,
			'menu_position' =>5,
		)
	);
}

//カスタム投稿タイプ「ブログ」の追加
add_action( 'init', 'CreatePostType_Blog' );
function CreatePostType_Blog() {
	register_post_type(
		'blog',
		array(
			'labels' => array(
				'name' => __( 'ブログ' ),
				'singular_name' => __( 'ブログ' )
			),
			'public' => true,
			'menu_position' =>5,
			'has_archive' => true,
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'comments',
				'publicize',
				'excerpt',
				'custom-fields',
				'revisions',
				'wpcom-markdown' ,

			),
		)
	);

	register_taxonomy(
		'blog_cat',
		'blog',
		array(
		  'hierarchical' => true,
		  'update_count_callback' => '_update_post_term_count',
		  'label' => 'ブログのカテゴリー',
		  'singular_label' => 'ブログのカテゴリー',
		  'public' => true,
		  'show_ui' => true
		)
	  );

	register_taxonomy(
		'blog_tag',
		'blog',
		array(
			'hierarchical' => false,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'ブログのタグ',
			'singular_label' => 'ブログのタグ',
			'public' => true,
		 	'show_ui' => true
		)
	);

}

//新規投稿時にスラッグへ投稿IDを設定
function change_slug()
{
  global $post;
  if(get_post_type($post) != 'page')
    {
      $post->post_name = $post->ID;
    }
}
add_action('admin_print_styles-post-new.php', 'change_slug', 1000);




//ナビゲーションを非表示に
add_filter( 'show_admin_bar', '__return_false' );

//いらないヘッダ情報の削除
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'feed_links_extra', 3);

//アイキャッチ添付機能の有効化
add_theme_support( 'post-thumbnails' );

//コメント欄タグ説明削除
add_filter("comment_form_defaults","my_special_comment_after");

function my_special_comment_after($args){
    $args['comment_notes_after'] = '';
return $args;
}





/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function wp_bootstrap_register_sidebars() {
    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => 'Main Sidebar',
    	'description' => 'Used on every page BUT the homepage page template.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));

    register_sidebar(array(
    	'id' => 'sidebar2',
    	'name' => 'Homepage Sidebar',
    	'description' => 'Used only on the homepage page template.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));

    register_sidebar(array(
      'id' => 'footer1',
      'name' => 'Footer 1',
      'before_widget' => '<div id="%1$s" class="widget col-sm-4 %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
    ));

    register_sidebar(array(
      'id' => 'footer2',
      'name' => 'Footer 2',
      'before_widget' => '<div id="%1$s" class="widget col-sm-4 %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
    ));

    register_sidebar(array(
      'id' => 'footer3',
      'name' => 'Footer 3',
      'before_widget' => '<div id="%1$s" class="widget col-sm-4 %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widgettitle">',
      'after_title' => '</h4>',
    ));


    /*
    to add more sidebars or widgetized areas, just copy
    and edit the above sidebar code. In order to call
    your new sidebar just use the following code:

    Just change the name to whatever your new
    sidebar's id is, for example:

    To call the sidebar in your template, you can just copy
    the sidebar.php file and rename it to your sidebar's name.
    So using the above example, it would be:
    sidebar-sidebar2.php

    */
} // don't remove this bracket!

// ウィジェット
register_sidebar();

//コメント欄
function custom_comment_display($comment,$args,$depth){
    $GLOBALS['comment']=$comment;?>
    <section id="comment-<?php comment_ID() ?>">
		<div class="comment-avatar">
			<?php echo get_avatar($comment, 45); ?>
		</div>
		<div class="comment-body">
			<div class="comment-meta">
			<span class="comment-author">
				<strong><?php comment_author_link(); ?></strong>
			</span>
			<span class="comment-date">
				<?php comment_date('Y.m.j');?> at <?php comment_time('H:i:s');?>
			</span>
			</div>

			<div class="comment-content">
				<?php comment_text();?>
			</div>
		</div>
	</section>

<?php
}

//カスタム投稿編集画面にAddQuicktagを追加
function addquicktag_set_custom_post_type($post_types){
	$post_types[] = "blog";
	return $post_types;
}
add_filter('addquicktag_post_types', 'addquicktag_set_custom_post_type');

//画像挿入時にwidthとheight指定が入らないようにする
function remove_hwstring_from_image_tag( $html, $id, $alt, $title, $align, $size ) {
    list( $img_src, $width, $height ) = image_downsize($id, $size);
    $hwstring = image_hwstring( $width, $height );
    $html = str_replace( $hwstring, '', $html );
    return $html;
}
add_filter( 'get_image_tag', 'remove_hwstring_from_image_tag', 10, 6 );

//寄稿者にファイルアップロードを許可
if ( current_user_can('contributor') && !current_user_can('upload_files') )
    add_action('admin_init', 'allow_contributor_uploads');

  function allow_contributor_uploads() {
      $contributor = get_role('contributor');
      $contributor->add_cap('upload_files');
}



function pagenavi($args = array()) {
  //デフォルト値
  $defaults = array(
    'class_name' => 'pagenavi',  //div 要素のクラス名
    'show_all' => false,    //全件表示するかどうか。
    'prev_next' =>  true,    //「前へ」「次へ」のリンクの有無
    'prev_text' => __('&laquo; Previous'),     //「前へ」のテキスト。
    'next_text' => __('Next &raquo;'),   //「次へ」のテキスト
    'end_size' => 1,  //最初のページと最終のページ部の表示件数（1以上）
    'mid_size' => 3,  //現在のページ部分（但し現在のページを含まない）の表示件数（0以上）
  );
  $args = wp_parse_args( $args, $defaults );    //パラメータを解析し、省略されたパレメータにはデフォルト値をセット
  extract( $args, EXTR_SKIP );    //キーを変数名、値を変数の値として処理
  echo '<div class="' .$class_name. '">';
  global $wp_rewrite;
  $paginate_base = get_pagenum_link(1);
  if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
    $paginate_format = '';
    $paginate_base = add_query_arg('paged', '%#%');
  } else {
    $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
    user_trailingslashit('page/%#%/', 'paged');;
    $paginate_base .= '%_%';
  }
  global $paged;
  global $wp_query;
  //paginate_links()の出力を $outputs に格納
  $outputs = paginate_links( array(
    'base' => $paginate_base,
    'format' => $paginate_format,
    'total' => $wp_query->max_num_pages,
    'current' => ($paged ? $paged : 1),
    'show_all' => $show_all,
    'prev_next' =>  $prev_next,
    'prev_text' => $prev_text ,
    'next_text' => $next_text ,
    'end_size' => $end_size,
    'mid_size' => $mid_size,
    'type' => 'list'
  ));
  //★ ul 要素のクラス名を変更（置換）して出力
  echo str_replace("<ul class='page-numbers'>", "<ul class='pagination'>", $outputs);
  echo '</div>';

}

// remove jetpack open graph tags
remove_action('wp_head','jetpack_og_tags');


// メニューを非表示にする
function remove_menus () {
		if (!current_user_can('level_10')) { //level10以下のユーザーの場合メニューを非表示にする
				remove_menu_page('wpcf7'); //Contact Form 7
				remove_menu_page('jetpack'); //jetpack
				remove_menu_page('edit.php'); // 投稿
				remove_menu_page( 'upload.php' );                 // メディア
				remove_menu_page('tools.php'); // ツール
				remove_menu_page( 'edit-comments.php' );          // コメント
				remove_menu_page( 'edit.php?post_type=informations' );          // お知らせ
				remove_menu_page( 'edit.php?post_type=mediacoverage' );          // メディア掲載情報
				remove_menu_page( 'edit.php?post_type=events' );          // 社内行事
		}
}
add_action('admin_menu', 'remove_menus');




// function memory_peak_usage() {
// 	echo '<p>' memory peak usage: . round(memory_get_peak_usage() / 1024 / 1024, 2) . "MB</p>\n";
// }
// // add_action('wp_footer','memory_peak_usage');
// add_action('admin_footer','memory_peak_usage');
