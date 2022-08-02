<?php

include 'app/view/admin/conn.php';

$query1 = "SELECT * FROM regional WHERE news_section = 'maharashtra'";
$result1 = mysqli_query($con, $query1);

$rowcount1 = mysqli_num_rows($result1);

$query2 = "SELECT * FROM regional WHERE news_section = 'india'";
$result2 = mysqli_query($con, $query2);

$rowcount2 = mysqli_num_rows($result2);

$query3 = "SELECT * FROM regional WHERE news_section = 'international'";
$result3 = mysqli_query($con, $query3);

$rowcount3 = mysqli_num_rows($result3);

?>



<!-- Vinayak.. -->
<html>

<head>
  <title>
    ..
  </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery1.com/jquery1-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-fluid">
    <div class="row">


      <!-- First Section -->
      <div class="col-lg-4">
        <h4 class="font-weight-bold ">| Maharashtra</h4>
        <div id="regionalcarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php
            for ($i = 1; $i <= $rowcount1; $i++) {
              $row = mysqli_fetch_array($result1);
            ?>

              <?php
              if ($i == 1) {
              ?>
                <div class="carousel-item active">

                  <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=regional"><img class="d-block w-100" src="app/view/admin/regional/<?php echo $row["imgpath"] ?>" alt="First slide" height="400" width="400"></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?= $row['title'] ?></h5>
                  </div>

                </div>
              <?php
              } else {
              ?>
                <div class="carousel-item">
                  <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=regional"> <img class="d-block w-100" src="app/view/admin/regional/<?php echo $row["imgpath"] ?>" alt="Second slide" height="400" width="400"></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?= $row['title'] ?></h5>
                  </div>
                </div>
              <?php
              }
              ?>
            <?php
            }
            ?>
          </div>
          <a class="carousel-control-prev" href="#regionalcarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#regionalcarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>


      <!-- Second Section -->
      <div class="col-lg-4">
        <h4 class="font-weight-bold ">| India</h4>
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php
            for ($j = 1; $j <= $rowcount2; $j++) {
              $row = mysqli_fetch_array($result2);
            ?>

              <?php
              if ($j == 1) {
              ?>
                <div class="carousel-item active">
                  <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=regional"><img class="d-block w-100" src="app/view/admin/regional/<?php echo $row["imgpath"] ?>" alt="First slide" height="400" width="400"></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?= $row['title'] ?></h5>
                  </div>
                </div>
              <?php
              } else {
              ?>
                <div class="carousel-item">
                  <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=regional"> <img class="d-block w-100" src="app/view/admin/regional/<?php echo $row["imgpath"] ?>" alt="Second slide" height="400" width="400"></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?= $row['title'] ?></h5>
                  </div>
                </div>
              <?php
              }
              ?>
            <?php
            }
            ?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>


      <!-- Third Section -->
      <div class="col-lg-4">
        <h4 class="font-weight-bold">| International</h4>

        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php
            for ($k = 1; $k <= $rowcount3; $k++) {
              $row = mysqli_fetch_array($result3);
            ?>

              <?php
              if ($k == 1) {
              ?>
                <div class="carousel-item active">
                  <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=regional"> <img class="d-block w-100" src="app/view/admin/regional/<?php echo $row["imgpath"] ?>" alt="First slide" height="400" width="400"></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?= $row['title'] ?></h5>
                  </div>
                </div>
              <?php
              } else {
              ?>
                <div class="carousel-item">
                  <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=regional"><img class="d-block w-100" src="app/view/admin/regional/<?php echo $row["imgpath"] ?>" alt="Second slide" height="400" width="400"></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?= $row['title'] ?></h5>
                  </div>
                </div>
              <?php
              }
              ?>
            <?php
            }
            ?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jquery1 first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery1.com/jquery1-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>