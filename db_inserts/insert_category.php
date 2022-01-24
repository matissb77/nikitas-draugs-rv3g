<?php
require_once '../db_connection.php'; //Iekļaujam savienojuma failu

try {

    // $sql = "INSERT INTO categories(category) VALUES ('pre-pay-plan')";
    $sql = "INSERT INTO categories(category) VALUES ('post-pay-plan')";
    // $sql = "INSERT INTO categories(category) VALUES ('internet-plan')";

    //Ar exec() izpildām vaicājumu
    $pdo->exec($sql);
    // echo "Ieraksts izveidots!";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}