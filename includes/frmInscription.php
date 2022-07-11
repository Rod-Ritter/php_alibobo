<!-- <form action="index.php?page=inscription" method="post">
    <div class="wrap">
        <div>
            <input type="text" id="nom" name="nom" value="<?= $nom ?>" />
            <label for="nom">Nom :</label>
        </div>
        <div>
            <input type="text" id="prenom" name="prenom" value="<?= $prenom ?>" />
            <label for="prenom">Prénom :</label>
        </div>
        <div>
            <input type="text" id="email" name="email" value="<?= $email ?>" />
            <label for="email">E-mail :</label>
        </div>
        <div>
            <input type="password" id="mdp1" name="mdp1" />
            <label for="mdp1">Mot de passe :</label>
        </div>
        <div>
            <input type="password" id="mdp2" name="mdp2" />
            <label for="mdp2">Vérification mot de passe :</label>
        </div>
        <div>
            <input type="submit" value="Envoyer" />
            <input type="reset" value="Effacer" />
        </div>
        <input type="hidden" name="frmInscription" />
    </div>

    

</form> -->

<main>
    <div class="container">
        <div class="login-box">
            <h2>Inscription</h2>
            <form>
                <div class="user-box">
                    <input type="text" id="nom" name="nom" value="<?= $nom ?>" />
                    <label for="nom">Nom :</label>
                </div>
                <div class="user-box">
                    <input type="text" id="prenom" name="prenom" value="<?= $prenom ?>" />
                    <label for="prenom">Prénom :</label>
                </div>
                <div class="user-box">
                    <input type="text" id="email" name="email" value="<?= $email ?>" />
                    <label for="email">E-mail :</label>
                </div>
                <div class="user-box">
                    <input type="password" id="mdp1" name="mdp1" />
                    <label for="mdp1">Mot de passe :</label>
                </div>
                <div class="user-box">
                    <input type="password" id="mdp2" name="mdp2" />
                    <label for="mdp2">Vérification mot de passe :</label>
                </div>
                <div>
                    <!-- <a href="#"> -->
                    <!-- <span></span>
                    <span></span>
                    <span></span>
                    <span></span> -->
                    <!-- Envoyer -->
                    <div class="submit-reset">
                        <input class="submit" type="submit" value="Envoyer" />
                        <input class="reset" type="reset" value="Effacer" />
                    </div>
                </div>
                <input type="hidden" name="frmInscription" />
            </form>
        </div>
    </div>
</main>