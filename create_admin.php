
<?php
require_once "config.php";

$name = "Administrator";
$email = "admin@bloodbank.com";
$password = "admin123";

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare(
    "INSERT INTO admins (name, email, password) VALUES (?, ?, ?)"
);

$stmt->execute([$name, $email, $hash]);

echo "Admin account created successfully!";
?>
