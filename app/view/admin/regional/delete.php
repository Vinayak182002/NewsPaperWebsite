<?php

include '../conn.php';

$id = $_GET['id'];


$res = mysqli_query($con, "SELECT * FROM regional where id=$id");
while ($row = mysqli_fetch_array($res)) {
    $img = $row["imgpath"];
}
unlink($img);

$q = " DELETE FROM `regional` WHERE id = $id ";

mysqli_query($con, $q);

header('location: ../../regional.php');
