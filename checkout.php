<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
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
        .checkout {
            max-width: 800px;
            margin: 50px auto;
            padding: 10px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Checkout</h1>
    </div>

    <div class="checkout">
        <h3>Your Cart:</h3>
        <?php
            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                foreach ($_SESSION['cart'] as $domain) {
                    echo "<p>$domain</p>";
                }
                echo "<p><strong>Thank You for Your Purchase!</strong></p>";
            } else {
                echo "<p>Your cart is empty.</p>";
            }
        ?>
    </div>
</body>
</html>
