<html>
<head>
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>favicon.ico">

</head>
<body>

<div class="header">
    <div class="wrapper">
        <h1 class="branding-title"><a href="<?php echo BASE_URL ?>">Shirts 4 Mike</a></h1>
        <form class="header-search" method="get" action="<?php echo BASE_URL . "search/"; ?>">
            <input type="text" name="s" placeholder="Search" value="<?php if (isset($search_term)) { echo htmlspecialchars($search_term); } ?>">
            <input type="submit" value="Go">
        </form>
        <ul class="nav">
            <li class="shirts <?php if ($section == "shirts"){ echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>shirts/">Shirts</a></li>
            <li class="contact <?php if ($section == "contact"){ echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>contact/">Contact</a></li>
            <li class="about <?php if ($section == "about"){ echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>about/">About</a></li>
            <li class="search <?php if ($section == "search"){ echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>search/">Search</a></li>
            <li class="cart"><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=3NUMEXPCCAKPJ&amp;display=1">Shopping Cart</a></li>
        </ul>
    </div>
</div>


<div id="content">

<!-- changed for shopping cart page from paypal
    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="business" value="3NUMEXPCCAKPJ">
    <input type="hidden" name="display" value="1">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
 -->