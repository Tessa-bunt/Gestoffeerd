<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/standardCSS.css">
    <link rel="stylesheet" href="../style/contact.css">
</head>

<body>
    <?php include '../static/nav.php' ?>

    <div class="contact">
        <div class="contactInfo">
            <h1>Neem contact met ons op</h1>
            <p>Telefoon: (0224) 850 655</p>
            <p>Email: info@gestoffeerd.nl</p>
        </div>

        <div class="contactFormulier">
            <h1>Of vul het Contact Formulier in</h1>
            <form class="contactForm">
                <div class="name">
                    <input class="inputField" type="text" placeholder="Voornaam*">
                    <input class="inputField" type="text" placeholder="Achternaam*">
                </div>
                <div class="otherInfo">
                    <input class="inputField" type="text" placeholder="E-mail*">
                    <input class="inputField" type="text" placeholder="Telefoonnummer*">
                    <input class="inputFieldText" type="text" placeholder="Bericht">
                </div>

                <button class="Abutton" type="submit">Verstuur</button>
            </form>

        </div>

    </div>


    <?php include '../static/footer.php' ?>
</body>

</html>