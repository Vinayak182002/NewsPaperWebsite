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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
</head>

<body>
  <div class="container-fluid">
    <h4 class="font-weight-bold mt-5">| YOU MAY HAVE MISSED</h4>
    <div class="row mb-5">
      <?php
      include 'app/view/admin/conn.php';
      $path = "app/view/admin/missed/";
      $sql = "SELECT *FROM missed";
      $result = mysqli_query($con, $sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          // print_r($row); die;
      ?>

          <div class="col-lg-3">
            <div class="card" style="width: 20rem;max-width: 100%;">

              <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=missed"><img style="height: 200px;" src="<?php echo $path . $row['imgpath'] ?>" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><?= $row['title'] ?></h5>
                <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=missed" class="btn btn-outline-primary" style="margin-left: 30%;">सविस्तर वृत्त</a>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo "0 results";
      }
      ?>
    </div>
  </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>