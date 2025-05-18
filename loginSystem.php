<?php

    require_once "dbLogin.php";

    // nowa obsługa błędów (PHP 8, stare z connecr_error generują błąd HTTP 500)

    try {
        $conn = new mysqli($host, $db_user, $db_pass, $db_name);
        $conn->set_charset("utf8mb5");

        $login = $_POST['login'];
        $pass = $_POST['pass'];

        $sql="SELECT * FROM users WHERE user='$login' AND pass='$pass'";

        $result = 

        $conn->close();
    } 
    catch (mysqli_sql_exception $e) {
        echo "Ops, Error: " . $e->getCode() /* " " . $e->getMessage() */; // bez "wyciszenia błędu" --> @
    }


?>