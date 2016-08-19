<!DOCTYPE html>
<html lang="ja">
<head>

<?php
	if($cat == 'home'){
?>
<title><?php echo $title?></title>
<?php
	}else{
?>
<title><?php echo $title?>｜株式会社INDETAIL - インディテール</title>
<?php
	}
?>
<meta name="description" content="<?php echo $description?>">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,user-scalable=no">

<meta property="og:title" content="<?php echo $title?>" />
<meta property="og:description" content="<?php echo $description?>" />
<meta property="og:image" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]; ?>/common/img/base/fb_icon.jpg" />
<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

<link rel="shortcut icon" href="/common/img/base/favicons/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="/common/img/base/favicons/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="apple-touch-icon" sizes="57x57" href="/common/img/base/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/common/img/base/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/common/img/base/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/common/img/base/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/common/img/base/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/common/img/base/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/common/img/base/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/common/img/base/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/common/img/base/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/common/img/base/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/common/img/base/favicons/favicon-48x48.png" sizes="48x48">
<link rel="icon" type="image/png" href="/common/img/base/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/common/img/base/favicons/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="/common/img/base/favicons/favicon-32x32.png" sizes="32x32">
<link rel="manifest" href="/common/img/base/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#2d88ef">
<meta name="msapplication-TileImage" content="/common/img/base/favicons/mstile-144x144.png">

<link href='https://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/common/css/common.css" />

<!--[if lt IE 9 ]>
<script src="/common/js/libs/html5.js"></script>
<![endif]-->

<script src="/common/js/ga.js"></script>

</head>

<body id="cat-<?php echo $cat?>" class="page-<?php echo $page?>">

<?php
if($cat=="home"){
	$dir = "";
}else{
	$dir = "/";
}
?>



<div id="wrapper">

<header class="mod-header">
<?php if($cat=="home"){ ?>
	<h1 class="mod-header-ico"><a href="/">
		<img src="/common/img/base/mod-logo_wh.svg" alt="スマートフォンアプリ開発、webシステム開発の株式会社INDETAIL" height="30">
	</a></h1>
<?php }else{ ?>
	<div class="mod-header-ico"><a href="/">
		<img src="/common/img/base/mod-logo_wh.svg" alt="スマートフォンアプリ開発、webシステム開発の株式会社INDETAIL" height="30">
	</a></div>
<?php } ?>

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
				<aside class="mod-gnav-linksItem-openBtn <?php if($cat=="philosophy"){ ?>on<?php } ?>"><img src="/common/img/base/arrow_b_wh.svg" height="22" alt="" title=""></aside>
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
				<aside class="mod-gnav-linksItem-openBtn <?php if($cat=="service"){ ?>on<?php } ?>"><img src="/common/img/base/arrow_b_wh.svg" height="22" alt="" title=""></aside>
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
				<aside class="mod-gnav-linksItem-openBtn <?php if($cat=="company"){ ?>on<?php } ?>"><img src="/common/img/base/arrow_b_wh.svg" height="22" alt="" title=""></aside>
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
