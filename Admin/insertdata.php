<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- This is a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2> ADD USER </h2>
            <hr>
            <form action="" method="post">
                <div class="form-group">
                    <label for=""> User Name </label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                </div>
                <div class="form-group">
                    <label for=""> Email </label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Your Email" required>
                </div>
                <div class="form-group">
                    <label for=""> Mobile Number </label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter Your Mobile Number" required>
                </div>

                <button type="submit" name="insert" class="btn btn-primary"> Save User </button>
                <a href="index.php" class="btn btn-danger"> Cancel </a>

            </form>
        </div>
    </div>
</body>
</html>

<?php 
    $conn = mysqli_connect("localhost:3606", "root", "");
    $db = mysqli_select_db($conn, 'evisa');

    if(isset($_POST['insert']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $query = "INSERT INTO users('name','email','phone') VALUES ('$name','$email','$phone')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) 
        {
            echo '<script> alert("User Successfully Saved"); </script>';
        }
        else
        {
            echo '<script> alert("Error Occured"); </script>';
        }
    }

?>
