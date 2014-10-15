<?php
    require_once("../includes/config.php");
    $pageTitle = "Company Information";
    $section = "about";
    include(ROOT_PATH . "includes/header.php");
?>

    <div class="section page">
        <div class="wrapper">
            <h1>Company Information</h1>
            <p>
                Mike&rsquo;s T-Shirt Store<br>
                5535 Lighting Lane<br>
                Loveland, CO 38433<br>
                (555)-555-3333<br>
            </p>
            <p><a href="<?php BASE_URL;?>mike-the-frog">Click here</a> to read about Mike The Frog!</p>
        </div>
    </div>

<?php include(ROOT_PATH . "includes/footer.php"); ?>