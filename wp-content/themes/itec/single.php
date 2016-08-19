<?php get_header(); ?>

<div class="pagetitle mt40">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1>お知らせ<span>News</span></h1>
			</div>
		</div>
	</div>
</div>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8">
				<p><?php echo get_the_date('Y.n.j'); ?></p>
				<h2><?php the_title(); ?></h2>
				<?php the_post(); ?>
				<?php the_content(); ?>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 side-nav">
				<div class="img mb15">
					<a href="http://online.dhw.co.jp/course/ui/" target="_blank" rel="nofollow">
						<img src="<?php bloginfo('template_url'); ?>/img/banner/dh.png" alt="スマホアプリ UI/UX講座">
					</a>
				</div>
				<div class="img mb15">
					<a href="http://best100.v-tsushin.jp/" target="_blank" rel="nofollow">
						<img src="<?php bloginfo('template_url'); ?>/img/banner/bv.jpg" alt="ベストベンチャー100">
					</a>
				</div>
				<div class="img">
					<a href="http://www.jinzaiwoman.com/search/details/000021/" target="_blank" rel="nofollow">
						<img src="<?php bloginfo('template_url'); ?>/img/banner/woman.jpg">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="localnav active-nav default">
	<div class="localnav-wrap">
		<div class="container">
			<ul>
				<li><a href="<?php home_url()?>/aboutus/">会社概要</a></li>
				<li><a href="<?php home_url()?>/aboutus/event/">社内行事</a></li>
				<li><a href="<?php home_url()?>/aboutus/group/">グループ会社</a></li>
			</ul>
		</div>
		<!-- /container -->

	</div>
</div>

<?php
	get_footer();
?>

