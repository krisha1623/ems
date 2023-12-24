<?php include 'connect.php'; ?>

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

        <h1>Welcome Admin!</h1>
        <a href="addevent.php" class="add-event-button">Add Data</a>
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

                <?php
                //  if(isset($_POST['submit'])){


                // }
                $sql = "select * from addevents";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $Name = $row['Name'];
                        $Date = $row['Date'];
                        $Time = $row['Time'];
                        $Venue = $row['Venue'];
                        $Coordinator = $row['Coordinator'];
                        $Budget = $row['Budget'];

                        echo '<tr>
                 <th scope="row">' . $id . '</th>
                  <td>' . $Name . '</td>
                  <td>' . $Date . '</td>
                  <td>' . $Time . '</td>
                  <td>' . $Venue . '</td>
                  <td>' . $Coordinator . '</td>
                  <td>' . $Budget . '</td>
               </tr>';
                    }
                }
                ?>
                <!-- Table rows will be dynamically added here -->

            </tbody>
        </table>
        <br>
        <a href="studentlogin.php" class="add-event-button">Logout</a>

    </div>

</body>

</html>