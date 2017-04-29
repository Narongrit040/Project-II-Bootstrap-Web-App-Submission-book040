<?php
session_start();
if($_SESSION["User"] == null){

}else{
  header("location:index.php");
}
 ?>
<?php
//echo $_POST['id'];
//echo '<br>';
//echo $_POST['pass'];
//echo '<br>';
//echo $_POST['Fn'];
//echo '<br>';
//echo $_POST['Ln'];
//echo '<br>';
//echo $_POST['Gen'];
//echo '<br>';
//echo $_POST['Ad'];
//echo '<br>';
//echo $_POST['Ci'];
//echo '<br>';
//echo $_POST['Zi'];
//echo '<br>';
//echo $_POST['Ph'];
//echo '<br>';
//echo $_POST['Em'];
//echo '<br>';

$connect = mysqli_connect("localhost","id1501595_book","5830213040","id1501595_book");
$sql = 'SELECT customer_id FROM id1501595_book.customer where customer_id="'.$_POST['id'].'";';
$result = mysqli_query($connect,$sql);
if (!$result){
	//echo mysqli_error().'<br>';

}else{

									while ($row = mysqli_fetch_assoc($result)){
											//echo '<tr>';
												while(list($key,$value)=each($row)){
													if($value==''){//echo '<td>'.'&nbsp;'.'</td>';
													}
													else{echo '<td>'.$value.'</td>';

														header("location:Register.php");
													}
												}
											//echo'</tr>';
										}
										//echo '</table>';
mysqli_close($connect);
}
//---------------------------
$connect = mysqli_connect("localhost","id1501595_book","5830213040","id1501595_book");
$sql ='INSERT INTO customer VALUES('
	.'"'.$_POST['id'].'",'
	.'"'.$_POST['pass'].'",'
	.'"'.$_POST['Fn'].'",'
	.'"'.$_POST['Ln'].'",'
	.'"'.$_POST['Gen'].'",'
  .'"'.$_POST['Ad'].'",'
  .'"'.$_POST['Ci'].'",'
  .'"'.$_POST['Zi'].'",'
  .'"'.$_POST['Ph'].'",'
	.'"'.$_POST['Em'].'");';
	$result = mysqli_query($connect,$sql);
	mysqli_close($connect);
  $connect = mysqli_connect("localhost","id1501595_book","5830213040","id1501595_book");
	$sql = 'select * from customer';
	$result = mysqli_query($connect,$sql);
	if (!$result){
		//echo mysqli_error().'<br>';
		die('Can not access database!');
	}else{
		//echo'<table border = "1" cellpading = "0" cellspacing = "0">';
		//echo '<tr>';
		//echo '<td>';
		//echo 'customer_id';
		//echo '</td>';

		//echo '<td>';
		//echo 'password';
		//echo '</td>';

		//echo '<td>';
		//echo 'Fname';
		//echo '</td>';

		//echo '<td>';
		//echo 'Lname';
		//echo '</td>';

		//echo '<td>';
		//echo 'Gender';
		//echo '</td>';

		//echo '<td>';
		//echo 'address';
		//echo '</td>';

    		//echo '<td>';
    		//echo 'city';
    		//echo '</td>';

        		//echo '<td>';
        		//echo 'zip';
        		//echo '</td>';

            		//echo '<td>';
            		//echo 'mobile';
            		//echo '</td>';

                		//echo '<td>';
                		//echo 'email';
                		//echo '</td>';

                    while ($row = mysqli_fetch_assoc($result)){
                    		//echo '<tr>';
                    			while(list($key,$value)=each($row)){
                    				if($value==''){//echo '<td>'.'&nbsp;'.'</td>';
                    				}
                    				else{//echo '<td>'.$value.'</td>';
                    				}
                    			}
                    		//echo'</tr>';
                    	}
                    	//echo '</table>';
	mysqli_close($connect);
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">
    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">Book Shop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="store_page.php">Store</a>
                    </li>
										<?php if ($_SESSION["User"] == null){
											echo'<li class="page-scroll">';
												echo  '<a href="login.php">Login</a>';
										echo  '</li>';

										echo'<li class="page-scroll">';
											echo  '<a href="Register.php">Register</a>';
									echo  '</li>';
									}else {
										echo'<li class="page-scroll">';
											echo  '<a href="logout.php">logout</a>';
									echo  '</li>';
								}?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">

                    <img class="img-responsive" src="img/check.png" alt="">
                  </div>
                    <div class="intro-text">
                        <h1 class="name"> Complete</h1>
                        <hr class="star-light">

                          <form name=frm action="check.php" method="post">
        <!-- input user -->

      <!-- at time to page -->
<META HTTP-EQUIV="Refresh" CONTENT="6; URL=index.php">
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
