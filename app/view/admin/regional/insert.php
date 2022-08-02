<script src="../../../../ckeditor/ckeditor.js"></script>

<form method="post" action="insert_upload.php" enctype="multipart/form-data">

    <h1>Regional Insert Operation</h1>

    <div class="from-group mb-3">
        <label for="">Regional News Section</label>
        <select name="news_section" class="form-control">
            <option>--Select News Section--</option>
            <option value="maharashtra">maharashtra</option>
            <option value="india">india</option>
            <option value="international">international</option>
        </select>
    </div>
    &nbsp;

    <h3>Title</h3>
    <textarea id="title" name="title">
    </textarea>
    <h3>Content</h3>
    <textarea id="content" name="content">
    </textarea>
    <h3>Image</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group text-dark h6 text-center">
                Enter Image title: <input type="text" id="imgtitle" name="imgtitle" class="form-control" required>
            </div>
            &nbsp;
            <div class="form-group text-dark h6">
                Select Image: <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" required>
            </div>
        </div>
        &nbsp;
    </div>

    <input type="submit" name="submit">
</form>
<script>
    CKEDITOR.replace('title', {
        height: 140
    })
    CKEDITOR.replace('content', {
        height: 300
    })
</script>