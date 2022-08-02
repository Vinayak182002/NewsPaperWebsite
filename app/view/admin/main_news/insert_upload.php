<?php 
include '../conn.php';

    // if(isset($_POST['submit'])){
    // if(!empty($_POST['radio'])) {
    //     echo '  ' . $_POST['radio'];
    // } else {
    //     echo 'Please select the value.';
    // }
    // }

if(isset($_POST['submit'])){

$target_dir = "main_uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $news_section=$_POST['news_section'];
    if($news_section == "editors_pick"){
      if(!empty($_POST['radio'])) {
        $option=$_POST['radio'];
    } else {
        echo 'Please select the value.';
    }
    }
	  $title=$_POST['title'];
    $content=$_POST['content'];
    $imgtitle=$_POST['imgtitle'];
    $sql="insert into main_news(news_section,title,content,imgtitle,imgpath,option) values('$news_section','$title','$content','$imgtitle','$target_file','$option')";

	$query = mysqli_query($con,$sql);

  if ($query) {
    header('location:../../main_news.php');
}
else{
    echo "Please try again..";
}



  } else {
    header('location:../../main_news.php');
  }
}


}

?>