<?php 

define("CLIENT_ID","ATlvyN-lGwsl42aEVwRzH70nIdLtYUFl3EXvKJW7kzl6DUr2h2qPTuvjhlYQEc38ndbCVs2JT8332sRE");
define("CURRENCY","MXN");
define("KEY_TOKEN","W0LPMxcuZoCuh7c");
define("MONEDA","$");

session_start();

$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']);
}

?>