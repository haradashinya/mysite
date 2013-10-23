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
	<meta name="robots" content="nofollow">
	<meta name="robots" content="noindex">



        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    </head>
    <body>

    <header>
        <div class="row">
            <div class="large-12 small-12 columns">
            <hgroup>
                <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name');?>'s blog</a></h1>
            </hgroup>
            </div>
        </div>



        <!-- <div id="search-wrapper" class="row"> -->
        <!--     <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>"> -->
        <!--         <div class="large-11 small-10 columns"> -->
        <!--                 <input type="text" value="" name="s" id="s" /> -->
        <!--         </div> -->
        <!--     <div class="large-1 small-2 columns"> -->
        <!--             <input type="submit" id="searchsubmit" class="" value="検索" /> -->
        <!--     </div> -->
        <!--     </form> -->
        <!-- </div> -->

        <div class="row">
            <div class="large-12 small-12 columns">
            <?php wp_nav_menu();?>
            </div>
        </div>






    </header>
<?php wp_head(); ?>
