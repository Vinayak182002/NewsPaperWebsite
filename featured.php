<!-- Vinayak.. -->
<html>

<head>
  <title>
    Cards
  </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
  .card:hover{
    transform: scale(1.02);
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);

  }
</style>
<body>
    <div class="container-fluid">
      <h4 class="font-weight-bold ">| FEATURED NEWS</h4>
      <div class="row">
        <?php
        include 'app/view/admin/conn.php';
        $path = "app/view/admin/featured_news/";
        $sql = "SELECT *FROM featured_news";
        $result = mysqli_query($con, $sql);
        $result_check = mysqli_num_rows($result) > 0;

        if ($result_check) {
          while ($row = mysqli_fetch_array($result)) {
        ?>
            <div class="col-lg-3">
              <div class="card" style="width: 20rem; max-width: 100%;">
                <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=featured"><img style="height: 210px;" src="<?php echo $path . $row['imgpath'] ?>" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['title']; ?></h5>
                  <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=featured" class="btn btn-outline-primary" style="margin-left: 30%;">सविस्तर वृत्त</a>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "No record found";
        }
        ?>
      </div>
    </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>