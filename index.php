<?php
include_once 'database-php.php';
include('Login_session.php');

?>
<?php
$msg_success="1";
 $error_msg="0";
$role="";
if(count($_POST)>0){
 if(isset($_POST['individual_submit_tracking'])){
  $indiv_name =$_POST['copy_individual_name'];
  $copy_individual_state=$_POST['copy_individual_state'];
  $indiv_phone = $_POST['copy_individual_phone'];
  $indiv_equity = $_POST['copy_individual_equity'];
  $indiv_platform=$_POST['indiv_trade_platform'];
  $copy_individual_det=$_POST['copy_individual_det'];
  $copy_individual_pass=$_POST['copy_individual_pass'];

 $query = "INSERT INTO copy_individual(full_name,state_of_residence,phone_number,account_equity,trading_platform,copy_indiv_trading_details,copy_indiv_password)
 VALUES('$indiv_name','$copy_individual_state','$indiv_phone','$indiv_equity','$indiv_platform','$copy_individual_det','$copy_individual_pass')";
 $run_query = mysqli_query($conn, $query);
 if($run_query == true){
 $msg_success = " Registration Successful";
 }else{
 $error_msg = " Registration Failed!";
 }

 }
 elseif (isset($_POST['company_submit_tracking'])) {
   // code...

   $company_full_name =$_POST['copy_company_full_name'];
   $copy_comp_state =$_POST['copy_comp_state'];

   $copy_company_name=$_POST['copy_company_name'];
   $company_phone = $_POST['copy_company_phone'];
   $company_equity = $_POST['copy_company_equity'];
   $company_platform = $_POST['company_trade_platform'];
   $copy_comp_det = $_POST['copy_comp_det'];
   $copy_comp_pass = $_POST['copy_comp_pass'];





   $query = "INSERT INTO copy_company(full_name,state_of_residence,company_name,phone_number,account_equity,trading_platform,copy_company_trading_details,copy_company_password)
   VALUES('$company_full_name','$copy_comp_state','$copy_company_name','$company_phone','$company_equity','$company_platform','$copy_comp_det','$copy_comp_pass')";
   $run_query = mysqli_query($conn, $query);
   if($run_query == true){
   $msg_success = " Registration Successful";
   }else{
   $error_msg = " Registration Failed!";
   }
 }
 elseif (isset($_POST['individual_submit_manage'])) {
   // code...

   $manage_individual_name =$_POST['manage_individual_name'];
   $manage_individual_state=$_POST['manage_individual_state'];
   $manage_individual_phone = $_POST['manage_individual_phone'];
   $manage_individual_equity = $_POST['manage_individual_equity'];
   $manage_trade_platform = $_POST['manage_indiv_trade_platform'];
   $manage_individual_det = $_POST['manage_individual_det'];
   $manage_individual_pass = $_POST['manage_individual_pass'];




   $query = "INSERT INTO individual_managment(individual_name,state_of_residence,account_equity,phone_number,trading_platform,indiv_manage_details,indiv_manage_password)
   VALUES('$manage_individual_name','$manage_individual_state','$manage_individual_equity','$manage_individual_phone','$manage_trade_platform','$manage_individual_det','$manage_individual_pass')";
   $run_query = mysqli_query($conn, $query);
   if($run_query == true){
   $msg_success = " Registration Successful";
   }else{
   $error_msg = " Registration Failed!";
   }
 }
 elseif (isset($_POST['company_submit_manage'])) {
   // code...

   $manage_company_name =$_POST['manage_company_name'];
   $manage_company_state=$_POST['manage_company_state'];
   $manage_company_phone = $_POST['manage_company_phone'];
   $manage_company_equity = $_POST['manage_company_equity'];
   $manage_trade_platform_comp = $_POST['manage_comp_trade_platform'];
   $manage_comp_det = $_POST['manage_comp_det'];
   $manage_comp_pass = $_POST['manage_comp_pass'];



   $query = "INSERT INTO company_managment(name,state_of_residence,account_equity,phone_number,trading_platform,company_manage_trading_details,company_manage_password)
   VALUES('$manage_company_name','$manage_company_state','$manage_company_equity','$manage_company_phone','$manage_trade_platform_comp','$manage_comp_det','$manage_comp_pass')";
   $run_query = mysqli_query($conn, $query);
   if($run_query == true){
   $msg_success = " Registration Successful";
   }else{
   $error_msg = " Registration Failed!";
   }
 }

 elseif (isset($_POST['boot_submit'])) {
   $post_boot="as";
   // code...
   $bootcamp=$_POST['bootcamp'];
   $boot_name =$_POST['bootcamp_name'];
   $boot_state=$_POST['boot_state'];
   $boot_trade = $_POST['boot_trade'];
   $boot_Gender = $_POST['boot_Gender'];
   $boot_phone = $_POST['boot_phone'];


   $query = "INSERT INTO learin_forex(class,full_name,state,trade_level,gender,phone_number)
   VALUES('$bootcamp','$boot_name','$boot_state','$boot_trade','$boot_Gender','$boot_phone')";
   $run_query = mysqli_query($conn, $query);
   if($run_query == true){
   $post_boot = " Registration Successful";
   }else{
   $error_msg = " Registration Failed!";
   }
 }

 elseif (isset($_POST['regular_submit'])) {
   // code...

   $regular_name =$_POST['regular_name'];
   $regular_state=$_POST['regular_state'];
   $regular_trade= $_POST['regular_trade'];
   $regular_Gender = $_POST['regular_Gender'];
   $regular_phone = $_POST['regular_phone'];
   $regular=$_POST['regular'];


   $query = "INSERT INTO learin_forex(class,full_name,state,trade_level,gender,phone_number)
   VALUES('$regular','$regular_name','$regular_state','$regular_trade','$regular_Gender','$regular_phone')";
   $run_query = mysqli_query($conn, $query);
   if($run_query == true){
   $msg_success = " Registration Successful";
   }else{
   $error_msg = " Registration Failed!";
   }
 }
 elseif (isset($_POST['regular2_submit'])) {
   // code...

   $regular2_name =$_POST['regular2_name'];
   $regular2_state=$_POST['regular2_state'];
   $regular2_trade= $_POST['regular2_trade'];
   $regular2_Gender = $_POST['regular2_Gender'];
   $regular2_phone = $_POST['regular2_phone'];
   $regular2=$_POST['regular2'];


   $query = "INSERT INTO learin_forex(class,full_name,state,trade_level,gender,phone_number)
   VALUES('$regular2','$regular2_name','$regular2_state','$regular2_trade','$regular2_Gender','$regular2_phone')";
   $run_query = mysqli_query($conn, $query);
   if($run_query == true){
   $msg_success = " Registration Successful";
   }else{
   $error_msg = " Registration Failed!";
   }
 }

 elseif (isset($_POST['week_submit'])) {
   // code...

   $week_name =$_POST['week_name'];
   $week_state=$_POST['week_state'];
   $week_trade= $_POST['week_trade'];
   $week_Gender = $_POST['week_Gender'];
   $week_phone = $_POST['week_phone'];
   $week=$_POST['week'];


   $query = "INSERT INTO learin_forex(class,full_name,state,trade_level,gender,phone_number)
   VALUES('$week','$week_name','$week_state','$week_trade','$week_Gender','$week_phone')";
   $run_query = mysqli_query($conn, $query);
   if($run_query == true){
   $msg_success = " Registration Successful";
   }else{
   $error_msg = " Registration Failed!";
   }
 }
}

