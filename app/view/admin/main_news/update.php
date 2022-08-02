<?php

include '../conn.php';

if ($_GET['id']) {
    $id = $_GET['id'];

    $query = "SELECT * FROM main_news WHERE id='$id'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $news_section = $row['news_section'];
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
    <input type="hidden" value="<?php echo $id; ?>" name="main_news_id">
    <h1>Main News Update Operation</h1>

    <div class="from-group mb-3">
        <label for="">News Section</label>
        <select name="news_section" class="form-control">
            <option><?php if (isset($news_section)) echo $news_section; ?> </option>
            <option value="editors_pick">editors_pick</option>
            <option value="main_news">main_news</option>
            <option value="trending">trending</option>
        </select>
    </div>

    <style>
        .invisible {
            display: none;
            visibility: hidden;
        }
    </style>
    <!--Radio Button for option in editor's pick-->
    <div id="editors_pick" class="invisible btn-group btn-group-toggle invisible" data-toggle="buttons">
        <label class="btn btn-secondary">
            <input type="radio" name="radio" id="option2" autocomplete="off" value="1"> Up
        </label>
        <label class="btn btn-secondary">
            <input type="radio" name="radio" id="option3" autocomplete="off" value="2"> Down
        </label>
    </div>
    <div id="main_news" class="invisible"> please fill the following form for main news section</div>
    <div id="trending" class="invisible"> please fill the following form for trending section</div>
    <!--Radio Button ends-->



    <h3>Title</h3>
    <textarea id="title" name="title">  <?php echo $title; ?>  
        </textarea>
    <h3>Content</h3>
    <textarea id="content" name="content"> <?php echo $content; ?>   
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
                <input type="file" name="fileToUpload" value="<?php echo $imgpath; ?>" id="fileToUpload" class="form-control">
                <input type="text" value="<?php echo $imgpath; ?>" name="old_img">
            </div>
        </div>
        &nbsp;
    </div>
    <button type="submit" name="done3">Submit</button>
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


<script>
    document
        .getElementById('target')
        .addEventListener('change', function() {
            'use strict';
            var vis = document.querySelector('.vis'),
                target = document.getElementById(this.value);
            if (vis !== null) {
                vis.className = 'invisible';
            }
            if (target !== null) {
                target.className = 'vis';
            }
        });
</script>