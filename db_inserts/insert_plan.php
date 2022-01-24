<?php
require_once '../db_connection.php'; //Iekļaujam savienojuma failu

try {

    // $sql = "INSERT INTO plans(category_id, title, price, duration, euro_sign, descr, picture_name) VALUES (1, 'BEZLIMITA ZVANI', 6.50, '30 dienas', '€', '∞ MIN | ∞ SMS', 'unlimited_calls.jpg')";
    // $sql = "INSERT INTO plans(category_id, title, price, duration, euro_sign, descr, picture_name) VALUES (1, 'BEZLIMITA INTERNETS', 2.49, '7 dienas', '€', '∞ MIN | ∞ SMS', 'unlimited_internet.jpg')";
    // $sql = "INSERT INTO plans(category_id, title, price, duration, euro_sign, descr, picture_name) VALUES (1, 'BEZLIMITS', 6.50, '7 dienas', '€', '∞ MIN | ∞ SMS | ∞ MB', 'unlimited_all.jpg')";
    // $sql = "INSERT INTO plans(category_id, title, price, duration, euro_sign, descr, picture_name, extra_info1, extra_info2, extra_info3) VALUES (3, 'BEZLIMITS SKOLĒNIEM', 9.99, '€/mēn', '', 'Nebeidzamas iespējas, kas noved pie nebeidzamiem rezultātiem', 'children_school.jpg', '∞ MIN UZ LIELĀKAJIEM TĪKLIEM LATVIJĀ', '∞ SMS UZ LIELĀKAJIEM TĪKLIEM LATVIJĀ', '∞ MB UZ LIELĀKAJIEM TĪKLIEM LATVIJĀ')";
    // $sql = "INSERT INTO plans(category_id, title, price, duration, euro_sign, descr, picture_name, extra_info1, extra_info2, extra_info3) VALUES (3, 'JUNIORI', 4.99, '€/mēn', '', '150 min zvaniem, bezlimita SMS un 1GB interneta', 'juniors.jpg', '150 MIN UZ LIELĀKAJIEM TĪKLIEM LATVIJĀ', '∞ SMS UZ LIELĀKAJIEM TĪKLIEM LATVIJĀ', '1 GB UZ LIELĀKAJIEM TĪKLIEM LATVIJĀ')";
    // $sql = "INSERT INTO plans(category_id, title, price, duration, euro_sign, descr, picture_name, extra_info1, extra_info2, extra_info3) VALUES (3, 'BEZLIMITS JAUNIEŠIEM', 15.99, '€/mēn', '', 'Bezlimits gan telefonā, gan internetā', 'teenagers.jpg', '∞ MIN UZ LIELĀKAJIEM TĪKLIEM LATVIJĀ', '∞ SMS UZ LIELĀKAJIEM TĪKLIEM LATVIJĀ', '∞ MB UZ LIELĀKAJIEM TĪKLIEM LATVIJĀ')";
    // $sql = "INSERT INTO plans(category_id, title, price, duration, euro_sign, descr, picture_name, extra_info1, extra_info2, extra_info3) VALUES (2, 'S', 2.99, '30 dienas', '€', 'INTERNETS TELEFONĀ DATU PAKA S 500 MB INTERNETS', 'internet-M.jpg', '500 MB internets visā Latvijā', '', '')";
    // $sql = "INSERT INTO plans(category_id, title, price, duration, euro_sign, descr, picture_name, extra_info1, extra_info2, extra_info3) VALUES (2, 'M', 3.99, '30 dienas', '€', 'INTERNETS TELEFONĀ DATU PAKA M 1 GB INTERNETS', 'internet-S.jpg', '1 GB internets visā Latvijā', '', '')";
    $sql = "INSERT INTO plans(category_id, title, price, duration, euro_sign, descr, picture_name, extra_info1, extra_info2, extra_info3) VALUES (2, 'L', 5.99, '30 dienas', '€', 'INTERNETS TELEFONĀ DATU PAKA L 2 GB INTERNETS', 'internet-L.jpg', '2 GB internets visā Latvijā', '', '')";
    $pdo->exec($sql);
    // echo "Ieraksts izveidots!";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}