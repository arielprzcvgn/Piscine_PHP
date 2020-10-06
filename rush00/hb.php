<?php
    include ("log_mysqli.php");
    $sql = "SELECT product_name, product_price FROM products WHERE category LIKE 'hb'";
    $req = mysqli_query($GLOBALS['db'], $sql);
    $product_list = mysqli_fetch_all($req);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="cart.css">
        <script src="prod_functions.js"></script>
        <script src="cart.js"></script>
    </head>
    <body>
        <form id="cart" method="POST" action="confirm_cart.php">
            <button id="cart_but"><img src="ressources/others/shopping_cart.png" class="cart_icon">My shopping cart</button>
            <div id="cart_parent" class="cart_content">
                <div id="cart_total">
                    <div>Total price :</div>
                    <div id="cart_price" value="0">0€</div>
                </div>
                <input id="submit_cart" type="submit" name="submit" value="OK">
            </div>
        </form>
        <div class="product_list">
            <?php
                for ($i = 0; $i != sizeof($product_list); $i++)
                {
                    $name = $product_list[$i][0];
                    $price = $product_list[$i][1];
                    $new_prod = "<div id='" . $name . "' class='products' value='" . $price . "'>\n" .
                                "<img src='ressources/img_prod/hb/" . $name . ".jpg' alt='" . $name . "' class='products_pics'>\n" .
                                "<p class='text'>" . $price . "€</p>\n" .
                                "<button class='add_icon' onclick='add_product(this)'></button></div>";
                    echo $new_prod;
                }
            ?>
        </div>
    </body>
</html>