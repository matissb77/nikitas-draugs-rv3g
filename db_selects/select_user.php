<?php
require_once 'db_connection.php'; //Iekļaujam savienojuma failu

try {

    /* Atlasām datus no tabulas */
    $sth = $pdo->prepare("SELECT u.*, p.title, p.price, p.duration, p.euro_sign FROM users u LEFT JOIN plans p ON u.plan_id = p.id WHERE u.id = $id ");
    // $sth = $pdo->prepare("SELECT * FROM users");
    $sth->execute();

    /* Iegūstam visus ierakstus ar fetchAll() funkciju */
    // echo "DB tabulas saturs:<br>";
    $result = $sth->fetchAll();
    // print_r($result);
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}