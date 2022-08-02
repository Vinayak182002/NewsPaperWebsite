<?php
include '../conn.php';

if (isset($_POST['done4'])) {
    $id = $_POST['missed_id'];


    $oldimg = $_POST['old_img'];

    if (isset($_FILES["fileToUpload"]) && !empty($_FILES["fileToUpload"]["name"])) {

        $target_dir = "missed_uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        // Check if $uploadOk is set to 0 by an error

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $imgtitle = $_POST['imgtitle'];
            $sql = "UPDATE `missed` SET `title`='$title',`content`='$content',`imgtitle`='$imgtitle',`imgpath`='$target_file' WHERE id= $id";
            $query = mysqli_query($con, $sql);

            if ($query) {

                header('location:../../missed.php');
            } else {
                echo "Please try again..";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        //If same image..
        $title = $_POST['title'];
        $content = $_POST['content'];
        $imgtitle = $_POST['imgtitle'];
        $finalimgpath = $_POST['old_img'];
        $sql = "UPDATE `missed` SET `title`='$title',`content`='$content',`imgtitle`='$imgtitle',`imgpath`='$finalimgpath' WHERE id= $id";
        $query = mysqli_query($con, $sql);

        if ($query) {

            header('location:../../missed.php');
        } else {
            echo "Please try again..";
        }
    }
}
