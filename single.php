<?php get_header(); ?>
<body>
<div class="header">
    <div class="row">
        <div class="large-12 small-12 columns">
        <hgroup>
            <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name');?>'s blog</a></h1>
        </hgroup>
        </div>
    </div>
</div>


<div class="row">
<div class="large-12 columns">

<div id="main" class="container">
            <div id="posts">

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>

    <div class="post row">
    <div class="post-header large-12 small-12 columns">
    <h2>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

    </div>
    </div>

    <div class="row">
    <div class="large-12 small-12 columns">
    <div class="post-content">
    <?php the_content(); ?>
    <div class="post-meta post-date right">
    <?php echo get_the_date(); ?>
    </div>
    </div>
    </div>
    </div>

    <div class="navigation">
    <span class="prev"><?php previous_post_link(); ?></span>
    <span class="next right"><?php next_post_link(); ?></span>
    </div>

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
    <div class="large-12 small-12 columns">
    <?php get_footer();?>
    </div>
    </div>
</div>

