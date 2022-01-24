<?php
require_once 'db_connection.php';

try {
    $sql = "UPDATE users
    SET plan_id=$planId
    WHERE id = $userId";
    $pdo->exec($sql);
    // echo "Viss sagaja";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}