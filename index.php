<?php get_header(); ?>

<div class="row">
<div class="large-9 columns">
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
    <section class="post">
        <h1> ・ <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <div class="post-content">
        <?php /* the_excerpt(); */ ?>
        </div>
    </section>
<?php
endwhile;
?>

    <div class="navigation">
    <div class="prev"><?php previous_posts_link();?></div>
    <div class="next"><?php next_posts_link(); ?></div>
    </div>

</div> <!-- column -->

<div class="large-3 columns">
<div id="sidebar">
<?php  get_sidebar();  ?>
</div>
</div>

</div><!-- /row-->

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
