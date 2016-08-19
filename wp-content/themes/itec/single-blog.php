<?php get_header();
add_filter( 'the_content', 'wpautop' );
add_filter( 'the_excerpt', 'wpautop' );

 ?>

<div class="pagetitle">
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
			<div class="col-xs-12 col-sm-8 col-md-8">
				<div class="blog-post">
					<h1><?php the_title(); ?></h1>
					
					<div class="blog-meta">
						<div class="avatar"><?php echo get_avatar( $post->post_author, 26 ); ?></div>
						<div class="name"><?php the_author_meta( 'nickname', $post->post_author ); ?></div>
						<div class="time"><span class="glyphicon glyphicon-time"></span> <?php the_time( 'Y.m.j' ); ?></div>
                        <div style="text-align:right; float:right; padding-right:10px;"><?php echo get_the_term_list($post->ID, 'blog_cat', 'Category - ', ', ', '' ); ?></div>

                                                
					</div>
					<?php the_post(); ?>
					<?php the_content(); ?>
				</div>
				<?php
//					echo "カテゴリー：";
//					echo get_the_term_list($post->ID,'blog_cat', '', ', '); 
				?>
				<br>
				<?php
//					echo "タグ：";
//					echo get_the_term_list($post->ID,'blog_tag', '', ', '); 
				?>
				<?php comments_template( "", true ); ?>
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

