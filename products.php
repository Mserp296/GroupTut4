<?php
session_start();

$products = ["Apple" => 1, "Banana" => 2, "Oranges" => 3];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($SESSION['cart'])) {
    $item = $_GET['item'];

    if (isset($products[$item])) {
        $_SESSION['cart'][] = [
            "name" => $item,
            "price" => $products[$item]
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>

    <?php foreach ($products as $name => $price): ?>
        <p>
            <?php echo $name; ?> - $<?php echo $price; ?>
            <a href="products.php?item=<?php echo urlencode($name); ?>">Add to Cart</a>
        </p>
    <?php endforeach; ?>

    <p><a href="cart.php">View Cart</a></p>
</body>
</html>