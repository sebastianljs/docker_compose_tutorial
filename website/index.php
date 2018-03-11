<html>
    <head>
        <title>
            Sebastian's Shop
        </title>
    </head>
    <body>
        <h1>
            Welcome to Sebastian's shop!
        </h1>
        <p>
            <ul>
                <?php
                    $json = file_get_contents("http://product-service");
                    $obj = json_decode($json);
                    $products = $obj -> products;
                    foreach ($products as $product) {
                        echo "<li>$product</li>";
                    }
                ?>
            </ul>
        </p>
    </body>
</html>