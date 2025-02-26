<?php
// Start the session if needed
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Shop Inventory</title>

    <!-- Link to External Stylesheet -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Optionally, add Google Fonts for better typography -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation Bar -->
    <header>
        <div class="container">
            <h1 class="logo">Shop Inventory</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pages/products.php">Products</a></li>
                    <li><a href="pages/billing.php">Billing</a></li>
                    <li><a href="auth/login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content Section -->
    <main>
        <section class="hero">
            <div class="container">
                <h2>Welcome to Our Shop</h2>
                <p>Manage your inventory and create invoices with ease. Keep track of your products and billing process efficiently.</p>
                <a href="pages/products.php" class="cta-btn">Start Managing Products</a>
            </div>
        </section>

        <!-- About Section -->
        <section class="about">
            <div class="container">
                <h2>About Us</h2>
                <p>We provide a user-friendly system for managing inventory and billing. Keep track of stock levels, generate invoices, and more!</p>
            </div>
        </section>

        <!-- Footer Section -->
        <footer>
            <div class="container">
                <p>&copy; 2025 Shop Inventory. All Rights Reserved.</p>
            </div>
        </footer>
    </main>
</body>

</html>
