<?php include('db.php'); session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #212121;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .cart {
            max-width: 800px;
            margin: 50px auto;
            padding: 10px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .cart-item {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .cart-item:last-child {
            border-bottom: none;
        }
        .remove-item {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Your Cart</h1>
    </div>

    <div class="cart">
        <?php
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            if (isset($_GET['domain'])) {
                $domain = $_GET['domain'];
                $_SESSION['cart'][] = $domain;
            }

            if (count($_SESSION['cart']) > 0) {
                foreach ($_SESSION['cart'] as $key => $domain) {
                    echo "<div class='cart-item'>
                            <span>$domain</span>
                            <a href='cart.php?remove=$key' class='remove-item'>Remove</a>
                          </div>";
                }
            } else {
                echo "<p>Your cart is empty.</p>";
            }

            if (isset($_GET['remove'])) {
                $index = $_GET['remove'];
                unset($_SESSION['cart'][$index]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header('Location: cart.php');
            }
        ?>

        <br>
        <a href="checkout.php" class="add-to-cart">Proceed to Checkout</a>
    </div>
</body>
</html>
