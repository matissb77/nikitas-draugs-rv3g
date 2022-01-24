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
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/plans.css" />
    <title>Tarifi</title>
</head>

<body>
    <main>
        <?php include 'navigation.php'; ?>
        <? require_once 'db_selects/select_plans.php'; ?>
        <section id="main-image">
            <img src="photos/cell_tower.jpg" alt="" />
            <div>
                <a class="plan" id="pre-pay-plan" href="#">PRIEKŠAPMAKSA</a>
                <a class="plan" id="post-pay-plan" href="#">PĒCAPMAKSA</a>
                <a class="plan" id="internet-plan" href="#">MOBĪLAIS INTERNETS</a>
            </div>
        </section>
        <section id="tarifi">
            <? for ($i = 0; $i < count($result); $i++) : ?>
            <div style="margin-bottom: 10rem" class="tariff <?= $result[$i]['category']; ?>">
                <img src="photos/<?= $result[$i]['picture_name']; ?>" alt="" />
                <div id="plan<?= $result[$i]['id']; ?>" class="info">
                    <h1><?= $result[$i]['title']; ?></h1>
                    <p><?= $result[$i]['descr']; ?></p>
                    <div style="
                                display: flex;
                                width: 100%;
                                justify-content: space-between;
                            ">
                        <p>
                            <span
                                style="font-weight: 600; font-size: 2.3rem"><?= $result[$i]['price']; ?><?= $result[$i]['euro_sign']; ?>
                            </span>
                            <span style="font-size: 1rem"><?= $result[$i]['duration']; ?></span>
                        </p>
                        <img class="arrow" src="photos/arrow.png" alt="" style="
                                    cursor: pointer;
                                    width: 10%;
                                    height: 5%;
                                    margin-top: 0.3rem;
                                " />
                    </div>
                </div>
            </div>
            <? endfor; ?>
        </section>
        <div id="single-plan" class="hidden"></div>
    </main>
</body>

</html>

<script>
const planArr = <?php echo json_encode($result); ?>;
const userId = <?= $_GET['id']; ?>;
console.log(planArr);
let activeCategory = "pre-pay-plan";
const page = document.getElementById("plans-page");
const prePayCategory = document.getElementById("pre-pay-plan");
page.classList.add("active-page");
prePayCategory.classList.add("active-page");
changePlans();

document.querySelectorAll(".plan").forEach((category) => {
    category.addEventListener("click", (event) => {
        event.preventDefault();
        document
            .querySelectorAll(".plan")
            .forEach((el) => el.classList.remove("active-page"));
        event.target.classList.add("active-page");

        activeCategory = category.id
        changePlans();

        document.getElementById("tarifi").classList.remove("hidden");
        document.getElementById("single-plan").classList.add("hidden");
    });
});


function changePlans() {
    document.querySelectorAll(".tariff").forEach((plan) => {
        if (plan.classList[1] != activeCategory) {
            plan.classList.add("hidden");
        } else {
            plan.classList.remove("hidden");
        }
    });
}



document.querySelectorAll(".arrow").forEach((arrow) => {
    arrow.addEventListener("click", (event) => {
        const planId = event.path[2].id.substr(4);
        const planObj = planArr.filter(plan => plan.id == planId.toString());

        console.log(planObj);

        document.getElementById("tarifi").classList.add("hidden");
        showSinglePlan(planObj[0]);
    });
});

const showSinglePlan = (planObj) => {
    const {
        id,
        title,
        price,
        euro_sign: euroSign,
        duration,
        extra_info1: extraInfo1,
        extra_info2: extraInfo2,
        extra_info3: extraInfo3,
        picture_name: picture
    } = planObj;
    console.log(title);
    document.getElementById("single-plan").innerHTML = "";
    document.getElementById("single-plan").innerHTML =
        '<div id="single-plan"><img src="photos/' + picture +
        '" alt="" /><div id="single-plan-info"><div style="margin-bottom: 3rem"><h1>' +
        title +
        '</h1><p><span style="font-weight: 600; font-size: 2.3rem">' + price + '' + euroSign +
        '</span><span style="font-size: 1rem">' + duration +
        '</span></p></div><div style="display: flex;align-items: center;margin-bottom: 3rem"><div style="text-align: center"><p>' +
        extraInfo1 +
        '</p><p>' + extraInfo2 +
        '</p><p class="no-border">' + extraInfo3 +
        '</p></div><textarea style="display:none;"name="" id="" cols="30" rows="5"></textarea></div><form style="display:flex; width:100%;"action="form_actions/handle_plans.php" method="POST"><input style="display: none;"name="userId" value="' +
        userId +
        '"><input style="display:none;"name="planId" value="' + id +
        '"><button type="submit">PIESLĒGT TARIFU PLĀNU</button></form></div></div>';
    document.getElementById("single-plan").classList.remove("hidden");
};
</script>