
        <?php
        include_once'../inc/entete.inc';
        
        session_start();
        if ($_SESSION["autoriser"] != "oui") {  //Permet d'autoriser que les connecter à la session d'accèder à cette page sinon rediriger vers le formulaire de co
            header("location:formConnexion.php");
            exit();
        }
        ?>
        <?php
        if (isset($_SESSION['role'])) {
            echo'<p class="login-status"> You are logged in! </p>';
        } else {
            echo'<p class="login-status"> You are logged out! </p>';
        }
        ?>
        <form name="ajout" id ="ajout" method="post" action="">
            <div id="titreForm">Ajout bien :</div>
            <p>
                <label for="descrip" title="Veuillez saisir votre email ">Description :</label>
                <input type="text" name="descrip" id="descrip" title="Veuillez saisir la description du bien " />
            </p>
            <p>
                <label for="prix" title="Veuillez saisir le prix " class="oblig">Prix:</label>
                <input type="text" name="prix" id="prix" title="Veuillez saisir le prix " />
            </p>
            <p>
                <label for="surface" title="Veuillez saisir la surface " class="oblig">Surface:</label>
                <input type="text" name="surface" id="surface" title="Veuillez saisir la surface " />
            </p>
            <p>
                <label for="type" title="Veuillez saisir le type " class="oblig">Type:</label>
                <input type="password" name="type" id="type" title="Veuillez saisir le type " />
            </p>
            <p>
                <label for="ville" title="Veuillez saisir la ville " class="oblig">Ville:</label>
                <input type="text" name="ville" id="ville" title="Veuillez saisir la ville " />
            </p>
            <p>
                <label for="piece" title="Veuillez saisir le nombre de pièces " class="oblig">nbPiece:</label>
                <input type="text" name="piece" id="piece" title="Veuillez saisir le nombre de pièces " />
            </p>

            <div id="piedForm">
                <input type="submit" name="valid" id="valid" value="Ajouter" />
            </div>
        </form>

        <form name="delete" id ="delete" method="post" action="">
            <div id="titreForm">Supprimer bien</div>
            <p>
                <label for="id" title="Veuillez saisir votre email " class="oblig">ID du bien :</label>
                <input type="text" name="id" id="id" title="Veuillez saisir l'id du bien " />
            </p>

            <div id="piedForm">
                <input type="submit" name="valid" id="valid" value="Supprimer" />
            </div>
        </form>


        <form name="modif" id ="modif" method="post" action="">
            <div id="titreForm">Modifier bien :</div>
            <p>
                <label for="descrip" title="Veuillez saisir votre email ">Description :</label>
                <input type="text" name="descrip" id="descrip" title="Veuillez saisir la description du bien " />
            </p>
            <p>
                <label for="prix" title="Veuillez saisir le prix " class="oblig">Prix:</label>
                <input type="text" name="prix" id="prix" title="Veuillez saisir le prix " />
            </p>
            <p>
                <label for="surface" title="Veuillez saisir la surface " class="oblig">Surface:</label>
                <input type="text" name="surface" id="surface" title="Veuillez saisir la surface " />
            </p>
            <p>
                <label for="type" title="Veuillez saisir le type " class="oblig">Type:</label>
                <input type="password" name="type" id="type" title="Veuillez saisir le type " />
            </p>
            <p>
                <label for="ville" title="Veuillez saisir la ville " class="oblig">Ville:</label>
                <input type="text" name="ville" id="ville" title="Veuillez saisir la ville " />
            </p>
            <p>
                <label for="piece" title="Veuillez saisir le nombre de pièces " class="oblig">nbPiece:</label>
                <input type="text" name="piece" id="piece" title="Veuillez saisir le nombre de pièces " />
            </p>

            <div id="piedForm">
                <input type="submit" name="valid" id="valid" value="Mettre a jour" />
            </div>
        </form>


    </body>
</html>


