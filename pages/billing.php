<?php
include "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    $product = $conn->query("SELECT * FROM products WHERE id='$product_id'")->fetch_assoc();
    $total_price = $product['price'] * $quantity;

    $conn->query("INSERT INTO sales (product_id, quantity, total_price) VALUES ('$product_id', '$quantity', '$total_price')");
}
?>

<form method="post">
    <select name="product_id">
        <?php
        $products = $conn->query("SELECT * FROM products");
        while ($row = $products->fetch_assoc()) {
            echo "<option value='".$row['id']."'>".$row['name']."</option>";
        }
        ?>
    </select>
    <input type="number" name="quantity" required>
    <button type="submit">Generate Bill</button>
</form>
