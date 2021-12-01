<?php
session_start();
/** PuntoE */
$contE = $_POST['contadorE'];
$_SESSION['contadorE'] = $_SESSION['contadorE'] + $contE;
/** PuntoJ */
$contJ = $_POST['contadorJ'];
$_SESSION['contadorJ'] = $_SESSION['contadorJ'] + $contJ;
?>