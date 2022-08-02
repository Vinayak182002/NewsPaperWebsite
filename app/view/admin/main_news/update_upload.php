<?php
include '../conn.php';

if (isset($_POST['done3'])) {
  $id = $_POST['main_news_id'];


  $oldimg = $_POST['old_img'];

  if (isset($_FILES["fileToUpload"]) && !empty($_FILES["fileToUpload"]["name"])) {

    $target_dir = "main_uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    // Check if $uploadOk is set to 0 by an error

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $news_section = $_POST['news_section'];
      // if ($news_section == "editors_pick") {
      //   if (!empty($_POST['radio'])) {
      //     $option = $_POST['radio'];
      //   } else {
      //     echo 'Please select the value.';
      //   }
      // }
      $title = $_POST['title'];
      $content = $_POST['content'];
      $imgtitle = $_POST['imgtitle'];
      $sql = " UPDATE `main_news` SET `title`='$title',`content`='$content',`imgtitle`='$imgtitle',`imgpath`='$target_file' WHERE id= $id";
      $query = mysqli_query($con, $sql);
      if ($query) {

        header('location:../../main_news.php');
      } else {
        echo "Query not executed properly...";
      }
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  } 
  
  
  else {
    //If same image..
    $title = $_POST['title'];
    $content = $_POST['content'];
    $imgtitle = $_POST['imgtitle'];
    $finalimgpath = $_POST['old_img'];
    $sql = " UPDATE `main_news` SET `title`='$title',`content`='$content',`imgtitle`='$imgtitle',`imgpath`='$finalimgpath' WHERE id= $id";
    $query = mysqli_query($con, $sql);
    if ($query) {

      header('location:../../main_news.php');
    } else {
      echo "Please try again..";
    }
  }
}
