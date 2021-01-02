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
    <div class="container">
        <div class="jumbotron">
            <h2> Applicant Details </h2>
            <hr>
            
<?php 
    $conn = mysqli_connect("localhost:3606", "root", "");
    $db = mysqli_select_db($conn, 'evisa');

    $query = "SELECT * FROM addressdetails";
    $query_run = mysqli_query($conn, $query);
?>

<table class="table table-bordered" style="background-color:white;">
<thread class="table-dark">
    <tr>
        <th> Address ID </th>
        <th> House No. </th>
        <th> City </th>
        <th> State </th>
        <th> Country </th>
        <th> Pincode </th>
        <th> Mobile </th>
        <th> Email </th>
        <th> Father Name </th>
        <th> Mother Name </th>
    </tr>
</thread>

<?php
    if ($query_run) {
        while($row = mysqli_fetch_array($query_run)) 
        {
            ?>

            <tbody>
                <tr>
                    <th> <?php echo $row['addressid']; ?> </th>
                    <th> <?php echo $row['houseno']; ?> </th>
                    <th> <?php echo $row['city']; ?> </th>
                    <th> <?php echo $row['state']; ?> </th>
                    <th> <?php echo $row['country']; ?> </th>
                    <th> <?php echo $row['pincode']; ?> </th>
                    <th> <?php echo $row['mobile']; ?> </th>
                    <th> <?php echo $row['email']; ?> </th>
                    <th> <?php echo $row['fathername']; ?> </th>
                    <th> <?php echo $row['mothername']; ?> </th>
                </tr>
            </tbody>

            <?php
        }
    }
    else 
    {
        echo "No Record Found";
    }
?>
</table>

<div class="row">
    <a href="tables.php" class="btn btn-primary" style= "margin-left: 50%;" margin-top: 50%;> Back </a>
</div>

        </div>
    </div>
</body>
</html>