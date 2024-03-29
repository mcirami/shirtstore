<?php

    require_once("../includes/config.php");
    require_once(ROOT_PATH . "includes/products.php");

    // retrieve current page number from query; set to 1 if blank
    if (empty($_GET["pg"])){
        $current_page = 1;
    } else {
        $current_page = $_GET["pg"];
    }
    // set random strings to 0; remove decimals
    $current_page = intval($current_page);

    $total_products = get_products_count();
    $products_per_page = 8;
    $total_pages = ceil($total_products / $products_per_page);

    // redirect too-large page numbers to the last page
    if ($current_page > $total_pages) {
        header("Location: ./?pg=" . $total_pages);
    }
    // redirect too-small page numbers(or strings converted to 0) to the first page
    if ($current_page < 1) {
        header("Location: ./");
    }

    // determine the start and end shirt for the current page
    // example: page 3 with 8 shirts per page, $start and $end would be 17-24
    $start = (($current_page - 1) * $products_per_page) + 1;
    $end = $current_page * $products_per_page;
    if ($end > $total_products){
        $end = $total_products;
    }

    $products = get_products_subset($start,$end);

    $pageTitle = "Mike's Full Catalog of Shirts";
    $section = "shirts";
    include(ROOT_PATH . "includes/header.php");
?>
    <div class="section shirts page">
        <div class="wrapper">
            <h1>Mike&rsquo;s Full Catalog Of Shirts</h1>
            <?php include(ROOT_PATH . "includes/partial-list-navigation.html.php");?>
            <ul class="products">
                <?php foreach($products as $product) {
                    include(ROOT_PATH . "includes/partial-product-list-view.html.php");
                    }
                ?>
            </ul>
            <?php include(ROOT_PATH . "includes/partial-list-navigation.html.php");?>
        </div>
    </div>

<?php include(ROOT_PATH . "includes/footer.php"); ?>