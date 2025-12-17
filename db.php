
<?php
$server = getenv("DB_SERVER") ?: "database-1.c7swcswkad0g.ap-northeast-1.rds.amazonaws.com";
$db = getenv("DB_NAME") ?: "electronics";
$user = getenv("DB_USER") ?: "admin";
$pass = getenv("DB_PASS") ?: "Sonali-12398";

try {
    $conn = new PDO(
        "sqlsrv:Server=$server;Database=$db;Encrypt=yes;TrustServerCertificate=yes",
        $user,
        $pass
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Error: " . $e->getMessage());
}
