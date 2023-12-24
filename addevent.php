<?php 
include 'connect.php';

$con = new mysqli('localhost', 'root', '', 'ems');
if(isset($_POST['submit'])){
   
    $Name=$_POST['name'];
    $Date=$_POST['date'];
    $Time=$_POST['time'];
    $Venue=$_POST['venue'];
    $Coordinator=$_POST['coordinator'];
    $Budget=$_POST['budget'];

    $sql="insert into addevents (Name, Date, Time, Venue, Coordinator, Budget) values ('$Name','$Date','$Time','$Venue','$Coordinator','$Budget')";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Insertion Successful";
       header('location:menu.php');
    }else{
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Events</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Event Name" name="name"Required>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" placeholder="Event Date" name="date" required>
            </div>
            <div class="form-group">
                <label>Time</label>
                <input type="time" class="form-control" placeholder="Event Time" name="time" required>
            </div>
            <div class="form-group">
                <label>Venue</label>
                <input type="text" class="form-control" placeholder="Event Venue" name="venue" required>
            </div>
            <div class="form-group">
                <label>Coordinator</label>
                <input type="text" class="form-control" placeholder="Event Coordinator" name="coordinator" required>
            </div>
            <div class="form-group">
                <label>Budget</label>
                <input type="number" class="form-control" placeholder="Event Budget" name="budget" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>


