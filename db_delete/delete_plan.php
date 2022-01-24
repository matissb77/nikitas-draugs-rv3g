<?php
require_once '../db_connection.php'; //Iekļaujam savienojuma failu

try {

    /* Atlasām datus no tabulas */
    $sth = $pdo->prepare("DELETE FROM users");
    $sth->execute();

    /* Iegūstam visus ierakstus ar fetchAll() funkciju */
    // echo "Ieraksts dzēsts!<br>";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}