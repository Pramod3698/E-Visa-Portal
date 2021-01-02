<?php

if (isset ($_POST['signup-submit'])) {
    require 'dbh.inc.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['conpassword'];
    $phone = $_POST['phone'];

    if (empty($name) || empty($email) || empty($password) || empty($passwordRepeat) || empty($phone)) {
        header("Location: ../signup.php?error=emptyfields");
        exit();
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        header("Location: ../signup.php?error=invalidemailname");
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

    else if ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordcheck");
        exit();

    }

    else {
        
        $sql = "SELECT name FROM users WHERE name=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $name);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=useralreadyexists");
                exit();
            }
            else {
                $sql = "INSERT INTO users (name, email, password, phone) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }
                else {

                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashedPwd, $phone);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../login.php?signup=success");
                    exit();
                }
            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}

else {
    header("Location: ../signup.php");
    exit();
}