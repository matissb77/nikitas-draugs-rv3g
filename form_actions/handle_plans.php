<?php
$userId = $_POST['userId'];
$planId = $_POST['planId'];
require_once '../db_update/update_user_plan.php';

header("Location: http://vselivjorstovs.progpamati.lv/profile.php?id=$userId");