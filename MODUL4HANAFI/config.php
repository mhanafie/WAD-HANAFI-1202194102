<?php

$loca = "localhost";
$ser = "root";
$pw = "";
$DBKU = "wad_modul4";
$Koneksi = mysqli_connect($loca, $ser, $pw, $DBKU);

class database
{
    var $hst = "localhost";
    var $USR = "root";
    var $PASS = "";
    var $SBKU = "wad_modul4";
    var $ONE;

    function __construct()
    {
        $this->ONE = mysqli_connect($this->hst, $this->USR, $this->PASS, $this->SBKU);
    }

    function register($nama, $email, $no_hp, $password)
    {
        $insert = mysqli_query($this->ONE, "INSERT INTO users VALUES ('','$nama','$email','$password','$no_hp')");
        return $insert;
    }

    function login($email, $password, $rem)
    {
        $Quer = mysqli_query($this->ONE, "SELECT * FROM users WHERE email='$email'");
        $data_user = $Quer->fetch_array();
        if ($data_user['password']) {
            if ($rem) {
                setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
                setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['email'] = $email;
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function relogin($email)
    {
        $Quer = mysqli_query($this->ONE, "SELECT * FROM user WHERE email='$email'");
        $data_user = $Quer->fetch_array();
        $_SESSION['email'] = $email;
        $_SESSION['nama'] = $data_user['nama'];
        $_SESSION['is_login'] = TRUE;
    }
}

?>