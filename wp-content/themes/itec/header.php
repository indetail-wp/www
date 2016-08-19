<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-site-verification" content="KcPlwcs0kTlb21gQYKZY3Luqzsf92D2K-hcn28p5hNM" />
		<link rel="alternate" media="handheld" href="<?php the_permalink();?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/ico/favicon.ico">

		<!-- <title><?php wp_title(null)?></title>-->
		<title>

		    <?php if(is_home()):  ?>
		                <?php echo '<title>東京/札幌のアプリ開発、システム開発｜株式会社INDETAIL</title>'; ?>

		    <?php elseif(is_page()): ?>
		                <?php wp_title(''); ?> | <?php bloginfo('name'); ?>

		    <?php elseif(is_tax()): ?>
		                <?php $taxonomy = get_taxonomy(get_query_var('taxonomy'));
		                        echo sprintf('%s', single_term_title('', false)); ?> | <?php bloginfo('name'); ?>

		    <?php elseif(is_archive()): ?>
		                <?php echo esc_html(get_post_type_object(get_post_type())->label ); ?> | <?php bloginfo('name'); ?>

		    <?php elseif(is_single()): ?>
		                <?php wp_title(''); ?> | <?php bloginfo('name'); ?>
		    <?php endif; ?>
		</title>

		<link href='https://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css" />
		<link href="<?php bloginfo('template_url'); ?>/assets/css/common.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet">

		<!-- [Google Analitics]   -->
		<script src="<?php bloginfo('template_url'); ?>/assets/js/ga.js"></script>

		<?php wp_head(); ?>

	</head>

	<body id="<?php echo esc_attr( $post->post_name ); ?>" <?php body_class(); ?>>

	<div id="wrapper">

		<header class="mod-header on">
			<h1 class="mod-header-ico">
				<a href="/"><img src="<?php bloginfo('template_url'); ?>/assets/img/base/mod-logo_wh.svg" alt="スマートフォンアプリ開発、webシステム開発の株式会社INDETAIL" height="30"></a>
			</h1>

			<div class="mod-gnavBtn">
				<div class="mod-gnavBtn-in">
					<figure class="mod-gnavBtn-ico item01"></figure>
					<figure class="mod-gnavBtn-ico item02"></figure>
					<figure class="mod-gnavBtn-ico item03"></figure>
					<!-- <p class="mod-gnavBtn-txt">MENU</p> -->
				</div>
			</div>

			<div class="mod-gnav-folding">
				<ul class="mod-gnav-links">
					<li class="mod-gnav-linksItem item01">
						<a href="/philosophy/">
							<span>PHILOSOPHY</span>
						</a>
						<aside class="mod-gnav-linksItem-openBtn "><img src="<?php bloginfo('template_url'); ?>/assets/img/base/arrow_b_wh.svg" height="22" alt="" title=""></aside>
						<ul class="mod-gnav-subLinks item01">
							<li class="mod-gnav-subLinksItem item01"><a href="/philosophy/">ビジョン</a></li>
							<li class="mod-gnav-subLinksItem item02"><a href="/philosophy/philosophy/">企業理念</a></li>
							<li class="mod-gnav-subLinksItem item03"><a href="/philosophy/message/">代表メッセージ</a></li>
							<li class="mod-gnav-subLinksItem item04"><a href="/philosophy/officer/">役員紹介</a></li>
						</ul>
					</li>
					<li class="mod-gnav-linksItem item02">
						<a href="/service/">
							<span>SERVICE</span>
						</a>
						<aside class="mod-gnav-linksItem-openBtn "><img src="<?php bloginfo('template_url'); ?>/assets/img/base/arrow_b_wh.svg" height="22" alt="" title=""></aside>
						<ul class="mod-gnav-subLinks item02">
							<li class="mod-gnav-subLinksItem item01"><a href="/service/">5つの強み</a></li>
							<li class="mod-gnav-subLinksItem item02"><a href="/service/growthcloud/">Growth Cloud</a></li>
							<!-- <li class="mod-gnav-subLinksItem item03"><a href="/service/moremall/">MOREMALL</a></li> -->
							<li class="mod-gnav-subLinksItem item04"><a href="/service/socialgame/">ソーシャルゲーム運営事業</a></li>
						</ul>
					</li>
					<li class="mod-gnav-linksItem item03">
						<a href="/recruit/">
							<span>RECRUIT</span>
						</a>
					</li>
					<li class="mod-gnav-linksItem item04">
						<a href="http://www.indetail.co.jp/blog/">
							<span>BLOG</span>
						</a>
					</li>
					<li class="mod-gnav-linksItem item05">
						<a href="/company/">
							<span>COMPANY</span>
						</a>
						<aside class="mod-gnav-linksItem-openBtn "><img src="<?php bloginfo('template_url'); ?>/assets/img/base/arrow_b_wh.svg" height="22" alt="" title=""></aside>
						<ul class="mod-gnav-subLinks item05">
							<li class="mod-gnav-subLinksItem item01"><a href="/company/">会社概要</a></li>
							<li class="mod-gnav-subLinksItem item02"><a href="/company/history/">沿革</a></li>
							<li class="mod-gnav-subLinksItem item03"><a href="/company/access/">所在地</a></li>
							<li class="mod-gnav-subLinksItem item04"><a href="/company/event/">イベント</a></li>
						</ul>
					</li>
					<li class="mod-gnav-linksItem item06">
						<a href="/contact/">
							<span>CONTACT</span>
						</a>
					</li>
				</ul>
			</div>
		</header>
