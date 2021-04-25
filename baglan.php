<?php
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_HOST', 'localhost');
define('MYSQL_DB', 'swap');

try {

    $db = new PDO(
        "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DB . ";charset=utf8mb4",
        MYSQL_USER,
        MYSQL_PASSWORD
    );
    //echo "veritabanı bağlantısı başarılı";

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>