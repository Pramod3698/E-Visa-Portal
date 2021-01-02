<?php

if (isset ($_POST['applicant-submit'])) {
    require 'dbh.inc.php';

    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $nationality = $_POST['nationality'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];

    if (empty($name) || empty($dob) || empty($gender) || empty($email) || empty($nationality) || empty($country) || empty($state) || empty($city) || empty($mobile)) {
        header("Location: ../fill-application.php?error=emptyfields");
        exit();
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        header("Location: ../fill-application.php?error=invalidemailname");
        exit();
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../fill-application.php?error=invalidemail");
        exit();
    }

    else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        header("Location: ../fill-application.php?error=invalidname");
        exit();
    }

    else {
        
        $sql = "SELECT name FROM applicantdetails WHERE name=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../fill-application.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $name);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../fill-application.php?error=namealreadyexists");
                exit();
            }
            else {
                $sql = "INSERT INTO applicantdetails (name, dob, gender, email, nationality, country, state, city, mobile) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../fill-application.php?error=sqlerror");
                    exit();
                }
                else {

                    mysqli_stmt_bind_param($stmt, "sssssssss", $name, $dob, $gender, $email, $nationality, $country, $state, $city, $mobile);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../fill-application.php?details=saved");
                    exit();
                }
            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}

else {
    header("Location: ../index.php");
    exit();
}