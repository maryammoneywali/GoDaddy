<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domain Finder</title>
    <style>
        /* Internal CSS mimicking GoDaddy design */
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
        .search-bar {
            max-width: 600px;
            margin: 50px auto;
            display: flex;
            justify-content: space-between;
        }
        .search-bar input {
            width: 80%;
            padding: 10px;
            font-size: 16px;
        }
        .search-bar button {
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Domain Finder</h1>
    </div>
    <div class="search-bar">
        <input type="text" id="domain" placeholder="Enter a domain name...">
        <button onclick="searchDomain()">Search</button>
    </div>

    <script>
        function searchDomain() {
            var domainName = document.getElementById('domain').value;
            if (domainName) {
                window.location.href = 'search_results.php?domain=' + domainName;
            }
        }
    </script>
</body>
</html>
