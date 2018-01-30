<?php 
include_once ("cabecalho.php");

logout();
$_SESSION["success"] = "Deslogado com suceso";
header("Location: index.php?logout=true");
die();