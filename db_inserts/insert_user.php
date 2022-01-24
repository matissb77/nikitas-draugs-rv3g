<?php
require_once '../db_connection.php'; //Iekļaujam savienojuma failu

try {

    $sql = 'INSERT INTO users(plan_id, firstname, lastname, email, phone, plan_since_date) VALUES (' . $plan_id . ', "' . $firstname . '", "' . $lastname . '", "' . $email . '", "' . $phone . '", STR_TO_DATE("April 25 2021", "%M %d %Y"))';

    //Ar exec() izpildām vaicājumu
    $pdo->exec($sql);
    // echo "user izveidots!";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}