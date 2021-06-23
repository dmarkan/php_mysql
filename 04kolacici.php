<?php 
if (isset($_COOKIE['broj_poseta'])) {
    setcookie('broj_poseta', $_COOKIE['broj_poseta'] + 1, time() + 60*60*24, '/');
} else {
    setcookie('broj_poseta', 1, time() + 60*60*24, '/');
}

echo $_COOKIE['broj_poseta'];