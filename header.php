<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title('|',true,'right'); bloginfo('name');?></title>
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.9.1/build/cssreset/cssreset-min.css">

        <link rel="stylesheet" type="text/css" href="wp-content/themes/mysite/css/foundation.css">
        <link rel="stylesheet" type="text/css" href="wp-content/themes/mysite/css/style.css">

        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>


    <?php echo get_stylesheet_uri(); ?>

    </head>
    <body>
        <div id="header" class="container">
        <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name');?></a></h1>
        <?php wp_nav_menu();?>
        </div><!-- /header -->
<?php wp_head(); ?>
