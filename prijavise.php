<?php 
if (isset($_POST['username']) && isset($_POST['password'])) {
    // echo $_POST['username'] . ' ' . $_POST['password'];
    $korisnici = [
        'pera' => 'asdf',
        'jova' => 'kkkk',
        'djole' => 'efgh',
        'mika' => 'kkkkk',
    ];
    foreach ($korisnici as $key => $value) {
        if ($key==$_POST['username'] && $value==$_POST['password']) {
            echo 'Uspesno ste se prijavili';
            die();
        }
    }
    // echo 'Pogresno korisnicko ime/lozinka.';
    header('Location: 01forme.php?login=false');
}