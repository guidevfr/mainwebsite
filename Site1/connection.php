<?php

$namepage = 'connection';




require ('inc/function.php');






include ('view/header.php');
$errors = array();
if (!empty($_POST['submited'])) {
    $email = xxsCleanPost('email');
    $password =xxsCleanPost('pwd');
}
?>



    <div id="connexion">
        <div class="wrap4">
            <div class="connexionmainbloc">
                <div class="connectionbloc1">
                    <h1>Connectez-vous !</h1>
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Email..." value="<?php getPostValue('email'); ?>">
                        <input type="password" name="pwd" placeholder="Votre mot de passe...">
                        <input type="submit" name="submited" value="Se connecter">
                    </form>
                </div>
                <div class="connectionbloc2">
                    <p>Profitez de vos avantages en vous connectant </p>
                </div>
            </div>
        </div>
    </div>





<?php

include ('view/footer.php');