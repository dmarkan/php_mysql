<?php 
session_start();
$_SESSION['broj_poseta'] = 1;
$_SESSION['poslednje_vreme'] = time();
// unset($_SESSION['poslednje_vreme']);
session_destroy();
?>