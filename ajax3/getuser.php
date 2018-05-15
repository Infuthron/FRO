<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get user</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }
    </style>
</head>
    <body>
        <?php

        $q = intval($_GET['q']);

        $con = mysqli_connect('localhost', '24724', '12345', '24724_db');
        if (!$con) {
            die('Could not connect' . mysqli_error($con));
        }

        mysqli_select_db($con, 'w3c_ajax_demo');
        $sql = "SELECT * FROM w3c_ajax_demo WHERE id = '".$q."'";
        $result = mysqli_query($con, $sql);

        echo "<table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
    <th>Hometown</th>
    <th>Job</th>
    </tr>";

        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['FirstName'] . "</td>";
            echo "<td>" . $row['LastName'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['Hometown'] . "</td>";
            echo "<td>" . $row['Job'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($con);
        ?>
    </body>
</html>