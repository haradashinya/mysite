<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title('|',true,'right'); bloginfo('name');?></title>
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.9.1/build/cssreset/cssreset-min.css">

        <link rel="stylesheet" type="text/css" href="wp-content/themes/mysite/css/foundation.css">
        <link rel="stylesheet" type="text/css" href="wp-content/themes/mysite/css/Buttons/css/button.css">
        <link rel="stylesheet" type="text/css" href="wp-content/themes/mysite/css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Cantora+One' rel='stylesheet' type='text/css'>

        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    </head>
    <body>

    <header>
        <div class="row">
            <div class="large-12 small-12 columns">
            <hgroup>
                <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name');?></a></h1>
            </hgroup>
            <?php wp_nav_menu();?>
            </div>
        </div>
    </header>
<?php wp_head(); ?>
