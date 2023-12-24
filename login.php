<?php
include 'connect.php';

// Establish a connection to the database (replace with your actual database credentials)


$con = new mysqli('localhost', 'root', '', 'ems');

if($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Retrieve user input
    
$email = $_POST['email'];
$password = $_POST['password'];


// Hash the password (for security, use password_hash() in a real-world scenario)
$hashedPassword = md5($password);

// Insert user data into the database
$sql = "INSERT INTO stulogin (email, password) VALUES ('$email', '$hashedPassword')";

if ($con->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<!--menu.html-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: left;
            margin: 50px;
        }

        h1 {
            color: #1d1c1c
        }

        p {
            color: #1d1c1c;
        }

        .add-event-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #934caf;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>

<body>

    <div class="container">
        
        <h1>Welcome!</h1>
        <p>Enter your Event Details!</p>
        <a href="addevent.php" class="add-event-button">Add Event</a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr No</th>
                    <th scope="col">Name</th>

                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Venue</th>
                    <th scope="col">Coordinator</th>
                    <th scope="col">Budget</th>

                    <!-- Add other table headers for date, time, venue, coordinator, budget -->
                </tr>

            </thead>
            <tbody>
                <!-- Table rows will be dynamically added here -->
               
            </tbody>
        </table>
        <br>
        <a href="studentlogin.php" class="add-event-button">Logout</a>

    </div>

</body>

</html>