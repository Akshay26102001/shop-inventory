# 🛒 Shop Inventory & Billing Management System

A **PHP-based** inventory and billing management system with **MySQL database**. Allows users to **add, update, and view products**.  

## 🚀 Features
- **Product Management**: Add and list products dynamically.
- **Billing System**: Manage invoices for customer purchases.
- **MySQL Database**: Store and retrieve product data.
- **Responsive UI**: Modern design with sidebar navigation.
- **Git Deployment**: Host the project using **GitHub**.

---

## 📌 1. **Project Setup**
### 1️⃣ **Clone the Repository**
```bash
git clone https://github.com/your-username/shop-inventory.git
cd shop-inventory


🚀 Step-by-Step Guide to Deploying Shop Inventory & Billing Management System on AWS & GitHub
This guide will take you through setting up your project, database configuration, and deploying it on GitHub and AWS EC2.

📌 1️⃣ Install Required Services on AWS EC2
🔹 Log in to your EC2 instance using SSH:

ssh -i your-key.pem ec2-user@your-server-ip

Update system packages:
sudo dnf update -y

Install Apache, PHP, and MySQL:

sudo dnf install -y httpd php php-mysqli mariadb105-server git

Start and enable Apache & MySQL:

sudo systemctl enable --now httpd mariadb

sudo mysql_secure_installation


📌 2️⃣ Set Up the MySQL Database
🔹 Login to MySQL:

mysql -u root -p
Enter your MySQL root password.(while entering your password it may not be visible)

Create a new database and table:

CREATE DATABASE shop_inventory;
USE shop_inventory;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

INSERT INTO products (name, price) VALUES 
('Laptop', 50000.00),
('Smartphone', 20000.00),
('Headphones', 3000.00);


Type exit to leave MySQL.


📌 3️⃣ Configure PHP Database Connection
🔹 Create config.php in your project folder:


sudo nano /var/www/html/shop-inventory/config.php

<?php
$host = 'localhost';
$user = 'root';
$pass = 'your-mysql-password';
$dbname = 'shop_inventory';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


📌 4️⃣ Move Project Files to Apache Root
🔹 Clone the GitHub repository:

cd /var/www/html
git clone https://github.com/your-username/shop-inventory.git


Set the correct permissions:

sudo chown -R apache:apache /var/www/html/shop-inventory
sudo chmod -R 755 /var/www/html/shop-inventory


 Restart Apache:

 sudo systemctl restart httpd


http://your-server-ip/shop-inventory/



🎯 Summary of Steps
✅ Set up Apache, PHP, and MySQL on AWS
✅ Create a MySQL Database and Table
✅ Configure PHP Database Connection
✅ Move Files to Apache Root & Set Permissions
✅ Restart Apache & Test Project







