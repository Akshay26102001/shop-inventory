<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
}
include "../config/database.php";
?>

<h2>Welcome, <?php echo $_SESSION['user']; ?></h2>
<a href="../auth/logout.php">Logout</a>
