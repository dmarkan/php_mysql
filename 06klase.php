<?php 
class Korisnik {
    private $username;
    private $password;
    private $email;

    public function __construct($u, $p, $e) {
        $this->username = $u;
        $this->password = $p;
        $this->email = $e;
    }

    public function __toString() {
        return $this->username . '' . $this->password;
    }

    public function __get($value) {
        return $this->{$value};
    }

    public function __set($name, $value) {
        $this->{$name} = $value;
    }

    public function prikazi() {
        echo 'Ovo je prikaz';
    }

    public static function proveri($u, $p) {
        $korisnici = [
            'pera' => 'asdf',
            'jova' => 'kkk',
            'mika' => 'aaa',
        ];

        foreach ($korisnici as $key => $val) {
            if ($key == $u && $p == $val) {
                return true;
            }
        }
        return false;
    }
}

// echo Korisnik::proveri('jova', 'kkdk'); // 1 ili nista
$korisnik = new Korisnik('jova', 'kkkk', 'jova.jova@gmail.com');
// $korisnik->username = 'jova';
// $korisnik->password = 'kkkk';
echo $korisnik->username;
$korisnik->username= 'pera';
echo $korisnik->username;
$korisnik->prikazi();

// echo Korisnik::proveri($korisnik->username, $korisnik->password);
// echo $korisnik;
?>