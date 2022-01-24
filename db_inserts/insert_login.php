<?php
require_once '../db_connection.php'; //Iekļaujam savienojuma failu

try {

    $sql = "INSERT INTO logins(person_id, passw) VALUES (" . $id . ", '" . $password . "')";

    //Ar exec() izpildām vaicājumu
    $pdo->exec($sql);
    // echo "logins izveidots!";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}