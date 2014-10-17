<!DOCTYPE HTML>
<html>
    <head>

        <title><?php echo $pageTitle; ?></title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/normalize.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/main.css" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Rambla:400,700,400italic|Courgette' rel='stylesheet' type='text/css'>

    </head>
    <body>

    <div class="header">
        <div class="wrapper">
            <h1 class="logo"><a href="<?php echo BASE_URL; ?>">The Guitar Hub</a></h1>

                <!-- Main navigation -->
                <ul class="nav">
                    <li class="<?php if ($section == "home"){ echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>">Home</a></li>
                    <li class="<?php if ($section == "chords"){ echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>chords">Chord Chart</a></li>
                    <li class="<?php if ($section == "search"){ echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>search">Search for Chords</a></li>
                    <li class="<?php if ($section == "scales"){ echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>scales">Scales</a></li>
                    <li class="<?php if ($section == "tuner"){ echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>tuner">Tuner</a></li>
                    <li class="<?php if ($section == "favorites"){ echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>favorites">Favorites</a></li>
                    <li><a href="<?php echo BASE_URL; ?>logout.php">Logout</a></li>
                </ul>
        </div>
    </div>

<!-- Start of main content in middle of page -->
    <div id ="content">