?>
<?php
$query1 = "SELECT * FROM staff";
$results=mysqli_query($conn,$query1);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trading</title>
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

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



                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Every child yearns to learn</h5>
                            <h1>DEQ FOREX INSTITUTE</h1>
                            <p>Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales
                                his void unto last session for bite. Set have great you'll male grass yielding yielding
                                man</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Awesome <br> Feature</h2>
                        <p>Set have great you male grass yielding an yielding first their you're
                            have called the abundantly fruit were man </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Better Future</h4>
                            <p>Set have great you male grasses yielding yielding first their to
                                called deep abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Qualified Trainers</h4>
                            <p>Set have great you male grasses yielding yielding first their to called
                                deep abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Job Oppurtunity</h4>
                            <p>Set have great you male grasses yielding yielding first their to called deep
                                abundantly Set have great you male</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="img/learning_img.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>About us</h5>
                        <h2>Learning with Love
                            and Laughter</h2>
                        <p>Fifth saying upon divide divide rule for deep their female all hath brind Days and beast
                            greater grass signs abundantly have greater also
                            days years under brought moveth.</p>
                        <ul>
                            <li><span class="ti-pencil-alt"></span>Him lights given i heaven second yielding seas
                                gathered wear</li>
                            <li><span class="ti-ruler-pencil"></span>Fly female them whales fly them day deep given
                                night.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->



    <!--::Learn Forex::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Learn Forex</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_1.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Bootcamp</a>
                            <h4>NGN 80,000</h4>
                            <a href="course-details.html"><h3>Bootcamp Class</h3></a>

                <h5>Duration: 5 full working Days</h5>
                <button id="boot_butt" style="margin-top:20px;" class="btn_1" type="button" name="button">Enroll Now</button>
                        </div>

                    </div>
                </div>

              <!-- BootCamp Modal   -->
                <div style="margin-top:150px;" id="bootcamp_modal" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg" role="content">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <h2 class="modal-title">Bootcamp Class </h2>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
    <form  method="post">
    <div class="form-group">
    <label for="boot_name">Full Name</label>
    <input type="text" class="form-control" id="boot_name" name="bootcamp_name" placeholder="Enter Full Name" required>
    </div>
    <div class="form-group">
    <label for="boot_state">State</label>
    <input type="text" class="form-control" id="boot_state" name="boot_state" placeholder="Enter State" required>
    </div>


    <div class="form-group">
    <label for="boot_Gender">Gender:</label>

    <label class="radio-inline">
      <input  type="radio" name="boot_Gender"  value="Male">Male
    </label>

    <label class="radio-inline">
      <input type="radio" name="boot_Gender" value="Female">Female
    </label>
    </select>
    </div>
    <div class="form-group">
    <label for="boot_phone">"Phone number"</label>
    <input type="text" class="form-control" id="boot_phone" name="boot_phone" placeholder="Enter Phone number" required>
    </div>
    <div class="form-group">
    <label for="boot_trade">Trade Level:</label>

  <label class="radio-inline">
      <input  type="radio" name="boot_trade" checked value="Beginner">Beginner
    </label>

    <label class="radio-inline">
      <input type="radio" name="boot_trade" value="Intermediate">Intermediate
    </label>
    <label class="radio-inline">
      <input type="radio" name="boot_trade" value="Advance">Advance
    </label>
    <label class="radio-inline">
      <input type="radio" name="boot_trade" value="Expert">Expert
    </label>
  </select>
    </div>
    <!-- change the value and it will appear with the same name in the admin panel -->
    <input type="hidden" name="bootcamp" value="Bootcamp">
    <div  class="form-group">
    <input class="btn btn-primary" type="submit" name="boot_submit" value="Submit">

    </div>
    </form>


                  </div>
              </div>
          </div>
        </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                      <img src="img/special_cource_2.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Regular</a>
                            <h4>NGN 100,000</h4>
                            <a href="course-details.html"><h3>Regular Class</h3></a>

                <h5>Duration: One and half month</h5>
                <h5>Days:Wednesday, Fridays</h5>

                <button id="regular_butt" style="margin-top:20px;" class="btn_1" type="button" name="button">Enroll Now</button>
                        </div>

                    </div>
                </div>

                <!-- Regular Modal -->
                <div style="margin-top:150px;" id="regular_modal" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg" role="content">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <h2 class="modal-title">Regular Class </h2>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
      <form  method="post">
      <div class="form-group">
      <label for="regular_name">Full Name</label>
      <input type="text" class="form-control" id="regular_name" name="regular_name" placeholder="Enter Full Name" required>
      </div>
      <div class="form-group">
      <label for="regular_state">State</label>
      <input type="text" class="form-control" id="regular_state" name="regular_state" placeholder="Enter State" required>
      </div>


      <div class="form-group">
      <label for="boot_Gender">Gender:</label>

      <label class="radio-inline">
        <input  type="radio" name="regular_Gender"  value="Male">Male
      </label>

      <label class="radio-inline">
        <input type="radio" name="regular_Gender" value="Female">Female
      </label>
      </select>
      </div>
      <div class="form-group">
      <label for="regular_phone">"Phone number"</label>
      <input type="text" class="form-control" id="regular_phone" name="regular_phone" placeholder="Enter Phone number" required>
      </div>
      <div class="form-group">
      <label for="boot_trade">Trade Level:</label>

    <label class="radio-inline">
        <input  type="radio" name="regular_trade" checked value="Beginner">Beginner
      </label>

      <label class="radio-inline">
        <input type="radio" name="regular_trade" value="Intermediate">Intermediate
      </label>
      <label class="radio-inline">
        <input type="radio" name="regular_trade" value="Advance">Advance
      </label>
      <label class="radio-inline">
        <input type="radio" name="regular_trade" value="Expert">Expert
      </label>
    </select>
      </div>
      <!-- change the value and it will appear with the same name in the admin panel -->
      <input type="hidden" name="regular" value="Regular">
      <div  class="form-group">
      <input class="btn btn-primary" type="submit" name="regular_submit" value="Submit">

      </div>
      </form>


                  </div>
              </div>
          </div>
        </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_3.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Webinar</a>
                            <h4>NGN 150,000</h4>
                            <a href="course-details.html"><h3>Webinar Class</h3></a>
