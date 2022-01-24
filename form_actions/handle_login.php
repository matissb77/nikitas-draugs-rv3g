<?php
if (isset($_POST['register'])) {
    $plan_id = 0;
    $firstname = str_replace(' ', '', $_POST['firstname']);
    $lastname = str_replace(' ', '', $_POST['lastname']);
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    require_once '../db_inserts/insert_user.php';
    require_once '../db_selects/select_user_id.php';
    $id = $result[0]['id'];
    // echo $plan_id, $firstname, $lastname, $phone, $email, $password, $id;
    require_once '../db_inserts/insert_login.php';
    header("Location: http://vselivjorstovs.progpamati.lv?id=$id");
} else {
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    require_once '../db_selects/select_login.php';
    $id = $result1[0]['id'];
    $dbPsw = $result[0]['passw'];

    if (strcmp($password, $dbPsw) == 0) {
        header("Location: http://vselivjorstovs.progpamati.lv?id=$id");
        // echo "passwords match";
    } else {
        // echo "passwords do not match";
        header("Location: http://vselivjorstovs.progpamati.lv?id=0");
    }
}