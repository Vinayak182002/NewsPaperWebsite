<?php
include '../conn.php';

$id = $_GET['id'];


$res=mysqli_query($con,"SELECT * FROM main_news where id=$id");
while($row=mysqli_fetch_array($res)){
    $img=$row["imgpath"];
}
unlink($img);

$q = " DELETE FROM `main_news` WHERE id = $id ";

mysqli_query($con,$q);

header('location: ../../main_news.php');

?>