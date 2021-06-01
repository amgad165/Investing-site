<?php
include_once 'database-php.php';

?>
<?php
$query1 = "SELECT * FROM individual_managment";
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
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
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
    <!-- using online links -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
           integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
           integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
       <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css"></head>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="side.css">
    <!-- MDBootstrap Datatables  -->
<link href="css/addons/datatables.min.css" rel="stylesheet">
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="js/addons/datatables.min.js"></script>
<link rel="stylesheet" href="admin.css">


</head>
<body>
    <!--::header part start::-->


    <h1 style="text-align:center;margin-top:50px;">Individual managment trading</h1>
    <div class="row">

      <div class="col-lg-3 col-sm-12">



                <div class="page-wrapper chiller-theme toggled">
                  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                    <i class="fas fa-bars"></i>
                  </a>
                  <nav id="sidebar" class="sidebar-wrapper">
                    <div class="sidebar-content">
                      <div class="sidebar-brand">
                        <a href="#">Admin sidebar</a>
                        <div id="close-sidebar">
                          <i class="fas fa-times"></i>
                        </div>
                      </div>
                      <div class="sidebar-header">
                        <div class="user-pic">
                          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture">
                        </div>
                        <div class="user-info">
                          <span class="user-name">cbweb
                            <strong>Tech</strong>
                          </span>
                          <span class="user-role">Administrator</span>
                          <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                          </span>
                        </div>
                      </div>
                      <!-- sidebar-header  -->

                      <!-- sidebar-search  -->
                      <div class="sidebar-menu">
                        <ul>
                          <li class="header-menu">
                            <span>General</span>
                          </li>
                          <li>
                            <a href="index.php">
                              <i class="fa fa-home"></i>
                              <span>Home</span>
                            </a>
                          </li>
                          <li>
                            <a  href="admin.php">
                              <i class="fa fa-globe"></i>
                              <span>Admin</span>
                            </a>
                          </li>
                          <li class="sidebar-dropdown">
                            <a  href="#">
                              <i class="fa fa-user"></i>
                              <span>Copy trading</span>
                            </a>
                            <div class="sidebar-submenu">
                              <ul>
                                <li>
                                  <a  href="individual_copy.php">Individual Trading
                                  </a>
                                </li>
                                <li><a href="company_copy.php">Company Trading</a></li>


                              </ul>
                            </div>
                          </li>
                          <li class="sidebar-dropdown">
                            <a href="#">
                              <i class="fa fa-school"></i>
                              <span>Lean Forex</span>
                            </a>
                            <div class="sidebar-submenu">
                              <ul>
                                <li>
                                <a href="bootcamp.php">Bootcamp Class</a>
                                </li>
                                <li>
                                <a href="regular.php">Regular Class</a>
                                </li>
                                <li>
                                  <a href="webinar.php">Webinar Class</a>
                                </li>
                                <li>
                                  <a href="weekend.php">Weekend Class</a>
                                </li>
                              </ul>
                            </div>
                          </li>
                          <li class="sidebar-dropdown">
                            <a id="active" href="#">
                              <i class="far fa-gem"></i>
                              <span>account manage</span>
                            </a>
                            <div class="sidebar-submenu">
                              <ul>
                                <li><a id="active" href="individual_managment.php">Individual Account</a></li>

                                <li><a href="company_managment.php">Company Account</a></li>


                              </ul>
                            </div>
                          </li>
                          <li>
                            <a  href="staff.php">
                              <i class="fa fa-users"></i>
                              <span>Add staff</span>
                            </a>
                          </li>
                          <li>
                            <a href="logout.php">
                              <i class="fa fa-sign-out-alt"></i>
                              <span>Logout</span>
                            </a>
                          </li>

                      <!-- sidebar-menu  -->
                    </div>
                    <!-- sidebar-content  -->

                  </nav>
                  <!-- sidebar-wrapper  -->

                  <!-- page-content" -->
                </div>

  </div>
  <div class="col-lg-8 col-sm-12">



    <table id="dtBasicExample" class="table table-striped table-bordered table-sm rwd-table" cellspacing="0" width="100%">
      <thead>
            <tr>
      <th>Name</th>
      <th>State of Residence</th>
      <th>Acount Equity</th>
      <th>Phone Number</th>
      <th>Trading Platform</th>
      <th>Trading details</th>
      <th>Account Password</th>

    </tr>
  </thead>
      <?php
      while ($row_res = mysqli_fetch_array($results)){
    echo " <tr>
  <td >{$row_res['individual_name']}</td>
  <td >{$row_res['state_of_residence']}</td>
      <td >{$row_res['account_equity']}</td>
      <td >{$row_res['phone_number']}</td>
      <td >{$row_res['trading_platform']}</td>
      <td>{$row_res['indiv_manage_details']}</td>
      <td >{$row_res['indiv_manage_password']}</td>

        </tr>";
      }
      ?>


  </table>
    </div>

        <script src="side.js" charset="utf-8"></script>
        <script src="admin.js" charset="utf-8"></script>
        <script type="text/javascript">
        // Basic example

        // Basic example
    $(document).ready(function () {
      $('#dtBasicExample').DataTable({
        "pagingType": "full_numbers" // "simple" option for 'Previous' and 'Next' buttons only
      });
      $('.dataTables_length').addClass('bs-select');
    });
        </script>
        </body>