<h5>One-on-One scheduling</h5>
                <h5>Duration: 2 Months</h5>
                <button id="regular2_butt" style="margin-top:20px;" class="btn_1" type="button" name="button">Enroll Now</button>
                        </div>

                    </div>
                </div>
                <!-- Regular Modal -->
                <div style="margin-top:150px;" id="regular2_modal" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg" role="content">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <h2 class="modal-title">Webinar Class </h2>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
      <form  method="post">
      <div class="form-group">
      <label for="regular2_name">Full Name</label>
      <input type="text" class="form-control" id="regular2_name" name="regular2_name" placeholder="Enter Full Name" required>
      </div>
      <div class="form-group">
      <label for="regular2_state">State</label>
      <input type="text" class="form-control" id="regular2_state" name="regular2_state" placeholder="Enter State" required>
      </div>


      <div class="form-group">
      <label for="boot_Gender">Gender:</label>

      <label class="radio-inline">
        <input  type="radio" name="regular2_Gender"  value="Male">Male
      </label>

      <label class="radio-inline">
        <input type="radio" name="regular2_Gender" value="Female">Female
      </label>
      </select>
      </div>
      <div class="form-group">
      <label for="regular2_phone">"Phone number"</label>
      <input type="text" class="form-control" id="regular2_phone" name="regular2_phone" placeholder="Enter Phone number" required>
      </div>
      <div class="form-group">
      <label for="boot_trade">Trade Level:</label>

    <label class="radio-inline">
        <input  type="radio" name="regular2_trade" checked value="Beginner">Beginner
      </label>

      <label class="radio-inline">
        <input type="radio" name="regular2_trade" value="Intermediate">Intermediate
      </label>
      <label class="radio-inline">
        <input type="radio" name="regular2_trade" value="Advance">Advance
      </label>
      <label class="radio-inline">
        <input type="radio" name="regular2_trade" value="Expert">Expert
      </label>
    </select>
      </div>
      <!-- change the value and it will appear with the same name in the admin panel -->
      <input type="hidden" name="regular2" value="Webinar">
      <div  class="form-group">
      <input class="btn btn-primary" type="submit" name="regular2_submit" value="Submit">

      </div>
      </form>


                  </div>
              </div>
          </div>
        </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_1.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Weekend</a>
                            <h4>NGN 150,000</h4>
                            <a href=""><h3>Weekend Class</h3></a>

                <h5>Duration: 3 Months</h5>
                <button id="week_butt" style="margin-top:20px;" class="btn_1" type="button" name="button">Enroll Now</button>
                        </div>

                    </div>
                </div>

                <!-- weekend Modal -->
                <div style="margin-top:150px;" id="weekend_modal" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg" role="content">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <h2 class="modal-title">Weekend Class </h2>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
      <form  method="post">
      <div class="form-group">
      <label for="week_name">Full Name</label>
      <input type="text" class="form-control" id="week_name" name="week_name" placeholder="Enter Full Name" required>
      </div>
      <div class="form-group">
      <label for="week_state">State</label>
      <input type="text" class="form-control" id="week_state" name="week_state" placeholder="Enter State" required>
      </div>


      <div class="form-group">
      <label for="boot_Gender">Gender:</label>

      <label class="radio-inline">
        <input  type="radio" name="week_Gender"  value="Male">Male
      </label>

      <label class="radio-inline">
        <input type="radio" name="week_Gender" value="Female">Female
      </label>
      </select>
      </div>
      <div class="form-group">
      <label for="week_phone">"Phone number"</label>
      <input type="text" class="form-control" id="week_phone" name="week_phone" placeholder="Enter Phone number" required>
      </div>
      <div class="form-group">
      <label for="boot_trade">Trade Level:</label>

    <label class="radio-inline">
        <input  type="radio" name="week_trade" checked value="Beginner">Beginner
      </label>

      <label class="radio-inline">
        <input type="radio" name="week_trade" value="Intermediate">Intermediate
      </label>
      <label class="radio-inline">
        <input type="radio" name="week_trade" value="Advance">Advance
      </label>
      <label class="radio-inline">
        <input type="radio" name="week_trade" value="Expert">Expert
      </label>
    </select>
      </div>
      <!-- change the value and it will appear with the same name in the admin panel -->
      <input type="hidden" name="week" value="Weekend">
      <div  class="form-group">
      <input class="btn btn-primary" type="submit" name="week_submit" value="Submit">

      </div>
      </form>


                  </div>
              </div>
          </div>
        </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- learning part start-->
    <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h5>Advance feature</h5>
                        <h2>Our Advance Educator
                            Learning System</h2>
                        <p>Fifth saying upon divide divide rule for deep their female all hath brind mid Days
                            and beast greater grass signs abundantly have greater also use over face earth
                            days years under brought moveth she star</p>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <h4>Learn Anywhere</h4>
                                    <p>There earth face earth behold she star so made void two given and also our</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-stamp"></span>
                                    <h4>Expert Teacher</h4>
                                    <p>There earth face earth behold she star so made void two given and also our</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="img/advance_feature_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->





    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div id="#tracking_part" class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Copy Trading</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-lg-6">
                  <div class="single-home-blog">
                      <div class="card">
                          <img height="350px" src="img/blog/blog_3.png" class="card-img-top" alt="blog">
                          <div class="card-body">

