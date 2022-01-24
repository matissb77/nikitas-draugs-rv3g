<?php
require_once '../db_connection.php'; //Iekļaujam savienojuma failu

try {

    $sql = "INSERT INTO extra_wishes(person_id, plan_id, descr) VALUES (1, 1, 'mazāku cenu')";

    //Ar exec() izpildām vaicājumu
    $pdo->exec($sql);
    // echo "Ieraksts izveidots!";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}