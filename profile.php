<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/navigation.css" />
    <link rel="stylesheet" href="css/profile.css" />
    <title>Profils</title>
</head>

<body>
    <img class="front" src="photos/cell-tower-profile.jpg" alt="" />
    <main>
        <?php include 'navigation.php'; ?>
        <?php
        $id = $_GET['id'];
        require_once 'db_selects/select_user.php'; ?>
        <div class="profile-info">
            <div class="empty"></div>
            <div class="info">
                <div class="regular-info">
                    <h1><?= $result[0]['firstname']; ?> <?= $result[0]['lastname']; ?></h1>
                    <h2><?= $result[0]['email']; ?></h2>
                    <h2><?= $result[0]['phone']; ?></h2>
                </div>

                <? if ($result[0]["plan_id"] != 0) {
                    echo '                 <div class="plan-info">
                    <h1>' . $result[0]["title"] . '
                </h1>
                <p>
                    <span style="
                                    font-weight: 600;
                                    font-size: 2.3rem;
                                    color: #6c6c6c;
                                ">' . $result[0]["price"] . '' . $result[0]["euro_sign"] . '
                </span>
                <span style="font-size: 1rem; color: #6c6c6c">' . $result[0]["duration"] . '</span>
                </p>
                <h3>TARIFS KOPŠ ' . $result[0]["plan_since_date"] . '
                </h3>
            </div>';
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>

<script>
const page = document.getElementById("profile-page");
page.classList.add("active-page");
</script>