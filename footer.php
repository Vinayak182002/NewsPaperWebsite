<?php 
  
// session_start();
   
// if(isset($_SESSION['views']))
//     $_SESSION['views'] = $_SESSION['views']+1;
// else
//     $_SESSION['views']=1;
?>


<html>

<head>
    <!--Done by Sakshi @ 05/08/2021-->
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="assests/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/social.css">
    <style>
        ul#menu li {
            display: inline;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 5;
            overflow: hidden;

        }

        li a {

            color: white;
            padding: 15px;
            text-decoration: none;
        }        
    </style>
</head>

<body>
    <footer class="footer" style="background-color: black;">
        <div class="container">
            <div class="row text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h3 class="font-weight-bold text-white">| Categories</h3><br>
                        <ul id="menu">
                            <li><a href="#" class="text-white">Cities</a></li>
                            <li><a href="#" class="text-white">Maharashtra</a></li>
                            <li><a href="#" class="text-white">India</a></li>

                            <li><a href="#" class="text-white">International</a></li>
                            <li><a href="#" class="text-white">Sports</a></li>

                            <li><a href="#" class="text-white">Other</a></li>
                        </ul>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h3 class="font-weight-bold text-white">| About Us</h3><br>
                    <div class="footertext container1 text-white">
                        <h4>News Paper</h4>
                        <p>For everyone</p>
                    </div>
                </div>
            </div>
        </div>

      

        <section class="socialMedia">
            <ul class="sci">
                <li data-text="Facebook">
                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li data-text="Youtube">
                    <a href="#" class="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li data-text="Twitter">
                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li data-text="Instagram">
                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
            </ul>
        </section>
        <!-- <div class="bg-dark text-lg-start text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <?php  //echo"Total views to this website are ".$_SESSION['views']; ?>
        </div> -->
        <!-- Footer copyright section -->
       
        <div class="bg-dark text-lg-start text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Copyright © All rights reserved. Crafted by <a href="https://softmedics.co.in" target="_blank" rel="nofollow" class="text-white">|Softmedics</a>.
        </div>
    </footer>
</body>

</html>