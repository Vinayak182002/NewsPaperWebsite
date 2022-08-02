<!-- <?php
include 'conn.php';

if(isset($_POST['done']))
{
    $username = $_POST['uname'];
    $password = $_POST['upass'];
    $q = "select * from 'admin_login' where username='$username' and password='$password'";
    $query = mysqli_query($con,$q);
    if($query)
    {
      echo "Login Successful!";
    }

    else
    {
        echo "Login Not Successful";
    }

}

?> -->

<?php
//Database Connection 
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'news_paper');


if (isset($_POST["done"])){
    $username = $_POST['uname'];
    $password = $_POST['upass'];
    $q = "select * from admin_login";
    $sql = mysqli_query($con,$q);
    $res = mysqli_fetch_array($sql);
    $adminusername = $res['username'];
    $adminpassword = $res['password'];
    if($username == $adminusername && $password == $adminpassword){
        header('location: ../index.php');
    }
    else{
        echo "Incorrect Username/Password!";
    }
}
   
?>