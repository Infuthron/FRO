<?php
include ('../private/the_wall_db_connection.php');

$userID = 99;
$titel = 'titel';
$beschrijving = 'beschrijving';
$likes = 0;

var_dump($_FILES);
$temp_location = $_FILES['userimage']['tmp_name'];
$target_location = '../images/' . time() . $_FILES['userimage']['name'];
echo "1";
if ($_FILES['userimage']['size'] < 2000000) {
    $result = move_uploaded_file($temp_location, $target_location );
} else {
    echo "Image size is te groot";
}
echo "2";
if ($result) {
    echo "Result";
    $mysqli = new mysqli(HOST, USER, PASSWORD, DB);
    if ($mysqli->connect_errno) {
        echo 'Error code:' . $mysqli->connect_errno;
    }

    $query = "INSERT INTO post VALUES (0, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('isssi', $userID, $target_location, $titel, $beschrijving, $likes);
    $stmt->execute();


    //header('Location: upload.php');
}
echo "3";
mysqli_close($mysqli);