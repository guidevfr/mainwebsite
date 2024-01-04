<?php


require ('inc/function.php');

$namepage = 'contact';


$errors = array();
if (!empty($_POST['submitedcontact'])) {
    $name = xxsCleanPost('name');
    $surname = xxsCleanPost('surname');
    $email = xxsCleanPost('email');
    $message = xxsCleanPost('message');

    $errors = validText($errors,'name', $name,3,50);
    $errors = validText($errors,'surname', $surname,3,50);
    $errors = validEmail($errors,$email,'email');
    $errors = validText($errors,'message', $message,3,50);


}







include ('view/header.php');

?>



        <div class="wrap4">
                <div class="contactblocmain">
                    <div class="contactbloc1">
                        <p>Une question ? Nous sommes là pour vous </p>
                    </div>
                    <div class="contactbloc2">
                        <h1>Nous contacter</h1>
                        <form action="" method="post">
                            <input type="text" name="name" placeholder="Nom..." value="<?php getPostValue('name'); ?>">
                            <span class="error"><?php viewError($errors,'name'); ?></span>
                            <input type="text" name="surname" placeholder="Prénom..." value="<?php getPostValue('surname'); ?>">
                            <span class="error"><?php viewError($errors,'surname'); ?></span>
                            <input type="email" name="email" placeholder="Email..." value="<?php getPostValue('email'); ?>">
                            <span class="error"><?php viewError($errors,'email'); ?></span>
                            <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message..."><?php getPostValue('message'); ?></textarea>
                            <span class="error"><?php viewError($errors,'message'); ?></span>
                            <input type="submit" name="submitedcontact" value="Envoyer">
                        </form>
                    </div>
                </div>
        </div>


<?php

include ('view/footer.php');