<?php
$dsn = 'mysql:host=localhost;dbname=blog; charset=utf8mb4';
$user = 'mati';
$pass ='mariadb';
try {
    $pdo = new PDO($dsn, $user, $pass, array(

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => false
        )
    );
}catch (PDOException $e) {
    print "Erreur de connexion :" . $e->getMessage();
}
