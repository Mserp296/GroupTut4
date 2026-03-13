<?php
session_start();

$cart = $_SESSION['cart'] ?? [];
$total = 0;

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
</head>
<body>
    <h1>Your Cart</h1>

    <?php if (empty($cart)): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <table border="1">
            <tr>
                <th>Item Name</th>
                <th>Price</th>
            </tr>

            <?php foreach ($cart as $item): ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td>$<?php echo $item['price']; ?></td>
                </tr>
                <?php $total += $item['price']; ?>
            <?php endforeach; ?>
        </table>

        <p><strong>Total: $<?php echo $total; ?></strong></p>
    <?php endif; ?>

    <p><a href="products.php">Continue Shopping</a></p>
</body>
</html>
