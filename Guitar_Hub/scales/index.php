<?php

    require_once("../includes/config.php");

    $pageTitle = "Guitar Scales";
    $section = "scales";
    include(ROOT_PATH . "includes/header.php");
?>

    <h2>Guitar Scales</h2>

	<table class="scales-table">
        <thead>
            <tr>
                <th>Root</th>
                <th>Major</th>
                <th>Minor</th>
            </tr>
        </thead>

        <tr>
            <th> A </th>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=A-Major">Major Scale</a>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=A-minor">Minor Scale</a>
        </tr>
        <tr>
            <th> B </th>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=B-Major">Major Scale</a>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=B-minor">Minor Scale</a>
        </tr>
        <tr>
            <th> C </th>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=C-Major">Major Scale</a>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=C-minor">Minor Scale</a>
        </tr>
        <tr>
            <th> D </th>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=D-Major">Major Scale</a>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=D-minor">Minor Scale</a>
        </tr>
        <tr>
            <th> E </th>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=E-Major">Major Scale</a>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=E-minor">Minor Scale</a>
        </tr>
        <tr>
            <th> F </th>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=F-Major">Major Scale</a>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=F-minor">Minor Scale</a>
        </tr>
        <tr>
            <th> G </th>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=G-Major">Major Scale</a>
            <td> <a href="<?php echo BASE_URL ?>scales/scale.php/?id=G-minor">Minor Scale</a>
        </tr>
    </table>


<?php include(ROOT_PATH . "includes/footer.php"); ?>