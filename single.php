<?php get_header(); ?>
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
    <div class="post-meta">
    <?php echo get_the_date(); ?> 【<?php the_category(', '); ?>】
    </div>
    </div>
    <div class="post-content">

    <?php if (has_post_thumbnail()) :?>
    <?php the_post_thumbnail(array(100,100)); ?>
    <?php else: ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="100" height="100">
    <?php endif ?>



    <?php the_content(); ?>
</div>
    </div><!-- /post -->

    <div class="navigation">
    <div class="prev"><?php previous_post_link(); ?></div>
    <div class="next"><?php next_post_link(); ?></div>
    </div>

<?php
endwhile;
else:
?>

<p>記事はありません！</p>

<?php
endif;
?>

    </div><!-- /posts -->
    <?php get_sidebar(); ?>
</div><!-- /main -->
