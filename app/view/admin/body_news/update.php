<?php

include '../conn.php';

if ($_GET['id']) {
    $id = $_GET['id'];

    $query = "SELECT * FROM body_news WHERE id='$id'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['title'];
            $content = $row['content'];
            $imgtitle = $row['imgtitle'];
            $imgpath = $row['imgpath'];
        }
    }
}
?>
<script src="../../../../ckeditor/ckeditor.js"></script>

<form method="POST" action="update_upload.php" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $id; ?>" name="bodynews_id">
    <h1>News Update Operation</h1>
    <h3>Title</h3>
    <textarea id="title" name="title">  <?php if (isset($title)) echo $title; ?>  
        </textarea>
    <h3>Content</h3>
    <textarea id="content" name="content"> <?php if (isset($content)) echo $content; ?>   
        </textarea>
    <h3>Image</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group text-dark h6 text-center">
                Enter Image title: <input type="text" value=" <?php if (isset($imgtitle)) echo $imgtitle; ?>" id="imgtitle" name="imgtitle" class="form-control" required>
            </div>
            &nbsp;
            <div class="form-group text-dark h6">
                Select Image:
                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                <input type="text" name="old_img" value="<?php if (isset($imgpath)) echo $imgpath; ?>">
            </div>
        </div>
        &nbsp;
    </div>
    <button type="submit" name="btn-submit">Submit</button>
    <!-- <input type="submit" name="submit" > -->
</form>
<script>
    CKEDITOR.replace('title', {
        height: 140
    })
    CKEDITOR.replace('content', {
        height: 300
    })
</script>