<button id="copy_track_individual_butt" class="btn_1" type="button" name="button"><h3 style="color:whitesmoke" class="card-title">Individual copy Trading</h3> </button>

<div style="margin-top:30px;">
  <h5>Registration Fee : 25% of Account equity</h5>
  <h5>Minimum account Equity : $10,000</h5>
</div>
                          </div>
                      </div>
                  </div>
              </div>
              <div style="margin-top:70px;" id="copy_track_modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Individual Copy Trading </h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
<form  method="post">
<div class="form-group">
  <label for="copy_individual_name">Full Name</label>
  <input type="text" class="form-control" id="copy_individual_name" name="copy_individual_name" placeholder="Enter Full Name" required>
</div>
<div class="form-group">
  <label for="copy_individual_state">State of residence</label>
  <input type="text" class="form-control" id="copy_individual_state" name="copy_individual_state" placeholder="Enter State" required>
</div>
<div class="form-group">
  <label for="copy_individual_phone">Phone Number</label>
  <input type="text" class="form-control" id="copy_individual_phone" name="copy_individual_phone" placeholder="Enter Phone Number" required>
</div>
<div class="form-group">
  <label for="copy_individual_equity">Account Equity</label>
  <input type="text" class="form-control" id="copy_individual_equity" name="copy_individual_equity" placeholder="Enter Account Equity" required>
