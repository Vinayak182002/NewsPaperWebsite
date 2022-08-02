<!--Done by Janhavi(10/8/21)-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .font-h1 {
            color: white;
            font-size: 35px;
            font-family: serif;
            text-align: center;
        }

        .card {
            align-items: center;
            font-size: large;
        }

        .search-field {
            margin-top: 7px;
            height: 50px;
            width: 300px;
        }

        .search-submit {
            height: 50px;
            width: 100px;
        }

        .responsive {
            max-width: 100%;
            /* height: 500px; */
        }


        /* For collapse section */
        /* .badge{
                font-size: 25px;
            } */
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Detailed news</title>
</head>

<body>
    <!-- Menu Bar.. -->
    <?php
    include 'app/view/admin/conn.php';
    include('header.php');
    ?>
    &nbsp;

    <?php
    $id = $_GET['id'];
    $section = $_GET['section'];
    //   echo $section;die;
    //   fetching data from the respective table to display it on linkpage.
    if ($section == 'featured') {
        $path = "app/view/admin/featured_news/";
        $sql = "SELECT *FROM featured_news where id=$id";
    } elseif ($section == 'missed') {
        $path = "app/view/admin/missed/";
        $sql = "SELECT *FROM missed where id=$id";
    } elseif ($section == 'bodynews') {
        $path = "app/view/admin/body_news/";
        $sql = "SELECT *FROM body_news where id=$id";
    } elseif ($section == 'headlines') {
        $path = "app/view/admin/headlines/";
        $sql = "SELECT *FROM headlines where id=$id";
    } elseif ($section == 'main_news') {
        $path = "app/view/admin/main_news/";
        $sql = "SELECT *FROM main_news where id=$id";
    } elseif ($section == 'regional') {
        $path = "app/view/admin/regional/";
        $sql = "SELECT *FROM regional where id=$id";
    } elseif ($section == 'imp_news') {
        $path = "app/view/admin/imp_news/";
        $sql = "SELECT *FROM imp_news where id=$id";
    } elseif ($section == 'scroll_news') {
        $path = "app/view/admin/scroll_news/";
        $sql = "SELECT *FROM scroll_news where id=$id";
    }



    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <!-- Main Detailed News.. -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card" style="background-color: rgb(90, 87, 87);">
                        <h2 style="padding:10px" class="font-h1"><?php echo $row['title'] ?> </h2>
                    </div>
                    &nbsp;
                    <div class="card-img-top">
                        <img style="height: 450px; width: 867px; border-radius: 10px" src="<?php echo $path . $row['imgpath'] ?>" class="responsive" alt="...">
                    </div>
                    <div class="card">
                        <h6 style="padding:10px;  line-height: 1.6;"> <?php echo $row['content'] ?> </h6>
                    </div>
                </div>
            <?php
        }
            ?>
            <!-- Search Bar -->
            <div class="col-lg-4">
                <h3 class="font-weight-bold">| SEARCH</h3>
                <form role="search" method="get" class="search-form" action="">
                    <label><input type="search" class="search-field" placeholder="Search...">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>
                &nbsp;
                <!-- Advertise Carousel -->
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/logo.jpeg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/logo.jpeg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/logo.jpeg" alt="Third slide">
                        </div>
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




                <!-- Collapse Section  @Vinayak-->
                <div class="collsection mt-3">
                    <h3 class="font-weight-bold">| SOME IMPORTANT LINKS</h3>

                    <div class="accordion" id="accordionExample">
                        <!-- One -->
                        <div class="card">
                            <div class="card-header" id="headingOne"  style="width: 100%;">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Headlines
                                        <?php
                                        $sql = "SELECT COUNT(*) AS Count FROM headlines";
                                        $result = $con->query($sql);
                                        $row = $result->fetch_assoc();
                                        ?>
                                        <span class="badge badge-light" style="font-size: 15px;">
                                            <?php echo $row['Count']; ?>
                                        </span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <?php
                                include 'app/view/admin/conn.php';
                                $sql1 = "SELECT id,title FROM headlines ORDER BY PostingDate desc limit 4";
                                $result1 = mysqli_query($con, $sql1);
                                if ($result1->num_rows > 0) {
                                    while ($row1 = $result1->fetch_array()) {
                                        // print_r($row); die;
                                ?>
                                        <div class="card-body">
                                            <ul>
                                                <a href="linkpage.php?id=<?php echo $row1['id']; ?>&section=headlines">
                                                    <li><?php echo $row1['title'] ?></li>
                                                </a>
                                                <hr>
                                            </ul>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </div>
                        </div>

                        <!-- Two -->
                        <div class="card">
                            <div class="card-header" id="headingTwo"  style="width: 100%;">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Main News
                                        <?php
                                        $sql = "SELECT COUNT(*) AS Count FROM main_news";
                                        $result = $con->query($sql);
                                        $row = $result->fetch_assoc();
                                        ?>
                                         <span class="badge badge-light" style="font-size: 15px;">
                                            <?php echo $row['Count']; ?>
                                        </span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <?php
                                include 'app/view/admin/conn.php';
                                $sql2 = "SELECT id,title FROM main_news ORDER BY PostingDate desc limit 4";
                                $result2 = mysqli_query($con, $sql2);
                                if ($result2->num_rows > 0) {
                                    while ($row2 = $result2->fetch_array()) {
                                        // print_r($row); die;
                                ?>
                                        <div class="card-body">
                                            <ul>
                                                <a href="linkpage.php?id=<?php echo $row2['id']; ?>&section=main_news">
                                                    <li><?php echo $row2['title'] ?></li>
                                                </a>
                                                <hr>
                                            </ul>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </div>
                        </div>
                        <!-- Three -->
                        <div class="card">
                            <div class="card-header" id="headingThree"  style="width: 100%;">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Featured News
                                        <?php
                                        $sql = "SELECT COUNT(*) AS Count FROM featured_news";
                                        $result = $con->query($sql);
                                        $row = $result->fetch_assoc();
                                        ?>
                                        <span class="badge badge-light" style="font-size: 15px;">
                                            <?php echo $row['Count']; ?>
                                        </span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <?php
                                include 'app/view/admin/conn.php';
                                $sql3 = "SELECT id,title FROM featured_news ORDER BY PostingDate desc limit 4";
                                $result3 = mysqli_query($con, $sql3);
                                if ($result3->num_rows > 0) {
                                    while ($row3 = $result3->fetch_array()) {
                                        // print_r($row); die;
                                ?>
                                        <div class="card-body">
                                            <ul>
                                                <a href="linkpage.php?id=<?php echo $row3['id']; ?>&section=featured">
                                                    <li><?php echo $row3['title'] ?></li>
                                                </a>
                                                <hr>
                                            </ul>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </div>
                        </div>
                        <!-- Four -->
                        <div class="card">
                            <div class="card-header" id="headingFour"  style="width: 100%;">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Body News
                                        <?php
                                        $sql = "SELECT COUNT(*) AS Count FROM body_news";
                                        $result = $con->query($sql);
                                        $row = $result->fetch_assoc();
                                        ?>
                                         <span class="badge badge-light" style="font-size: 15px;">
                                            <?php echo $row['Count']; ?>
                                        </span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <?php
                                include 'app/view/admin/conn.php';
                                $sql4 = "SELECT id,title FROM body_news ORDER BY PostingDate desc limit 4";
                                $result4 = mysqli_query($con, $sql4);
                                if ($result4->num_rows > 0) {
                                    while ($row4 = $result4->fetch_array()) {
                                        // print_r($row); die;
                                ?>
                                        <div class="card-body">
                                            <ul>
                                                <a href="linkpage.php?id=<?php echo $row4['id']; ?>&section=bodynews">
                                                    <li><?php echo $row4['title'] ?></li>
                                                </a>
                                                <hr>
                                            </ul>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </div>
                        </div>
                        <!-- Five -->
                        <div class="card">
                            <div class="card-header" id="headingFive"  style="width: 100%;">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        You May Have Missed
                                        <?php
                                        $sql = "SELECT COUNT(*) AS Count FROM missed";
                                        $result = $con->query($sql);
                                        $row = $result->fetch_assoc();
                                        ?>
                                        <span class="badge badge-light" style="font-size: 15px;">
                                            <?php echo $row['Count']; ?>
                                        </span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <?php
                                include 'app/view/admin/conn.php';
                                $sql5 = "SELECT id,title FROM missed ORDER BY PostingDate desc limit 4";
                                $result5 = mysqli_query($con, $sql5);
                                if ($result5->num_rows > 0) {
                                    while ($row5 = $result5->fetch_array()) {
                                        // print_r($row); die;
                                ?>
                                        <div class="card-body">
                                            <ul>
                                                <a href="linkpage.php?id=<?php echo $row5['id']; ?>&section=missed">
                                                    <li><?php echo $row5['title'] ?></li>
                                                </a>
                                                <hr>
                                            </ul>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </div>
                        </div>
                        <!-- Six -->
                        <div class="card">
                            <div class="card-header" id="headingSix" style="width: 100%;" >
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Regional
                                        <?php
                                        $sql = "SELECT COUNT(*) AS Count FROM regional";
                                        $result = $con->query($sql);
                                        $row = $result->fetch_assoc();
                                        ?>
                                        <span class="badge badge-light" style="font-size: 15px;">
                                            <?php echo $row['Count']; ?>
                                        </span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <?php
                                include 'app/view/admin/conn.php';
                                $sql6 = "SELECT id,title FROM regional ORDER BY PostingDate desc limit 4";
                                $result6 = mysqli_query($con, $sql6);
                                if ($result6->num_rows > 0) {
                                    while ($row6 = $result6->fetch_array()) {
                                        // print_r($row); die;
                                ?>
                                        <div class="card-body">
                                            <ul>
                                                <a href="linkpage.php?id=<?php echo $row6['id']; ?>&section=regional">
                                                    <li><?php echo $row6['title'] ?></li>
                                                </a>
                                                <hr>
                                            </ul>
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
                </div>
                <!-- Collapse Section End -->




            </div>
            </div>
        </div>
        &nbsp;
        <?php
        include('footer.php');
        ?>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->


</body>

</html>