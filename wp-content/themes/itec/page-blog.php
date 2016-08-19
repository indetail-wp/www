<?php
	get_header();
?>

ブログのトップページ用テンプレートです

<div class="pagetitle mt40">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1>ブログ<span>Blog</span></h1>
			</div>
		</div>
	</div>
</div>

<div class="main">
	<div class="container">
		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-12 blog-post">


					<?php
					grobal $post;
					$args = array(
					     'post_type' => 'blog',
					); 
					$myposts = get_posts( $args );
					?>
					<?php if ( count($myposts) > 0 ) : ?>
					    <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
   						<div class="row">
							<div class="col-xs-12 col-sm-8 col-md-8 righting">
								<h2><?php the_title()?></h2>
								<div class="blog-date"><h4><?php the_time( 'Y-m-d (D)' ); ?></h4></div>
								<?php echo mb_substr(strip_tags($post-> post_content), 0, 100); ?>
								<a href="<?php the_permalink(); ?>" ><br /> ▼続きを読む</a >
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<a href="<?php the_permalink(); ?>" >
								<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'thumbnail' );
								} else {
									echo '<img src="' . get_bloginfo( 'template_url' ) .'/img/noimage.png" alt="" title="" />';
								};
								?>
								</a >
							</div>
						</div>
						<hr>
						<?php endforeach; wp_reset_postdata(); ?>
					<?php else : ?>
					    <div class="post">
					        <h3>記事がありません</h3>
					        <p>表示する記事はありませんでした。</p>
					    </div>
					<?php endif; ?>
				
				
			</div>
		</div>
	</div>
</div>

<?php
	get_footer();
?>



