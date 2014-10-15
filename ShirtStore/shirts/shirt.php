<?php
    require_once("../includes/config.php");
    require_once(ROOT_PATH . "includes/products.php");

    // if an ID is specified in the query string use it
    if(isset($_GET["id"])) {
        $product_id = intval($_GET["id"]);
        $product = get_product_single($product_id);
    }

    // if product from ID string is not valid it will redirect to first page of shirts
    if (empty($product)) {
        header("Location: ". BASE_URL . "shirts/");
        exit();
    }

    $pageTitle = $product["name"];
    $section = "shirts";
    include(ROOT_PATH . "includes/header.php");
?>

    <div class ="section page">
        <div class="wrapper">
            <div class="breadcrumb">
                    <a href=" <?php echo BASE_URL; ?>shirts/">Shirts</a> &gt; <?php echo $product["name"]; ?>
            </div>
            <div class="shirt-picture">
                <span>
                    <img src="<?php echo BASE_URL . $product["img"];?>" alt="<?php $product["name"]; ?>">
                </span>
            </div>
            <div class="shirt-details">
                <h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"];?>">
                    <input type="hidden" name="item_name" value="<?php echo $product["name"];?>">

                    <table>
                        <tr>
                            <th>
                                <input type="hidden" name="on0" value="Size">
                                <label for="os0">Size</label>
                            </th>
                            <td>
                                <select name="os0" id="os0">
                                    <?php foreach($product["sizes"] as $size) { ?>
                                        <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <input type="hidden" name="on1" value="Style">
                                <label for="os1">Style</label>
                            </th>
                            <td>
                                <select name="os1" id="os1">
                                    <?php foreach($product["styles"] as $style) { ?>
                                        <option value="<?php echo $style; ?>"><?php echo $style; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <input type="hidden" name="on2" value="Gift Message">
                                <label for="os2">Gift Message</label>
                            </th>
                            <td>
                                <textarea name="os2" id="os2"></textarea>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="Add to Cart" name="submit">
                </form>
                <p class="note-designer">* All shirts are designed by Mike the Frog.</p>
            </div>
        </div>
    </div>

<?php include(ROOT_PATH . "includes/footer.php");?>

