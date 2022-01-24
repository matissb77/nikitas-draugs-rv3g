<?php
require_once 'db_connection.php'; //Iekļaujam savienojuma failu

try {

    /* Atlasām datus no tabulas */
    $sth = $pdo->prepare("SELECT * FROM extra_wishes");
    $sth->execute();

    /* Iegūstam visus ierakstus ar fetchAll() funkciju */
    // echo "DB tabulas saturs:<br>";
    $result = $sth->fetchAll();
    // print_r($result);
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}