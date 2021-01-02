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
            <h2> Visa Details</h2>
            <hr>
            
<?php 
    $conn = mysqli_connect("localhost:3606", "root", "");
    $db = mysqli_select_db($conn, 'evisa');

    $query = "SELECT * FROM visadetails";
    $query_run = mysqli_query($conn, $query);
?>

<table class="table table-bordered" style="background-color:white;">
<thread class="table-dark">
    <tr>
        <th> Visa ID </th>
        <th> Visa Type </th>
        <th> Country Visit </th>
        <th> Arrival Airport </th>
        <th> Arrival Date </th>
        <th> Visa Duration </th>
        <th> Departure Airport </th>
        <th> Departure Date </th>
    </tr>
</thread>

<?php
    if ($query_run) {
        while($row = mysqli_fetch_array($query_run)) 
        {
            ?>

            <tbody>
                <tr>
                    <th> <?php echo $row['visaid']; ?> </th>
                    <th> <?php echo $row['visatype']; ?> </th>
                    <th> <?php echo $row['countryvisit']; ?> </th>
                    <th> <?php echo $row['airportarrival']; ?> </th>
                    <th> <?php echo $row['arrivaldate']; ?> </th>
                    <th> <?php echo $row['visaduration']; ?> </th>
                    <th> <?php echo $row['airportdeparture']; ?> </th>
                    <th> <?php echo $row['departuredate']; ?> </th>
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