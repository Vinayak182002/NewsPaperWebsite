<!--Done by Janhavi(08/08/2021) edited @12/8-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/headline.css">


  <title>Heading Marquee</title>
</head>

<body>
  <div class="marqbody">
    <div class="button">
      <div class="exclusive-now primary-color">
        <span>Headlines</span>
      </div>
    </div>

    <div class="marquee">

      <div class="marquee-content">

        <table>
          <td>
            <?php
            include 'app/view/admin/conn.php';
            $path = "app/view/admin/headlines/";
            $sql = "SELECT * FROM headlines";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_array()) {
                // print_r($row); die;
            ?>
                <tr>
                  <div class="card1" style="width: 600px;">
                    <div class="row">
                      <div class="col">
                        <a href="linkpage.php?id=<?php echo $row['id']; ?>&section=headlines"><img src="<?php echo $path.$row['imgpath'] ?>" alt="Card image cap" width="130" height="130"></a>
                        <div class="col">
                          <div class="card-body">
                            <p class="card-text"><?php echo $row['title'] ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </tr>
            <?php
              }
            } else {
              echo "0 results";
            }
            ?>

          </td>
        </table>
      </div>
    </div>
  </div>
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





<!-- <tr>
              <div class="card" style="width: 600px;">
                <div class="row">
                  <div class="col">
                    <img class="" src="assets/images/logo.jpeg" alt="Card image cap" width="130" height="130">
                    <div class="col">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </tr>

            <tr>
              <div class="card" style="width: 600px;">
                <div class="row">
                  <div class="col">
                    <img class="" src="assets/images/logo.jpeg" alt="Card image cap" width="130" height="130">
                    <div class="col">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </tr>

            <tr>
              <div class="card" style="width: 600px;">
                <div class="row">
                  <div class="col">
                    <img class="" src="assets/images/logo.jpeg" alt="Card image cap" width="130" height="130">
                    <div class="col">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </tr>

            <tr>
              <div class="card" style="width: 600px;">
                <div class="row">
                  <div class="col">
                    <img class="" src="assets/images/logo.jpeg" alt="Card image cap" width="130" height="130">
                    <div class="col">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </tr>

            <tr>
              <div class="card" style="width: 600px;">
                <div class="row">
                  <div class="col">
                    <img class="" src="assets/images/logo.jpeg" alt="Card image cap" width="130" height="130">
                    <div class="col">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </tr> -->