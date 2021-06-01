<?php
include_once 'database-php.php';

?>
<?php
// Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['add_staff'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text

  	// image file directory
  	$target = "images/".basename($image);
    $staff_name =$_POST['staff_name'];
    $staff_role =$_POST['staff_role'];
    $fb_link =$_POST['fb_link'];
    $whatsapp =$_POST['whatsapp'];
    $linkedin =$_POST['linkedin'];
    $insta =$_POST['insta'];


  	$sql = "INSERT INTO staff(name,role,fb_link,whatsapp,linkedin,insta,image) VALUES('$staff_name','$staff_role','$fb_link','$whatsapp','$linkedin','$insta','$image')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
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

<div style="margin-top:100px" class="container">
  <?php echo $msg; ?>
<form   method="post" enctype="multipart/form-data">



  <div class="form-group">
  <label for="staff_name">Name</label>
  <input type="text" class="form-control" id="staff_name" name="staff_name" placeholder="Enter   Name" required>
  </div>

  <div class="form-group">
  <label for="staff_role">Role</label>
  <input type="text" class="form-control" id="staff_role" name="staff_role" placeholder="Enter Role" required>
  </div>

  <div class="form-group">
  <label for="fb_link">facebook Link</label>
  <input type="text" class="form-control" id="fb_link" name="fb_link" placeholder="Enter Facebook link" required>
  </div>
  <div class="form-group">
  <label for="whatsapp">Whatsapp</label>
  <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Whatsapp number" required>
  </div>
  <div class="form-group">
  <label for="linkedin">Linkedin Link</label>
  <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Linkedin account" required>
  </div>
  <div class="form-group">
  <label for="insta">Instagram Link</label>
  <input type="text" class="form-control" id="insta" name="insta" placeholder="Instgram account" required>
  </div>
  <div class="form-group">
  	  <input type="file" name="image">
  	</div>
  <input class="btn btn-secondary" type="submit" name="add_staff" value="Add staff">
</form>
</div>

    </body>