</div>
<div class="form-group">
<label for="boot_trade">Trade Level:</label>

<label class="radio-inline">
  <input  type="radio" name="indiv_trade_platform" checked value="Mt4">Mt4
</label>

<label class="radio-inline">
  <input type="radio" name="indiv_trade_platform" value="Mt5">Mt5
</label>
</select>
</div>
<div class="form-group">
  <label for="copy_individual_det">Trading Details</label>
  <input type="text" class="form-control" id="copy_individual_det" name="copy_individual_det" placeholder="Enter trading details" required>
</div>
<div class="form-group">
  <label for="copy_individual_pass">Trading account Password</label>
  <input type="password" class="form-control" id="copy_individual_pass" name="copy_individual_pass" placeholder="Enter Account Password" required>
</div>
<div  class="form-group">
  <input class="btn btn-primary" type="submit" name="individual_submit_tracking" value="Submit">

</div>
</form>


                </div>
            </div>
        </div>
      </div>
              <div class="col-sm-12 col-lg-6">
                  <div class="single-home-blog">
                      <div class="card">
                        <img height="350px" src="img/blog/blog_2.png" class="card-img-top" alt="blog">
                          <div class="card-body">
                            <button id="copy_track_individual_butt2" class="btn_1" type="button" name="button"><h3 style="color:whitesmoke" class="card-title">Corporate copy trading</h3> </button>
                            <div style="margin-top:30px;">
                              <h5>One time registration Fee- 25% of account equity</h5>
                              <h5>Minimum account Equity : $100,000</h5>
                            </div>

                          </div>
                      </div>
                  </div>
              </div>

              <div style="margin-top:70px;" id="copy_track_modal2" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Corporate copy trading </h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
      <form  method="post">
      <div class="form-group">
      <label for="copy_company_full_name">Full Name</label>
      <input type="text" class="form-control" id="copy_company_full_name" name="copy_company_full_name" placeholder="Enter Full Name" required>
      </div>
      <div class="form-group">
        <label for="copy_comp_state">State of residence</label>
        <input type="text" class="form-control" id="copy_comp_state" name="copy_comp_state" placeholder="Enter State" required>
      </div>
      <div class="form-group">
      <label for="copy_company_name">Company Name</label>
      <input type="text" class="form-control" id="copy_company_name" name="copy_company_name" placeholder="Enter Company Name" required>
      </div>
      <div class="form-group">
      <label for="copy_company_phone">Phone Number</label>
      <input type="text" class="form-control" id="copy_company_phone" name="copy_company_phone" placeholder="Enter Phone Number" required>
      </div>
      <div class="form-group">
      <label for="copy_company_equity">Account Equity</label>
      <input type="text" class="form-control" id="copy_company_equity" name="copy_company_equity" placeholder="Enter Account Equity" required>
      </div>
      <div class="form-group">
      <label for="boot_trade">Trade Level:</label>

      <label class="radio-inline">
        <input  type="radio" name="company_trade_platform" checked value="Mt4">Mt4
      </label>

      <label class="radio-inline">
        <input type="radio" name="company_trade_platform" value="Mt5">Mt5
      </label>
      </select>
      </div>
      <div class="form-group">
        <label for="copy_comp_det">Trading Details</label>
        <input type="text" class="form-control" id="copy_comp_det" name="copy_comp_det" placeholder="Enter Trading Details" required>
      </div>
      <div class="form-group">
        <label for="copy_comp_pass">Trading account Password</label>
        <input type="password" class="form-control" id="copy_comp_pass" name="copy_comp_pass" placeholder="Enter Account Password" required>
      </div>
      <div  class="form-group">
      <input class="btn btn-primary" type="submit" name="company_submit_tracking" value="Submit">

      </div>
      </form>


                </div>
            </div>
        </div>
      </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->


