<?php
	get_header();
?>
<div class="pagetitle">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1>BLOG<span>ブログ</span></h1>
			</div>
		</div>
	</div>
</div>

<div class="main archive-blog">
	<div class="container">
		<div class="row">

			<div class="col-xs-12 col-sm-8 col-md-8">

				<?php
					$wp_query = new WP_Query();
					$param = array(
						'posts_per_page' => '10', //表示件数。-1なら全件表示
						'post_type' => 'blog', //カスタム投稿タイプの名称を入れる
						'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
						'orderby' => 'date',
						'order' => 'DESC',
						'paged' => $paged
					);
					$wp_query->query($param);
				?>

					<?php if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();?>
						<section>
							<div class="blog-body">
								<div>
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
								<div class="archive-blog-body">
									<h2><a href="<?php the_permalink(); ?>" ><?php the_title()?></a ></h2>


									<?php echo mb_substr(strip_tags($post-> post_content), 0, 100); ?>
									<!-- <a href="<?php the_permalink(); ?>" ><br /> Read more</a > -->
								</div>

							</div>
							<div class="blog-meta">
										<!-- <div class="avatar"><?php echo get_avatar( $post->post_author, 26 ); ?></div> -->
										<div class="name"><?php the_author_meta( 'nickname', $post->post_author ); ?></div>
										<div class="time"><span class="glyphicon glyphicon-time"></span> <?php the_time( 'Y.m.j' ); ?></div>
										<div style="text-align:right; float:right; padding-right:10px;"><?php echo get_the_term_list($post->ID, 'blog_cat', 'Category - ', ', ', '' ); ?></div>
									</div>
						</section>


					<?php endwhile; else: ?>
						<div class="post">
					        <h3>記事がありません</h3>
					        <p>表示する記事はありませんでした。</p>
					    </div>
					<?php endif;?>

					<?php
						$args = array(
							'prev_text' => 'Prev',     //「前へ」のテキスト。
							'next_text' => 'Next',   //「次へ」のテキスト
							'class_name' => 'pagination'  //これはdiv要素のクラスなので必須ではない
						);
						pagenavi($args);
					?>

			</div>

			<div class="col-xs-12 col-sm-4 col-md-4 side-nav">
				<?php get_sidebar(); ?>
			</div>

		</div>
	</div>
</div>

<?php
	get_footer();
?>
