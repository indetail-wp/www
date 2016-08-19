<form method="get" id="testSearch" action="<?php echo home_url('/'); ?>" class="input-group m-b-lg">
    <!-- <input type="text" class="form-control" placeholder="Search for..."> -->
    <input type="text" name="s" id="testSearchInput" value="<?php the_search_query(); ?>" placeholder="Search for..." class="form-control"/>
    <span class="input-group-btn">
    <button class="btn btn-secondary" type="button">Search</button>
    </span>
    <input type="hidden" name="post_type" value="blog">
</form>

<aside>
    <section class="tab">
        <?php dynamic_sidebar(); ?>
    </section>
</aside>

<aside>
    <section class="tab">
        <h2 class="widgettitle">LATEST ENTRIES</h2>
        <?php $tax_posts = get_posts('post_type=blog&taxonomy=blog_cat&posts_per_page=5'); if($tax_posts): ?>
        <ul>
            <?php foreach($tax_posts as $tax_post): ?>
            <li><a href="<?php echo get_permalink($tax_post->ID); ?>"><?php echo esc_html($tax_post->post_title); ?></a></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </section>
</aside>

<div class="img mb15">
	<a href="https://www.moremall.jp/search/itemList" target="_blank">
		<img src="<?php bloginfo('template_url'); ?>/img/banner/moremall_top.jpg" alt="moremall">
	</a>
</div>

<div class="img mb15">
	<a href="http://www.jinzaiwoman.com/search/details/000021/" target="_blank" rel="nofollow">
		<img src="<?php bloginfo('template_url'); ?>/img/banner/woman.jpg">
	</a>
</div>


<div class="img">
	<div class="fb-page" data-href="https://www.facebook.com/INDETAIL.jp/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/INDETAIL.jp/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/INDETAIL.jp/">株式会社INDETAIL</a></blockquote></div>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6&appId=118214431701924";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!-- <form method="get" id="testSearch" action="<?php echo home_url('/'); ?>">
  <input type="text" name="s" id="testSearchInput" value="<?php the_search_query(); ?>" placeholder="Search for..."/>
  <input type="hidden" name="post_type" value="blog">
  <input type="submit" value="search" accesskey="f" />
</form> -->