<!-- account managment -->
    <section class="blog_part section_padding">
        <div id="#tracking_part" class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Account managment</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-lg-6">
                  <div class="single-home-blog">
                      <div class="card">
                          <img src="img/manage1.jpg" class="card-img-top" alt="blog">
                          <div class="card-body">

<button id="manage_individual_butt" class="btn_1" type="button" name="button"><h3 style="color:whitesmoke" class="card-title">Individual Account</h3> </button>
<div style="margin-top:30px;">
  <h5>One time registration Fee- 10% of account equity</h5>
  <h5>Minimum account Equity : $10,000</h5>
  <h5>Profit sharing- 40/60 at end of the month</h5>
</div>
                        </div>
                      </div>
                  </div>
              </div>
              <div style="margin-top:70px;" id="manage_individual_modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Individual Acount </h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
    <form  method="post">
    <div class="form-group">
    <label for="manage_individual_name">Account name</label>
    <input type="text" class="form-control" id="manage_individual_name" name="manage_individual_name" placeholder="Enter Account Name" required>
    </div>
    <div class="form-group">
    <label for="manage_individual_state">State of residence</label>
    <input type="text" class="form-control" id="manage_individual_state" name="manage_individual_state" placeholder="Enter State of Residence " required>
    </div>
    <div class="form-group">
    <label for="manage_individual_phone">Phone Number</label>
    <input type="text" class="form-control" id="manage_individual_phone" name="manage_individual_phone" placeholder="Enter Phone Number" required>
    </div>
    <div class="form-group">
    <label for="manage_individual_equity">Account Equity</label>
    <input type="text" class="form-control" id="manage_individual_equity" name="manage_individual_equity" placeholder="Enter Account Equity" required>
    </div>
    <div class="form-group">
    <label for="boot_trade">Trade Level:</label>

    <label class="radio-inline">
      <input  type="radio" name="manage_indiv_trade_platform" checked value="Mt4">Mt4
    </label>

    <label class="radio-inline">
      <input type="radio" name="manage_indiv_trade_platform" value="Mt5">Mt5
    </label>
    </select>
    </div>
    <div class="form-group">
      <label for="manage_individual_det">Trading Details</label>
      <input type="text" class="form-control" id="manage_individual_det" name="manage_individual_det" placeholder="Enter trading details" required>
    </div>
    <div class="form-group">
      <label for="manage_individual_pass">Trading account Password</label>
      <input type="password" class="form-control" id="manage_individual_pass" name="manage_individual_pass" placeholder="Enter Account Password" required>
    </div>
    <div  class="form-group">
    <input class="btn btn-primary" type="submit" name="individual_submit_manage" value="Submit">

    </div>
    </form>


                </div>
            </div>
        </div>
      </div>
              <div class="col-sm-12 col-lg-6">
                  <div class="single-home-blog">
                      <div class="card">
                        <img height="521px" src="img/manage3.jpg" class="card-img-top" alt="blog">
                          <div class="card-body">
                            <button id="manage_company_butt" class="btn_1" type="button" name="button"><h3 style="color:whitesmoke" class="card-title">Company Account</h3> </button>
                            <div style="margin-top:30px;">
                              <h5>One time registration Fee- 10% of account equity</h5>
                              <h5>Minimum account equity- $100,000</h5>
                              <h5>Profit sharing- 40/60 at end of the month</h5>

                            </div>

                          </div>
                      </div>
                  </div>
              </div>

              <div style="margin-top:70px;" id="manage_company_modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Company Account </h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
      <form  method="post">
      <div class="form-group">
      <label for="manage_company_name">Company Name</label>
      <input type="text" class="form-control" id="manage_company_name" name="manage_company_name" placeholder="Enter Company Name" required>
      </div>
      <div class="form-group">
      <label for="manage_company_state">State of residence</label>
      <input type="text" class="form-control" id="manage_company_state" name="manage_company_state" placeholder="Enter State of Residence " required>
      </div>
      <div class="form-group">
      <label for="manage_company_phone">Phone Number</label>
      <input type="text" class="form-control" id="manage_company_phone" name="manage_company_phone" placeholder="Enter Phone Number" required>
      </div>
      <div class="form-group">
      <label for="manage_company_equity">Account Equity</label>
      <input type="text" class="form-control" id="manage_company_equity" name="manage_company_equity" placeholder="Enter Account Equity" required>
      </div>
      <div class="form-group">
      <label for="boot_trade">Trade Level:</label>

      <label class="radio-inline">
        <input  type="radio" name="manage_comp_trade_platform" checked value="Mt4">Mt4
      </label>

      <label class="radio-inline">
        <input type="radio" name="manage_comp_trade_platform" value="Mt5">Mt5
      </label>
      </select>
      </div>
      <div class="form-group">
        <label for="manage_comp_det">Trading Details</label>
        <input type="text" class="form-control" id="manage_comp_det" name="manage_comp_det" placeholder="Enter trading details" required>
      </div>
      <div class="form-group">
        <label for="manage_comp_pass">Trading account Password</label>
        <input type="password" class="form-control" id="manage_comp_pass" name="manage_comp_pass" placeholder="Enter Account Password" required>
      </div>
      <div  class="form-group">
      <input class="btn btn-primary" type="submit" name="company_submit_manage" value="Submit">

      </div>
      </form>


                </div>
            </div>
        </div>
      </div>

            </div>
        </div>
    </section>
    <!--::Account managment end::-->


    <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container">

          <div class="section-title">
            <h2 data-aos="fade-in">Team</h2>
          </div>

          <div class="row">
            <?php
            while($row_res = mysqli_fetch_array($results)){
          echo "<div class='col-xl-3 col-lg-4 col-md-6'>
              <div class='member' data-aos='fade-up'>
                <div class='pic'><img src='images/".$row_res['image']."' ></div>
                <h4>{$row_res['name']}</h4>
                <span>{$row_res['role']}</span>
                <div class='social'>
                  <a href='{$row_res['fb_link']}'><i class='icofont-twitter'></i></a>
                  <a href='{$row_res['whatsapp']}'><i class='icofont-facebook'></i></a>
                  <a href='{$row_res['linkedin']}'><i class='icofont-instagram'></i></a>
                  <a href='{$row_res['insta']}'><i class='icofont-linkedin'></i></a>
                </div>
              </div>
            </div>";
}
 ?>





          </div>

        </div>
      </section><!-- End Team Section -->


          <!-- footer part start-->
          <footer class="footer-area">
              <div class="container">
                  <div class="row justify-content-center">

                      <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="single-footer-widget footer_2">
                            <h4>Contact us</h4>
                            <div class="contact_info">
                                <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                                <p><span> Phone :</span> </p>
                                <p><span> Email : </span>cbweb@yahoo.com </p>
                            </div>
                        </div>

                      </div>
                      <div class="col-xl-3 col-sm-6 col-md-4">
                        <div class="single-footer-widget footer_2">
                          <h4>Social Links</h4>

                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                      </div>
                  </div>

              </div>

          </footer>
          <!-- footer part end-->



    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script>


    $("#copy_track_individual_butt").click(function() {

      $('#copy_track_modal').modal('show')

    })
    $("#copy_track_individual_butt2").click(function() {

      $('#copy_track_modal2').modal('show')

    })

    $("#boot_butt").click(function() {

      $('#bootcamp_modal').modal('show')

    })
    $("#regular_butt").click(function() {

      $('#regular_modal').modal('show')

    })
    $("#regular2_butt").click(function() {

      $('#regular2_modal').modal('show')

    })
    $("#week_butt").click(function() {

      $('#weekend_modal').modal('show')

    })
    $("#manage_individual_butt").click(function() {

      $('#manage_individual_modal').modal('show')

    })
    $("#manage_company_butt").click(function() {

      $('#manage_company_modal').modal('show')

    })

</script>
</body>

</html>
