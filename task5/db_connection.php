<?php
// db_connection.php
$user = 'u68799'; 
$password = '1485368'; 
try {
    $pdo = new PDO('mysql:host=localhost;dbname=u68799', $user, $password,
        [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    die("<p style='color:red;'>Ошибка при подключении к базе данных: " . $e->getMessage() . "</p>");
}
?>
