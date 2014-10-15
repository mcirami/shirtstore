<li>
    <h2><?php echo $product["product-description"]; ?></h2>
    <a href="<?php echo BASE_URL ?>shirts/<?php echo $product["sku"]; ?>/">
        <img src="<?php echo BASE_URL . $product["img"];?>" alt="<?php echo $product["name"];?>">
        <p>View Details</p>
    </a>
    <form class="shirtpage" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"];?>">
        <input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
        <table class="shirtpage">
            <tr>
                <th><input type="hidden" name="on0" value="Size">
                    <label for="os0">Size</label>
                </th>
                <td>
                    <select name="os0" id="os0">
                        <?php foreach($product["sizes"] as $size) { ?>
                            <option value="<?php echo $size;?>"><?php echo $size;?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th><input type="hidden" name="on1" value="Style">
                    <label for="os1">Style</label>
                </th>
                <td>
                    <select name="os1" id="os1">
                        <?php foreach($product["styles"] as $style) { ?>
                            <option value="<?php echo $style;?>"><?php echo $style;?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Add to Cart" name="submit">
    </form>
</li>