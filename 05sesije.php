<?php 
session_start();
if (isset($_SESSION['broj_poseta'])) {
    $_SESSION['broj_poseta']++;
} else {
$_SESSION['broj_poseta'] = 1;
}
echo $_SESSION['broj_poseta'];
?>