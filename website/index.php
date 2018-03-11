<html>
    <head>
        <title>
            Sebastian's Shop
        </title>
    </head>
    <body>
        <h1>
            Welcome to Sebastian's shop!
            <ul>
                <?php
                    $json = file_get_contents("http://product-service");
                    $obj = json_decode($json);
                    foreach ($products as $product) {
                        echo "<li>$product</li>";
                    }
                ?>
            </ul>
        </h1>
    </body>
</html>