<?php
include_once 'database-php.php';

?>
<?php
$query1 = "SELECT * FROM copy_individual";
$results=mysqli_query($conn,$query1);

$query2 = "SELECT * FROM copy_company";
$results2=mysqli_query($conn,$query2);


 ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trading</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>

                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="admin.php">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Login</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


        <div style="margin-top:100px;" class="container">
            <div class="row align-items-center">


                      <div class="container">
                          <div class="row">

                            <div class="col-sm-6 col-lg-6">
<h1 style="text-align: center;">individual Details</h1>
<?php
while ($row_res = mysqli_fetch_array($results)){

echo "<div class='col-sm-6 col-lg-12'>";
echo "<div class='card'>";
echo "<div class='card-body'>";
echo "<div class='single_feature'>";
  echo "<div class='single_feature_part'>";

    echo "<h3>Name : {$row_res['full_name']}</h3>";
    echo "<h3>Phone number : {$row_res['phone_number']}</h3>";
  echo "<h3>Account Equity : {$row_res['account_equity']}</h3>";


echo "</div>";
echo " </div>";
echo "</div>";
echo "</div>";

  echo "</div>";
}
?>
</div>

<div  class="col-sm-6 col-lg-6">
<h1 style="text-align: center;">Company Details</h1>

<?php
while ($row_res2 = mysqli_fetch_array($results2)){

echo "<div class='col-sm-6 col-lg-12'>";
echo "<div class='card'>";
echo "<div class='card-body'>";
  echo "<div class='single_feature'>";
    echo "<div class='single_feature_part'>";

      echo "<h3>Name : {$row_res2['full_name']}</h3>";
      echo "<h3>Company name : {$row_res2['company_name']}</h3>";

      echo "<h3>Phone Number : {$row_res2['phone_number']}</h3>";
    echo "<h3>Account equity : {$row_res2['account_equity']}</h3>";


echo "</div>";
  echo " </div>";
  echo "</div>";
  echo "</div>";

    echo "</div>";
}
?>
</div>



                          </div>
                      </div>

            </div>
        </div>

    </body>
