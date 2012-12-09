<?php

    $pageName = (isset($_GET['page'])) ? $_GET['page']: 'course';

    $directory = "../img/backgrounds/processed/";

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

        <link rel="stylesheet" href="../css/main.css">

        <script src="../js/vendor/modernizr-2.6.2.min.js"></script>

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

                    <h1 class="title" role="banner"><a href="/cn/" data-page-title="<?php echo $pageTitle; ?> — Course Details" title="Click to view ‘Course details’">&#25968;&#30721;&#33402;&#26415;&#19982;&#31185;&#25216;</a></h1>

                </hgroup>
<!--
                <?php $pages = array("&#35774;&#35745;", "&#32534;&#31243;", "&#29702;&#35770;", "&#23601;&#19994;", "&#29615;&#22659;", "&#22242;&#38431;"); ?>

                <nav id="nav">

                    <?php foreach ($pages as $page): ?>

                        <li><a href="<?php echo $page; ?>" class="<?php echo $page; ?>-link<?php if ($pageName == $page): ?> active<?php endif; ?>" data-page-title="<?php echo $pageTitle; ?> — <?php echo ucfirst($page); ?>" title="Click to view the ‘<?php echo ucfirst($page); ?>’"><?php echo ucfirst($page); ?></a></li>

                    <?php endforeach; ?>

                </nav>
                -->
                <nav id="nav">
                
                                    
                                        <li><a href="/cn/design" class="design-link" data-page-title="Digital Art and Technology — Messing With the Future — Design" title="Click to view the ‘Design’">&#35774;&#35745;</a></li>
                
                                    
                                        <li><a href="/cn/programming" class="programming-link" data-page-title="Digital Art and Technology — Messing With the Future — Programming" title="Click to view the ‘Programming’">&#32534;&#31243;</a></li>
                
                                    
                                        <li><a href="/cn/theory" class="theory-link" data-page-title="Digital Art and Technology — Messing With the Future — Theory" title="Click to view the ‘Theory’">&#29702;&#35770;</a></li>
                
                                    
                                        <li><a href="/cn/industry" class="industry-link" data-page-title="Digital Art and Technology — Messing With the Future — Industry" title="Click to view the ‘Industry’">&#23601;&#19994;</a></li>
                
                                    
                                        <li><a href="/cn/environment" class="environment-link" data-page-title="Digital Art and Technology — Messing With the Future — Environment" title="Click to view the ‘Environment’">&#29615;&#22659;</a></li>
                
                                    
                                        <li><a href="/cn/team" class="team-link" data-page-title="Digital Art and Technology — Messing With the Future — Team" title="Click to view the ‘Team’">&#22242;&#38431;</a></li>
                
                                    
                                </nav>
                
                

            </div>

        </header>