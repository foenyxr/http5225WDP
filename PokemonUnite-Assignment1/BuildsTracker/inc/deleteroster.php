<?php

print_r($_POST);

$pokeName = $_POST['pokeName'];

include '../reusable/conn.php';

$query = " DELETE FROM pokemondata 
            WHERE `Name` = '" . mysqli_real_escape_string($connect, $pokeName) . "'";

$result = mysqli_query($connect, $query);

if($result) {
    header("Location: ../index.php");
} else {
    echo "Failed: " . mysqli_error($connect);
}


?>