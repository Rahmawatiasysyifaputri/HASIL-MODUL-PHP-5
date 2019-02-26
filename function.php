<?php
    function do_login($username, $password) {

        //CEK KONDISI JIKA USERNAME DAN PASSWORD SALAH
        if($username != "admin" || $password != "admin") {
            header("location:index.php?error=wrong");
        }

        //CEK KONDISI JIKA USERNAME DAN PASSWORD BENAR
        if($username == "admin" && $_POST["password"] == "admin") {
            $_SESSION["user"] = $username;
            $_SESSION["pass"] = $password;

            header("location:beranda.php");
        }
    }

    function check_login() {
        //CEK KONDISI LOGIN SESSION
        if(!isset($_SESSION["user"])) {
            header("location:index.php");
        }
    }
?>