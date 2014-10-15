<?php

/*
 * Get the most recent products added to database to be displayed on homepage
 * Return: array of most recent products that need to be displayed, most recent being the last displayed
 */
function get_products_recent() {

    require(ROOT_PATH . "includes/database.php");

    try {
        $results = $db->query("
            SELECT name, price, img, sku, paypal
            FROM products
            ORDER BY sku DESC
            LIMIT 4");
    } catch(Exception $e) {
        echo "Data could not be retrieved from database.";
        exit;
    }

    $recent = $results->fetchAll(PDO::FETCH_ASSOC);

    $count = count($recent);
    for ($x = 0; $x < $count; $x++) {
        $recent[$x]["sizes"] = array();
        try {
            $results = $db->prepare("
                SELECT size
                FROM products_sizes AS ps
                INNER JOIN sizes AS s ON ps.size_id = s.id
                WHERE product_sku = ?
                ORDER BY `order`");
            $results->bindParam(1,$recent[$x]["sku"],PDO::PARAM_INT);
            $results->execute();
        } catch (Exception $e) {
            echo "Data could not be retrieved from the database.";
            exit;
        }

        while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
            $recent[$x]["sizes"][] = $row["size"];
        }
    }

    for ($x = 0; $x < $count; $x++) {
        $recent[$x]["styles"] = array();
        try {
            $results = $db->prepare("
                SELECT style
                FROM products_styles AS ps
                INNER JOIN styles AS s ON ps.style_id = s.id
                WHERE product_sku = ?
                ORDER BY `order`");
            $results->bindParam(1,$recent[$x]["sku"],PDO::PARAM_INT);
            $results->execute();
        } catch (Exception $e) {
            echo "Data could not be retrieved from the database.";
            exit;
        }

        while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
            $recent[$x]["styles"][] = $row["style"];
        }
    }

    $recent = array_reverse($recent);

    return $recent;
}

function get_products_count() {
    require(ROOT_PATH . "includes/database.php");

    try {
        $results = $db->query("
            SELECT COUNT(sku)
            FROM products");
    } catch(Exception $e){
        echo "Data could not be retrieved from the database";
        exit;
    }

    return intval($results->fetchColumn(0));
}

/*
 *  Get amount of products needed for each page based
 * Argument: int $first, $last  the index of the shirts needed to be displayed on page
 * Return: array of the products needed to be displayed on page
 */
function get_products_subset($first,$last){

    $offset = $first - 1;
    $rows = $last - $first + 1;

    require(ROOT_PATH . "includes/database.php");

    try {
        $results = $db->prepare("
            SELECT name, price, img, sku, paypal
            FROM products
            ORDER BY sku
            LIMIT ?, ?");
        $results->bindParam(1,$offset,PDO::PARAM_INT);
        $results->bindParam(2,$rows,PDO::PARAM_INT);
        $results->execute();
    } catch(Exception $e) {
        echo "Data could not be retrieved rom database.";
        exit;
    }

    $subset = $results->fetchAll(PDO::FETCH_ASSOC);

    $count = count($subset);
    for ($x = 0; $x < $count; $x++) {
        $subset[$x]["sizes"] = array();
        try {
            $results = $db->prepare("
                SELECT size
                FROM products_sizes AS ps
                INNER JOIN sizes AS s ON ps.size_id = s.id
                WHERE product_sku = ?
                ORDER BY `order`");
            $results->bindParam(1,$subset[$x]["sku"],PDO::PARAM_INT);
            $results->execute();
        } catch (Exception $e) {
            echo "Data could not be retrieved from the database.";
            exit;
        }

        while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
            $subset[$x]["sizes"][] = $row["size"];
        }
    }

    for ($x = 0; $x < $count; $x++) {
        $subset[$x]["styles"] = array();
        try {
            $results = $db->prepare("
                SELECT style
                FROM products_styles AS ps
                INNER JOIN styles AS s ON ps.style_id = s.id
                WHERE product_sku = ?
                ORDER BY `order`");
            $results->bindParam(1,$subset[$x]["sku"],PDO::PARAM_INT);
            $results->execute();
        } catch (Exception $e) {
            echo "Data could not be retrieved from the database.";
            exit;
        }

        while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
            $subset[$x]["styles"][] = $row["style"];
        }
    }

    return $subset;
}

/*
 * Get products that match the search query
 * Argument: string $s  the search term
 * Return: array   list of the products that contain the search term
 */
function get_products_search($s) {

    require(ROOT_PATH . "includes/database.php");

    try {
        $results = $db->prepare("
            SELECT name, price, img, sku, paypal
            FROM products
            WHERE name LIKE ?
            ORDER BY sku");
        $results->bindValue(1,"%" . $s . "%");
        $results->execute();
    } catch(Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $matches = $results->fetchAll(PDO::FETCH_ASSOC);

    $count = count($matches);
    for ($x = 0; $x < $count; $x++) {
        $matches[$x]["sizes"] = array();
        try {
            $results = $db->prepare("
                SELECT size
                FROM products_sizes AS ps
                INNER JOIN sizes AS s ON ps.size_id = s.id
                WHERE product_sku = ?
                ORDER BY `order`");
            $results->bindParam(1,$matches[$x]["sku"],PDO::PARAM_INT);
            $results->execute();
        } catch (Exception $e) {
            echo "Data could not be retrieved from the database.";
            exit;
        }

        while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
            $matches[$x]["sizes"][] = $row["size"];
        }
    }

    for ($x = 0; $x < $count; $x++) {
        $matches[$x]["styles"] = array();
        try {
            $results = $db->prepare("
                SELECT style
                FROM products_styles AS ps
                INNER JOIN styles AS s ON ps.style_id = s.id
                WHERE product_sku = ?
                ORDER BY `order`");
            $results->bindParam(1,$matches[$x]["sku"],PDO::PARAM_INT);
            $results->execute();
        } catch (Exception $e) {
            echo "Data could not be retrieved from the database.";
            exit;
        }

        while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
            $matches[$x]["styles"][] = $row["style"];
        }
    }

    return $matches;
}

/*
 * Get the single product that was clicked on to view details
 * return boolean false if no product matches sku
 * Argument: int $sku the id of the product clicked
 * Return: array of the product needed to be viewed
 */
function get_product_single($sku) {

    require(ROOT_PATH . "includes/database.php");

    try {
        $results = $db->prepare("SELECT name, price, img, sku, paypal FROM products WHERE sku = ?");
        $results->bindParam(1,$sku);
        $results->execute();
    } catch (Exception $e){
        echo "Data could not be retrieved from database";
        exit;
    }

    $product = $results->fetch(PDO::FETCH_ASSOC);

    if($product === false) {
        return $product;
    }

    $product["sizes"] = array();
    try {
        $results = $db->prepare("
            SELECT size
            FROM products_sizes AS ps
            INNER JOIN sizes AS s ON ps.size_id = s.id
            WHERE product_sku = ?
            ORDER BY `order`");
        $results->bindParam(1,$sku);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
        $product["sizes"][] = $row["size"];
    }

    $product["styles"] = array();
    try {
        $results = $db->prepare("
            SELECT style
            FROM products_styles AS ps
            INNER JOIN styles AS s ON ps.style_id = s.id
            WHERE product_sku = ?
            ORDER BY `order`");
        $results->bindParam(1,$sku);
        $results->execute();
    } catch (Exception $e) {
        echo "Data could not be retrieved from database.";
        exit;
    }

    while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
        $product["styles"][] = $row["style"];
    }

    return $product;
}

/*
 * Get all the products currently in database
 * Return: array of all the products
 */
function get_products_all() {

    require(ROOT_PATH . "includes/database.php");

    try {
        $results = $db->query("SELECT name, price, img, sku, paypal FROM products ORDER BY sku ASC");
    } catch (Exception $e) {
        echo "Data could not be retrieved.";
        exit;
    }

    $products = ($results->fetchAll(PDO::FETCH_ASSOC));

    return $products;
}