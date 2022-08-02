<?php
session_start();

if ($_SESSION["status"] != true) {
    header("location: login.php");
    echo "Incorrect username or password!";
} 
else {
    include_once('../layout/header.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="h3 mb-0 text-gray-800">Welcome to Admin Dashboard</h1>
    </div>

</div>
<!-- /.container-fluid -->

<?php
    include_once('../layout/footer.php');
    
}

?>