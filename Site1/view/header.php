<?php


require ('inc/function.php');


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
?>



<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="asset/css/style.css">
    <title>PASTA</title>
</head>
<body>
<header id="masthead">
    <div class="wrap">
        <a href="index.php"><img src="asset/img/logo.png" alt="accueil"></a>
        <nav>
            <ul>
                <li><a href="index.php"><i class="fa-solid fa-house"></i><p>Accueil</p></a></li>
                <li><a href="menu.php"><i class="fa-solid fa-utensils"></i><p>Nos menus</p></a></li>
                <li><a href="history.php"><i class="fa-solid fa-book"></i><p>Notre histoire</p></a></li>
                <?php
                if ($namepage !== 'contact') {
                    echo '<li><a id="myBtn"><i class="fa-regular fa-message"></i><p>Contactez-nous</p></a></li>';
                }
                ?>
                <li><a href="inscription.php"><i class="fa-regular fa-user"></i><p>S'inscrire</p></a></li>
            </ul>
        </nav>
    </div>
    <div class="menuBar">
        <div class="menuBurger" style="position: fixed; z-index: 1">
            <i id="menuBar" class="fa-solid fa-bars" style="font-size: 30px"></i>
            <i id="closeIcon" class="fa-solid fa-times noshow" style="font-size: 34px;color: var(--darkGreen)"></i>
            <a href="index.php"><img src="asset/img/logo.png" alt="accueil"></a>
            <a href="inscription.php"><i class="fa-regular fa-user" style="font-size: 30px;color: var(--darkGreen)"></i></a>
            <ul class="menubarcontent">
                <li><a href="index.php"><p>Accueil</p></a></li>
                <li><a href="menu.php"><p>Nos menus</p></a></li>
                <li><a href="history.php"><p>Notre histoire</p></a></li>
                <?php
                if ($namepage !== 'contact') {
                    echo '<li><a href="contact.php"><p>Contactez-nous</p></a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="wrap4">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="contactblocmain">
                    <div class="contactbloc1">
                        <p>Une question ? Nous sommes là pour vous </p>
                    </div>
                    <div class="contactbloc2">
                        <h1>Nous contacter</h1>
                        <form action="" method="post" id="contactForm">
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
        </div>
    </div>

</header>