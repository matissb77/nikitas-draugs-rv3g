<?php
require_once 'db_connection.php';

try {

    $usersSql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    plan_id INT(6),
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    plan_since_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    $plansSql = "CREATE TABLE plans (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        category_id int(6) NOT NULL,
        title VARCHAR(50) NOT NULL,
        price DECIMAL(3,2),
        duration VARCHAR(20),
        descr VARCHAR(50),
        picture_name VARCHAR(50)
        )";

    $categoriesSql = "CREATE TABLE categories (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        category VARCHAR(30)    
        )";

    $loginsSql = "CREATE TABLE logins (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        person_id INT(6) NOT NULL,
        passw VARCHAR(255)
        )";

    $extra_wishesSql = "CREATE TABLE extra_wishes (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        person_id INT(6) NOT NULL,
        plan_id INT(6) NOT NULL,
        descr VARCHAR(255)
        )";

    $alter = "ALTER TABLE plans
MODIFY COLUMN price DECIMAL(4,2);";

    // $pdo->exec($usersSql);
    // $pdo->exec($plansSql);
    // $pdo->exec($categoriesSql);
    // $pdo->exec($loginsSql);
    // $pdo->exec($extra_wishesSql);
    $pdo->exec($alter);
    echo "Tabulas izveidotas veiksmīgi!";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}