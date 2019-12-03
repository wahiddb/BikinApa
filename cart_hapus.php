<?php
    session_start();
    $id_produk = $_GET["id"];
    unset ($_SESSION["cart"][$id_produk]);

    header("location:cart.php");
    ?>