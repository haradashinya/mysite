<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title('|',true,'right'); bloginfo('name');?></title>

        <link rel="stylesheet" type="text/css" href="wp-content/themes/mysite/css/reset.css">
        <link rel="stylesheet" type="text/css" href="wp-content/themes/mysite/css/foundation.css">

        <link rel="stylesheet" type="text/css" href="wp-content/themes/mysite/css/style.css">
        <!-- <meta name="robots" content="nofollow"> -->
        <!-- <meta name="robots" content="noindex"> -->
        <meta name="viewport" content="width=device-width, user-scalable=false;">


        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-15508754-7', 'furodrive.com');
          ga('send', 'pageview');

          </script>
    </head>

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

<?php wp_head(); ?>
