<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offerte</title>
    <link rel="stylesheet" href="../style/standardCSS.css">
    <link rel="stylesheet" href="../style/offerte.css">
</head>

<body>
    <?php include '../static/nav.php' ?>

    <div class="offertePage">
        <div class="offerteHero">
            <div class="offerteHeroInner">
                <h1>Offerte aanvragen</h1>
                <p>Vul onderstaand formulier in en wij nemen spoedig contact met u op.</p>
            </div>
        </div>

        <div class="offerteFormSection">
            <form class="offerteForm" action="#" method="post">
                <div class="grid2">
                    <div class="field">
                        <label>Voornaam*</label>
                        <input type="text" name="voornaam" placeholder="Voornaam" required>
                    </div>
                    <div class="field">
                        <label>Achternaam*</label>
                        <input type="text" name="achternaam" placeholder="Achternaam" required>
                    </div>
                </div>

                <div class="grid2">
                    <div class="field">
                        <label>Email*</label>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                        <label>Telefoonnummer*</label>
                        <input type="tel" name="telefoon" placeholder="Telefoonnummer" required>
                    </div>
                </div>

                <div class="grid2">
                    <div class="field">
                        <label>Adres</label>
                        <input type="text" name="adres" placeholder="Adres">
                    </div>
                    <div class="field">
                        <label>Postcode</label>
                        <input type="text" name="postcode" placeholder="Postcode">
                    </div>
                </div>

                <div class="grid2">
                    <div class="field">
                        <label>Stad</label>
                        <input type="text" name="stad" placeholder="Stad">
                    </div>
                    <div class="field">
                        <label>Gewenste datum / tijd</label>
                        <div class="inlineFields">
                            <select name="datum">
                                <option value="">Kies datum</option>
                                <option value="morrow">Morgen</option>
                                <option value="week">Volgende week</option>
                            </select>
                            <select name="tijd">
                                <option value="">Kies tijd</option>
                                <option value="09-12">09:00 - 12:00</option>
                                <option value="12-15">12:00 - 15:00</option>
                                <option value="15-18">15:00 - 18:00</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="checkboxGroup">
                    <p>Welke producten heeft uw interesse in?</p>
                    <div class="checkboxGrid">
                        <label><input type="checkbox" name="product[]" value="vloerverdekking"> Vloer Bekleding</label>
                        <label><input type="checkbox" name="product[]" value="laminaat"> Laminaat</label>
                        <label><input type="checkbox" name="product[]" value="pvc"> PVC Vloeren</label>
                        <label><input type="checkbox" name="product[]" value="houten"> Houten Vloeren</label>
                        <label><input type="checkbox" name="product[]" value="klikpvc"> Klik PVC</label>
                        <label><input type="checkbox" name="product[]" value="parket"> Parket</label>
                        <label><input type="checkbox" name="product[]" value="gordijnen"> Gordijnen</label>
                        <label><input type="checkbox" name="product[]" value="renovatie"> Vloer Renovatie</label>
                        <label><input type="checkbox" name="product[]" value="trap"> Trap Renovatie</label>
                        <label><input type="checkbox" name="product[]" value="raam"> Raam Decoratie</label>
                        <label><input type="checkbox" name="product[]" value="horren"> Horren</label>
                        <label><input type="checkbox" name="product[]" value="matten"> Matten</label>
                    </div>
                </div>

                <div class="field">
                    <label>Bericht</label>
                    <textarea name="bericht" placeholder="Bericht" rows="5"></textarea>
                </div>

                <button class="Abutton" type="submit">Verstuur</button>
            </form>
        </div>
    </div>

    <?php include '../static/footer.php' ?>
</body>

</html>
