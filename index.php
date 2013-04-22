<!DOCTYPE html>
<!--[if lte IE 6]> <html class="no-js ie6 ie67 ie678" lang="en"> <![endif]-->
<!--[if lte IE 7]> <html class="no-js ie7 ie67 ie678" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=10">
        <title>poche, a read it later open source system</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png">
        <link rel="stylesheet" href="css/knacss.css" media="all">
        <link rel="stylesheet" href="css/style.css" media="all">

        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
        <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

        <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    </head>
    <body>
        <header>
            <h1 style="display: inline;"><img src="img/logo.png" alt="logo poche" />poche</h1>
            <p style="display: inline;">save your links in your poche</p>
        </header>
        <div id="main">
            <ul id="links">
                <li><a href="/" class="current">home</a></li>
                <li><a href="http://demo.inthepoche.com" target="_blank">demo</a> (login poche, password poche)</li>
                <li><a href="http://inthepoche.com/blog" target="_blank">blog</a></li>
                <li><a href="https://github.com/inthepoche/poche">github</a></li>
                <li><a href="https://twitter.com/getpoche">twitter</a></li>
                <li><a href="http://flattr.com/thing/1265480/poche-a-read-it-later-open-source-system" target="_blank"><img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a></li>
            </ul>
            <div id="content" class="mtl">
                <h2>poche ? what is poche ?</h2>
                <p><b>poche</b> is an alternative to Pocket, Instapaper and Readability. <b>poche</b> is a web application for managing a reading list of articles from the Internet.</p>
                <p>Unlike the others services, <b>poche</b> is <b>open source and free</b> : all your base is belong to you !</p>
                <p>You can easily add a page in your poche with the bookmarklet.</p>
                <p>poche save the entire content of a poched links : text and pictures are stored on your server.</p>
                <p>You can :
                    <ul>
                        <li>read a page in a comfortable reading view</li>
                        <li>archive a link</li>
                        <li>put a link in favorite</li>
                        <li>delete a link</li>
                    </ul>
                </p>

                <p>You can contact us at <a href="mailto:support@inthepoche.com">support@inthepoche.com</a>.</p>

                <h2>screenshots</h2>
                <p>
                    <a class="fancybox" rel="screenshots" href="img/poche-homepage.png" title="poche homepage">
                        <img src="img/poche-homepage-mini.png" alt="poche homepage" />
                    </a>
                    <a class="fancybox" rel="screenshots" href="img/poche-article.png" title="view of an article with poche">
                        <img src="img/poche-article-mini.png" alt="view of an article with poche" />
                    </a>
                </p>
                <h2>requirements & installation</h2>
                <p>you have to install <a href="http://www.php.net/manual/en/book.sqlite.php">sqlite for php</a> on your server.</p>
                <p>get the <a href="https://github.com/nicosomb/poche">latest version</a> of poche on github. Unzip it and upload it on your server. poche must have write access on assets, cache and db directories.</p>
                <p>That's all, <b>poche works</b> !</p>
                <h2>security</h2>
                <p>in order to prevent downloading sqlite file, you have to modify your virtual host by adding these lines :</p><code>&lt;Files ~ "\.sqlite$"&gt;
    Order allow,deny
    Deny from all
&lt;/Files&gt;</code>
                <p>Nginx version :</p><code>location ~ /(db) {
    deny all;
    return 404;
}</code>
                <h2>import from pocket</h2>
                <p>if you want to import your Pocket datas, <a href="https://getpocket.com/export">export them here</a>. Put the HTML file in your poche directory, execute import.php file locally by following instructions. Be careful, the script can take a very long time.</p>
                <h2>license</h2>
                <p>Copyright © 2010-2013 <a href="http://nicolas.loeuillet.org">Nicolas Lœuillet nicolas@loeuillet.org</a> This work is free. You can redistribute it and/or modify it under the terms of the Do What The Fuck You Want To Public License, Version 2, as published by Sam Hocevar. See the COPYING file for more details.</p>
            </div>
        </div>
        <footer class="mr2 mt3 smaller">
            <p>download poche on <a href="http://github.com/inthepoche/poche">github</a><br />follow us on <a href="https://twitter.com/getpoche" title="follow us on twitter">twitter</a></p>
        </footer>

        <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect  : 'none',
                closeEffect : 'none',
            });
        });
        </script>
    </body>
</html>
