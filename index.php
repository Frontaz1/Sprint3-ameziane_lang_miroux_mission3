<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>

    <head>
        <title>Agence OLJU</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="initial-scale=1, width=device-width" />
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

            <?php
            include_once 'inc/entete.inc';
            session_start();
            ?>

        <section class="banner">

            <h2>Chez OLJU</h2>
            <h3> Trouver le logement de vos rêves en toute simplicité !</h3>
        </section>

        <h2 class="titreAgence">Notre Agence</h2>
        <section class="presentation">
            <div class="pres_agence">
                <p>Créée en 2001, OLJU compte plus de 400 agences et 890 collaborateurs partout en France ! Elle propose plus de 28 000 biens pour vous qui êtes à la recherche du bien dont vous rêvez. </p>
                <p><strong> 21 ans d'expertise ...</strong></p>
                <p>Dans chacune de nos agences, nous vous apportons proximité et expertise pour vous aider dans vos projets.
                    Nous vous accompagnons dans votre démarche immobilière, un accompagnement sur-mesure pour vous assurer conseils durant vos projets.</p>
                <p><strong> Des choix variés ! </strong></p>
                <p> OlJU vous propose un vaste choix de biens, selon vos goûts et votre budget. Des maisons inviduelles, en passant par des immeubles ou bien même des terrains nus, trouvez ce qui vous correspond le mieux. </p>
            </div>
            <img src="img/img/agence.jpg" alt="photoagence" style="max-width:100%;height:auto;">
        </section>

        <h2 class="titreAnnonce">Nos dernières annonces</h2>
        <div class="titleAnnonce">
            <div class="annonce">
                <a href="maison/maison1.html">
                    <img src="img/img/annonce1.jpg" title="maison m²" alt="maison1">
                </a>
                <p>Maison - <strong>259 000 €</strong><br/>
                    6 pièces - 200 m² - Parigné-le-Pôlin 72330</p>
            </div>
            <div class="annonce">
                <a href="appart/appart2.html">
                    <img src="img/img/annonce2.jpg" title="maison m²" alt="appartement2">
                </a>
                <p>Appartement T5 - <strong>618 000€</strong><br/>
                    5 Pièces · 145 m² · Marseille 13008</p>
            </div>
            <div class="annonce">

                <a href="maison/maison5.html">
                    <img src="img/img/annonce3.jpg" title="maison m²" alt="maison5">
                </a>
                <p>Maison - <strong>299 000 €</strong><br/>
                    4 pièces - 150 m² - Roubaix 59100</p>
            </div>
        </div>

        <?php
        include_once'inc/piedDePage.inc';
        ?>
    </body>

</html>
