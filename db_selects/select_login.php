<?php
require_once 'db_connection.php'; //Iekļaujam savienojuma failu

try {

    /* Atlasām datus no tabulas */
    $sth1 = $pdo->prepare("SELECT id FROM users WHERE phone = '" . $phone . "'");
    $sth1->execute();
    $result1 = $sth1->fetchAll();
    $ID = $result1[0]['id'];
    $sth = $pdo->prepare("SELECT passw  FROM logins where person_id = " . $ID . "");
    $sth->execute();

    /* Iegūstam visus ierakstus ar fetchAll() funkciju */
    // echo "DB tabulas saturs:<br>";
    $result = $sth->fetchAll();
    // print_r($result);
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}