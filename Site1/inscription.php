<?php



$namepage = 'inscription';



require ('inc/function.php');



$errors = array();
if (!empty($_POST['submited'])) {
    $name = xxsCleanPost('name');
    $surname = xxsCleanPost('surname');
    $email = xxsCleanPost('email');
    $password = xxsCleanPost('pwd1');
    $password2 = xxsCleanPost('pwd2');

    $errors = validText($errors,'name', $name,3,50);
    $errors = validText($errors,'surname', $surname,3,50);
    $errors = validEmail($errors,$email,'email');

    if(!empty($password)&& !empty($password2)){
        if($password!=$password2){
            $errors['password']='Vos mots de passe sont différents';
        }elseif (mb_strlen($password) < 6){
            $errors['password']='Veuillez renseigner un mot de passe plus long de plus de 6 caractères ';
        }
    }else{
        $errors['password']= 'Veuillez renseigner les mots de passe';
    }


}

include ('view/header.php');
?>


<div id="inscription">
    <div class="wrap4">
        <div class="inscriptionmainbloc">
            <div class="inscriptionbloc1">
                <p>Envie de faire partir de l’aventure et profitez de vos avantages ? </p>
            </div>
            <div class="inscriptionbloc2">
                <h1>Inscrivez-vous !</h1>
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Nom..." value="<?php getPostValue('name'); ?>">
                    <span class="error"><?php viewError($errors,'name'); ?></span>
                    <input type="text" name="surname" placeholder="Prénom..." value="<?php getPostValue('surname'); ?>">
                    <span class="error"><?php viewError($errors,'surname'); ?></span>
                    <input type="email" name="email" placeholder="Email..." value="<?php getPostValue('email'); ?>">
                    <span class="error"><?php viewError($errors,'email'); ?></span>
                    <input type="password" name="pwd1" placeholder="Votre mot de passe...">
                    <span class="error"><?php viewError($errors,'password'); ?></span>
                    <input type="password" name="pwd2" placeholder="Confirmez votre mdp...">
                    <span class="error"><?php viewError($errors,'password'); ?></span>
                    <p>déjà inscrit ? <a href="connection.php"><u>connectez-vous ici</u></a></p>
                    <input type="submit" name="submited" value="S'incrire">
                </form>
            </div>
        </div>
    </div>
</div>











<?php

include ('view/footer.php');