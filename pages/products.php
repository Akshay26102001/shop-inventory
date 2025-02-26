<?php
include "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products (name, price) VALUES ('$name', '$price')";
    $conn->query($sql);
}
?>

<form method="post">
    <input type="text" name="name" placeholder="Product Name" required>
    <input type="number" name="price" placeholder="Price" required>
    <button type="submit">Add Product</button>
</form>

<h3>Product List</h3>
<?php
$result = $conn->query("SELECT * FROM products");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - $" . $row['price'] . "<br>";
}
?>
