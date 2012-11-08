<?php

    $pageName = (isset($_GET['page'])) ? $_GET['page']: 'course';

    $directory = "img/backgrounds/processed/";

    if (glob($directory)) {

        $length = count(glob($directory . '*'));

        $index = rand(1, $length);

    }

    // testing commit

?>
<!DOCTYPE html>
<html class="no-js">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

        <?php $pageTitle = "Digital Art and Technology — Messing With the Future"; ?>

        <title><?php echo $pageTitle; ?> — Course Details</title>

        <meta name="author" content="Digital Art and Technology">
        <meta name="description" content="With a 20 year history, BA/BSc (Hons) Digital Art and Technology at Plymouth University is one of the UK’s best and most established interactive media degrees.">
        <meta name="keywords" content="Web design, game design, new media, interaction design, information design, multimedia, software, programming, motion graphics, digital animation, 3D modelling, virtual reality, mobile platforms, digital media, mobile applications, creative and cultural environments, visualisation, immersive environments">

        <script type="text/javascript" src="//use.typekit.net/cxe5vvo.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    </head>

    <body>

        <!--

               ___       _ __        __              __                     __   __            __                __                 
          ____/ (_)_____(_) /_______/ /  ___________/ /_   __________  ____/ /  / /____  _____/ /_  ____  ____  / /___  ________  __
         / __  / / __  / / __/ __  / /  / __  / ___/ __/  / __  / __ \/ __  /  / __/ _ \/ ___/ __ \/ __ \/ __ \/ / __ \/ __  / / / /
        / /_/ / / /_/ / / /_/ /_/ / /  / /_/ / /  / /_   / /_/ / / / / /_/ /  / /_/  __/ /__/ / / / / / / /_/ / / /_/ / /_/ / /_/ / 
        \____/_/\___ /_/\__/\____/_/   \____/_/   \__/   \____/_/ /_/\____/   \__/\___/\___/_/ /_/_/ /_/\____/_/\____/\___ /\___ /  
               /____/                                                                                                /____//____/   

        -->

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