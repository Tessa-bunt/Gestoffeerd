<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/standardCSS.css">
    <link rel="stylesheet" href="../style/home.css">
</head>

<body>
    <?php include '../static/nav.php' ?>

    <div class="header">
        <div class="start">
            <div class="startInfo">
                <img src="../images/logo.png">
                <a class="Abutton" href="offerte.php">Vraag een Offerte aan</a>
            </div>
        </div>
    </div>

    <div class="floors">
        <div class="allFloorOptions">
            <div class="floorOption">
                <a href="">
                    <h2>Houten Vloeren</h2>
                    <p>Bekijk Nu</p>
                </a>
            </div>
            <div class="floorOption">
                <a href="">
                    <h2>Laminaat</h2>
                    <p>Bekijk Nu</p>
                </a>
            </div>
            <div class="floorOption">
                <a href="">
                    <h2>Vloerbedekking</h2>
                    <p>Bekijk Nu</p>
                </a>
            </div>
            <div class="floorOption">
                <a href="">
                    <h2>PVC Vloeren</h2>
                    <p>Bekijk Nu</p>
                </a>
            </div>
        </div>

        <h1>Opzoek naar een Nieuw Vloer?</h1>
        <a class="Abutton" href="">Bekijk Alle Vloeren</a>

    </div>

    <div class="referenties">
        <div class="referentie">
            <h1>Referenties</h1>
            <p>"Friso en Collega bij deze nogmaals onze dank voor jullie geleverde werk en bedankt voor de zeer gezellige dag. Als we nog eens iets nodig hebben weten we jullie te vinden"
                <br>Familie smit
            </p>
            <a href="referenties.php">Bekijk meer referenties -></a>
        </div>

    </div>

    <?php include '../static/offerte.php' ?>

    <?php include '../static/projecten.php' ?>

    <?php include '../static/footer.php' ?>
</body>

</html>