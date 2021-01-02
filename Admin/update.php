<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="Images/fevicon.png">
    <title>E-VISA PORTAL</title>

    <!-- This is a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php 
    $conn = mysqli_connect("localhost:3606", "root", "");
    $db = mysqli_select_db($conn, 'evisa');
    
    $id = $_POST['id'];

    $query = "SELECT * FROM users WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        while($row = mysqli_fetch_array($query_run)) 
        {
            ?>
                <div class="container">
                    <div class="jumbotron">
                        <h2> Update Data </h2>
                        <hr>

                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <div class="form-group">
                    <label for=""> User Name </label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" placeholder="Enter Your Name" required>
                </div>
                <div class="form-group">
                    <label for=""> Email </label>
                    <input type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>" placeholder="Enter Your Email" required>
                </div>
                <div class="form-group">
                    <label for=""> Mobile Number </label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $row['phone'] ?>" placeholder="Enter Your Mobile Number" required>
                </div>
                <div class="form-group">
                    <label for=""> E-Visa Status </label>
                    <input type="text" name="evisa_status" class="form-control" value="<?php echo $row['evisa_status'] ?>" placeholder="E-Visa Status" required>
                </div>

                <button type="submit" name="update" class="btn btn-primary"> Update Data </button>
                <a href="index.php" class="btn btn-danger"> Cancel </a>

            </form>


            <?php 
            if (isset($_POST['update'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $evisa_status = $_POST['evisa_status'];

                $query = "UPDATE users SET name='$name', email='$email', phone='$phone', evisa_status='$evisa_status' WHERE id='$id' ";
                $query_run = mysqli_query($conn, $query);

                if ($query_run) 
                {
                    echo '<script> alert("Data Updated"); </script>';
                    header("location:users-table.php");
                }
                else
                {
                    echo '<script> alert("Data Not Updated"); </script>';
                }
            }
            ?>

                    </div>

                </div>
            <?php 

        }
    }
        else {
            echo '<script> alert("No Record Found"); </script>';
        }
?>
</body>
</html>