<html>

<head>
    <title>
        Important News
    </title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6" style="padding-top: 20px;">

                <?php
                include 'app/view/admin/conn.php';
                $path = "app/view/admin/imp_news/";
                $sql = "SELECT * FROM imp_news limit 1";
                $result = mysqli_query($con, $sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) {
                        // print_r($row); die;
                ?>
                        <div class="card" style="max-width: 35rem;">

                            <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=imp_news">
                             <img class="card-img-top img-fluid" style="max-width:100%; height:auto;"   src="<?php echo $path . $row['imgpath'] ?>" alt="Card image cap"></a>
                            <div class="card-body text-center">
                                <p class="card-text"><?php echo $row['title'] ?></p>
                            </div>

                        </div>
                <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>













            <div class="col-lg-6" style="padding-top: 20px;">


                <marquee id='scroll_news' width="100%" height="400px;" scrollamount="7" direction="up" loop="infinite">
                    <div onMouseOver="document.getElementById('scroll_news').stop();" onMouseOut="document.getElementById('scroll_news').start();">
                        <?php
                        include 'app/view/admin/conn.php';
                        $path = "app/view/admin/scroll_news/";
                        $sql = "SELECT * FROM scroll_news";
                        $result = mysqli_query($con, $sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_array()) {
                                // print_r($row); die;
                        ?>
                                <!-- <div class="container" width: 100%;> -->

                                    <div class="card" style="width: 100%;">
                                        <div class="card-horizontal" style="display: flex;">
                                            <div class="img-square-wrapper">
                                                <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=scroll_news"><img class="" src="<?php echo $path . $row['imgpath'] ?>" alt="" width="130" height="105"></a>
                                            </div> &nbsp;
                                            <p class="card-text"><?php echo $row['title'] ?></p>
                                        </div>
                                    </div>
                                    &nbsp;

                                <!-- </div> -->

                        <?php
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>
                </marquee>
            </div>
        </div>
    </div>
</body>

</html>