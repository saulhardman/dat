<?php

    $pageName = (isset($_GET['page'])) ? $_GET['page']: 'course';

    $directory = "img/backgrounds/processed/";

    if (glob($directory)) {

        $length = count(glob($directory . '*'));

        $index = rand(1, $length);

    }

?>
<!DOCTYPE html>

<html class="no-js">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

        <?php $pageTitle = "Digital Art and Technology — Messing With the Future"; ?>

        <title><?php echo $pageTitle; ?> — Course Details</title>

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

            <div class="container">

                <hgroup class="logo">

                    <h1 class="title" role="banner"><a href="/" data-page-title="<?php echo $pageTitle; ?> — Course Details" title="Click to view ‘Course details’">Digital Art <span class="amp">&amp;</span> Technology</a></h1>

                </hgroup>

                <?php $pages = array("design", "programming", "theory", "industry", "environment", "team"); ?>

                <nav id="nav">

                    <?php foreach ($pages as $page): ?>

                        <li><a href="<?php echo $page; ?>" class="<?php echo $page; ?>-link<?php if ($pageName == $page): ?> active<?php endif; ?>" data-page-title="<?php echo $pageTitle; ?> — <?php echo ucfirst($page); ?>" title="Click to view the ‘<?php echo ucfirst($page); ?>’"><?php echo ucfirst($page); ?></a></li>

                    <?php endforeach; ?>

                </nav>

            </div>

        </header>