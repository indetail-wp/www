<?php if(have_comments()):?>

<article class = "commentlist">
<h3><span class="glyphicon glyphicon-comment"></span> コメント</h3>
<?php wp_list_comments('callback=custom_comment_display');?>
</article>
<?php endif;?>
<?php comment_form(); ?>