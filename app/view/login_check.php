<?php
session_start();

//Database Connection 
include 'admin/conn.php';



if (isset($_POST["done"])){
    $username = $_POST['uname'];
    $password = $_POST['upass'];
    $_SESSION["status"]=false;

    $q = "select * from admin_login";
    $sql = mysqli_query($con,$q);
    $res = mysqli_fetch_array($sql);
    $adminusername = $res['username'];
    $adminpassword = $res['password'];

    if($username == $adminusername && $password == $adminpassword)
    {
        $_SESSION["status"]=true;
        header('location: index.php');
    }
    else{
        echo "Incorrect Username/Password!";
    }
}
   
?>