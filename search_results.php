<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
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
        .results {
            max-width: 800px;
            margin: 50px auto;
            padding: 10px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .result-item {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .result-item:last-child {
            border-bottom: none;
        }
        .add-to-cart {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Available Domains</h1>
    </div>

    <div class="results">
        <?php
            if (isset($_GET['domain'])) {
                $domain = $_GET['domain'];
                // Static data for demonstration
                $mockDomains = ["$domain.com", "$domain.net", "$domain.org", "$domain.io"];

                foreach ($mockDomains as $item) {
                    echo "<div class='result-item'>
                            <span>$item</span>
                            <a href='cart.php?domain=$item' class='add-to-cart'>Add to Cart</a>
                          </div>";
                }
            }
        ?>
    </div>
</body>
</html>
