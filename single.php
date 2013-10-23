<?php get_header(); ?>


<div class="row">
<div class="large-12 columns">

<div id="main" class="container">
            <div id="posts">

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>

    <div class="post">
    <div class="row">
    <div class="post-header large-12 small-12 columns">
    <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

    </div>
    </div>

    <div class="row">
    <div class="large-12 small-12 columns">
    <div class="post-content">

    <?php if (has_post_thumbnail()) :?>
    <?php /* the_post_thumbnail(array(100,100));  */?>
    <?php else: ?>
    <?php endif ?>

    <?php the_content(); ?>

<!-- //date -->
    <div class="post-meta post-date right">
    <?php echo get_the_date(); ?>
</div>
    </div>
    </div>
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



<div id="footer-wrapper">
    <div class="row">
    <div class="large-12 columns">
    <?php get_footer();?>
    </div>
    </div>
</div>

