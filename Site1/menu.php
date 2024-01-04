<?php


$namepage = 'menu';



include ('view/header.php');


?>


<div id="menus">
    <div class="wrap4">
        <h1>NOS MENUS</h1>
        <p class="slogan">Un seul mot d'ordre : régalez-vous !</p>
        <div class="menu green">
            <img src="asset/img/menu1.png" alt="patalegumes">
            <div class="menudescription">
                <h4>Nos Patalegumes®</h4>
                <p>Parce l’alliance des pâtes et des légumes offre un super pouvoir </p>
                <a href="" class="btn yellow order12">Commander</a>
            </div>
        </div>
        <div class="menu yellow">
            <div class="menudescription">
                <h4>Le Prestop®</h4>
                <p>Classique, efficace et sûr.</p>
                <a href="" class="btn green order12">Commander</a>
            </div>
            <img src="asset/img/menu2.png" alt="patalegumes">
        </div>
        <div class="menu green">
            <img src="asset/img/menu3.png" alt="pennes">
            <div class="menudescription">
                <h4>Les Pennes Al dente</h4>
                <p>Nos Pennes sont cuisinés avec notre sauce secrète !</p>
                <a href="" class="btn yellow order12">Commander</a>
            </div>
        </div>
        <div class="menu yellow">
            <div class="menudescription">
                <h4>La Montagne®</h4>
                <p>Les pâtes carbonaras sans aucune mesure.</p>
                <a href="" class="btn green order12">Commander</a>
            </div>
            <img src="asset/img/menu4.png" alt="patalegumes">
        </div>
    </div>
</div>
    <div id="orderModal" class="modal">
        <div class="ordermainbloc">
            <img src="asset/img/transport.gif" alt="livraisonpizza">
            <p id="modalreload">votre repas arrive !</p>
        </div>
    </div>
















<?php

include ('view/footer.php');