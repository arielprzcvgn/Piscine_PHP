<?php
session_start();
include("log_mysqli.php");
?>
<html>

<head>
    <script src="cart.js"></script>
    <script src="prod_functions.js"></script>
    <link rel="stylesheet" type="text/css" href="confirm.css">
</head>

<body>
    <h1>Confirmation :</h1>
    <h4>&#11015; Cliquez sur un element de votre panier pour le retirer &#11015;</h4>
    <form id="cart" method="POST" action="order.php">
        <div id="cart_parent" class="cart_content">
            <div id="cart_total">
                <div>Total price :</div>
                <div id="cart_price" value="0">0€</div>
            </div>
            <button id="submit_cart" type="submit" name="submit" value="OK">Confirmer votre commande</button>
        </div>
    </form>
</body>

</html>