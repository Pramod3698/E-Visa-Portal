<?php

if (isset ($_POST['signup-submit'])) {
    require 'dbh.inc.php';

    $name = $_POST['name'];
    $email = $_POST['email'];

    if (empty($name) || empty($email) ) {
        header("Location: ../signup.php?error=emptyfields");
        exit();
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail");
        exit();
    }

    else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        header("Location: ../signup.php?error=invalidname");
        exit();
    }
}