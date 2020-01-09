<?php
include "session.php";
include_once '../../src/controller/navcontroller.php';

$controller = new NavController();

include_once '../../src/controller/viewCart.php';
$buttonController = new ButtonController();
$buttonController->ShowButton();
echo "</nav>";



?>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
    <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
        <a href="#" class="w3-bar-item w3-button">HOME</a>
        <a href="../../src/view/drinksmenu.php" class="w3-bar-item w3-button">Menu</a>
        <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
        <a href="../../src/view/cartpage.php" class="w3-bar-item w3-button">Your Cart: <?php $var = $controller->getCartController(); $var?></a>
    </div>
</div>
