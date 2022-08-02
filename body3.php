<!--Done by Sakshi @ 06/08-->
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <style>
    .carousel-item .img-fluid {
      width: 100%;
      height: 100%;
    }

    /* rgba(0,0,0,0.2) */
    .editorimg:hover {
      transform: scale(1.04);
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="main" style="margin-left: 10px;">

      <div class="row">
        <div class="col-md-3">
          <!--Editors Pick Section Start-->
          <div class="editing">
            <h3 class="font-weight-bold my-4"><span class="col">| </span>EDITOR'S PICK</h3>
            <?php
            include 'app/view/admin/conn.php';
            $path = "app/view/admin/main_news/";
            $editorsql1 = "select * from main_news WHERE news_section = 'editors_pick' && option = '1' limit 1";
            $result = mysqli_query($con, $editorsql1);
            if ($result !== false && $result->num_rows > 0) {
              $row = mysqli_fetch_array($result);
            ?>
              <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=main_news"><img class="editorimg" src="<?php echo $path . $row['imgpath'] ?>" height="310" width="320" style="width:100%; height:auto; max-width:320px;"></a>
            <?php
            } else {
              echo "no rows found!";
            }
            ?>
          </div>
          <!-- <div class="text"> -->
          <div class="row">

            <div class="col-md-6">
              <div class="image" style=" margin-right: 0%;">
                <?php
                $editorsql2 = "select * from main_news WHERE news_section = 'editors_pick' && option = '2' limit 1";
                $result = mysqli_query($con, $editorsql2);
                if ($result !== false && $result->num_rows > 0) {
                  $row2 = mysqli_fetch_array($result);
                ?>
                  <a href="linkpage.php?id=<?php echo $row2['id']; ?>&section=main_news"><img class="editorimg" style=" margin-top: 20px; margin-left: 0px;" src="<?php echo $path . $row2['imgpath'] ?>" height="170" width="320"></a>
              </div>
            </div>

            <!-- </div> -->
          </div>
        <?php
                } else {
                  echo "no rows found!";
                }
        ?>

        </div>
        <!--Editors Pick Section end-->


        <div class="col-md-5">
          <!--Main news Section start-->
          <h3 class="font-weight-bold my-4"><span class="col"> | </span>MAIN NEWS</h3>

          <?php

          include 'app/view/admin/conn.php';
          $path = "app/view/admin/main_news/";

          $query = "SELECT * FROM main_news WHERE news_section = 'main_news'";
          $result2 = mysqli_query($con, $query);

          $rowcount = mysqli_num_rows($result2);

          ?>

          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="max-width: 100%; height:auto;">
            <div class="carousel-inner">
              <?php
              for ($i = 1; $i <= $rowcount; $i++) {
                $row = mysqli_fetch_array($result2);
              ?>
                <?php
                if ($i == 1) {
                ?>
                  <div class="carousel-item active">
                    <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=main_news"><img class="d-block w-100 height:auto" src="<?php echo $path . $row['imgpath'] ?>" alt="First slide"></a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5><?php echo $row['title'] ?></h5>
                    </div>
                  </div>
                <?php
                } else {
                ?>
                  <div class="carousel-item">
                    <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=main_news"><img class="d-block w-100" src="<?php echo $path . $row['imgpath'] ?>" alt="First slide"></a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5><?php echo $row['title'] ?></h5>
                    </div>
                  </div>
              <?php
                }
              }
              ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!--Trending Sections Starts-->
        <div class="col-md-4">
          <h3 class="font-weight-bold my-4"><span class="col"> | </span>TRENDING</h3>
          <?php
          include 'app/view/admin/conn.php';
          $path = "app/view/admin/main_news/";
          $trendingsql = "select * from main_news WHERE news_section = 'trending' order by PostingDate desc limit 4";
          $result3 = mysqli_query($con, $trendingsql);
          if ($result3 !== false && $result3->num_rows > 0) {
            while ($row = mysqli_fetch_array($result3)) {
          ?>
              <div class="card" style="width: 100%;">
                <div class="card-horizontal" style="display: flex;">
                  <div class="img-square-wrapper">
                    <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=main_news"><img class="" src="<?php echo $path . $row['imgpath'] ?>" alt="Card image cap" width="130" height="105"></a>
                  </div> &nbsp;
                  <p class="card-text"><?php echo $row['title'] ?></p>
                </div>
              </div>
              &nbsp;
          <?php
            }
          } else {
            echo "no rows found!";
          }
          ?>
        </div>
        <!--Trending Sections ends-->
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