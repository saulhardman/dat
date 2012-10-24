<?php $pageName = (isset($_GET['page'])) ? $_GET['page']: 'course'; ?>
<!DOCTYPE html>

<html class="no-js">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

        <title>Digital Art and Technology — Messing With the Future</title>

        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">

        <link rel="stylesheet" href="css/main.css">

        <!-- REPLACE WITH PRODUCTION VERSION -->
        <script src="js/vendor/modernizr-2.6.1.min.js"></script>

        <script type="text/javascript" src="//use.typekit.net/cxe5vvo.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    </head>

    <body>

        <header class="main-header">

            <div class="tint">

                <div class="container">

                    <hgroup class="logo">

                        <h1 class="title" role="banner">Digital Art <span class="amp">&amp;</span> Technology</h1>

                        <!-- <h2 class="description">Messing with the future</h2> -->

                    </hgroup>

                    <?php $pages = array("design", "programming", "theory", "industry", "environment", "lifestyle"); ?>

                    <nav>

                        <?php foreach ($pages as $page): ?>

                            <li><a href="<?php echo $page; ?>"<?php if ($pageName == $page): ?> class="active"<?php endif; ?> title="Click to view the ‘<?php echo ucfirst($page); ?>’"><?php echo ucfirst($page); ?></a></li>

                        <?php endforeach; ?>

                    </nav>

                </div>

            </div>

        </header>

        <div id="main" role="main">