<?php
    require_once("includes/config.php");
    $pageTitle = "Learn Guitar Fast With Guitar Hub";
    $section = "home";
    include(ROOT_PATH . "includes/header.php");
?>

    <div class="home page">
        <div class="wrapper">
            <h2> Welcome To The Guitar Hub </h2>

            <p> If you are ready to learn how to play guitar then you've come to the right place! </p>
            <p>	On this site you will find the chords you need to get started learning how to play. </p>
            <p>	Go through each chord and learn how to place your fingers on the fretboard.  Search for chords and listen to how each one is supposed to sound to make sure you are playing it right.  </p>
            <p> You should also get familiar with guitar scales.  These will help you solo in the right key. </p>

            <div class="homeImage">
                <img alt="acoustic-guitars" src="<?php BASE_URL; ?>img/guitars.png">
            </div>
        </div>
    </div>

<?php include(ROOT_PATH . "includes/footer.php");