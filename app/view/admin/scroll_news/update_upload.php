<?php
include '../conn.php';

if (isset($_POST['btn-submit'])) {
  $id = $_POST['scrollnews_id'];


  $oldimg = $_POST['old_img'];

  if (isset($_FILES["fileToUpload"]) && !empty($_FILES["fileToUpload"]["name"])) {

    $target_dir = "scroll_news_uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    // Check if $uploadOk is set to 0 by an error

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $title = $_POST['title'];
      $content = $_POST['content'];
      $imgtitle = $_POST['imgtitle'];
      $sql = "UPDATE `scroll_news` SET `title`='$title',`content`='$content',`imgtitle`='$imgtitle',`imgpath`='$target_file' WHERE id= $id";
      $query = mysqli_query($con, $sql);

      if ($query) {

        header('location:../../scroll_news.php');
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
    $sql = "UPDATE `scroll_news` SET `title`='$title',`content`='$content',`imgtitle`='$imgtitle',`imgpath`='$finalimgpath' WHERE id= $id";
    $query = mysqli_query($con, $sql);

    if ($query) {

      header('location:../../scroll_news.php');
    } else {
      echo "Please try again..";
    }
  }
}
