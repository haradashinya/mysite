<?php get_header(); ?>
<div class="row">
<div class="large-12 small-12 columns">
        <div id="main" class="container">
                    <div id="posts">
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>

    <div class="post">
    <div class="post-header">
    <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    </div>
    <div class="post-content">
    <?php the_content(); ?>
</div>
    </div><!-- /post -->



<?php
endwhile;
else:
?>

<p>記事はありません！</p>

<?php
endif;
?>

    </div><!-- /posts -->
    <?php /* get_sidebar();  */?>
</div><!-- /main -->
</div>
</div>


