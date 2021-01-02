<?php 

if (isset ($_POST['login-submit'])) {
    
    require 'dbh.inc.php';

    $uname = $_POST['name'];
    $password = $_POST['password'];

    if (empty($uname) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM admin WHERE name=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();     
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $uname);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['password']);
                if ($pwdCheck == false) {
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['uId'] = $row['id'];
                    $_SESSION['uName'] = $row['name'];
                    
                    header("Location: ../index.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }
            }
            else {
                header("Location: ../index.php?error=nouser");
                exit();  
            }

        }

    }


}
else {
    header("Location: ../index.php");
    exit();
}
