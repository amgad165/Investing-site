<?php
include_once 'database-php.php';

?>
<?php
$query1 = "SELECT * FROM learin_forex";
$results=mysqli_query($conn,$query1);


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
                                    <a class="nav-link" href="index.php">Home</a>

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


<h1  class="co-sm-12 col-lg-12" style="text-align: center;">Learn forex Details</h1>

<?php
while ($row_res = mysqli_fetch_array($results)){

echo "<div style='margin-top:50px;' class='col-sm-6 col-lg-4'>";
echo "<div class='card'>";
echo "<div class='card-body'>";
echo "<div class='single_feature'>";
  echo "<div class='single_feature_part'>";

  echo "<h3>Class : {$row_res['class']}</h3>";

    echo "<h3>Name : {$row_res['full_name']}</h3>";
    echo "<h3>State: : {$row_res['state']}</h3>";
    echo "<h3>Trade level : {$row_res['trade_level']}</h3>";
    echo "<h3>Gender : {$row_res['gender']}</h3>";

    echo "<h3>Phone number : {$row_res['phone_number']}</h3>";


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

    </body>
