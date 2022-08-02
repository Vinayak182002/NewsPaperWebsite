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
    <div class="d-sm-flex align-items-center justify-content-between" style="margin-left: 120px;">
        <h1 class="h1 mb-0 text-gray-800">Featured News</h1>
        <div class="text-right">
            <a href="admin/featured_news/insert.php" style="margin-right: 150px;"><button class="btn btn-success" type="submit" name="insert">
                    <h5>Insert</h5>
                </button></a>
        </div>
    </div>

</div>
<!-- /.container-fluid -->






<div class="container">
    <div class="col-lg-12">
        <br><br>
        <h3 class="text-warning text-center"> Display Details </h3>
        <br>
        <div style="overflow-x:auto;">
            <table id="tabledata" class=" table table-striped table-hover table-bordered">

                <tr class="bg-dark text-white text-center">

                    <th> Id </th>
                    <th> Title </th>
                    <th> Content </th>
                    <th> Image Title </th>
                    <th> Image Path </th>
                    <th> Posting Date </th>
                    <th> Updation Date </th>
                    <th> Delete </th>
                    <th> Edit </th>


                </tr>
                <?php

                include 'admin/conn.php';

                $q = "select * from featured_news ";
                $query = mysqli_query($con, $q);
                while ($res = mysqli_fetch_array($query)) {
                ?>
                    <tr class="text-center">
                        <td> <?php echo $res['id'];  ?> </td>
                        <td> <?php echo $res['title'];  ?> </td>
                        <td> <?php echo $res['content'];  ?> </td>
                        <td> <?php echo $res['imgtitle'];  ?> </td>
                        <td> <?php echo $res['imgpath'];  ?> </td>
                        <td> <?php echo $res['PostingDate'];  ?> </td>
                        <td> <?php echo $res['UpdationDate'];  ?> </td>
                        <td> <button class="btn-danger btn">
                                <a href="admin/featured_news/delete.php?id=<?php echo $res['id']; ?>" class="text-white">
                                    Delete </a></button></td>

                        <td> <button class="btn-primary btn">
                                <a href="admin/featured_news/update.php?id=<?php echo $res['id']; ?>" name="update" class="update_id text-white"> Edit </a> </button> </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>



<?php
include('../layout/footer.php');
            }
?>