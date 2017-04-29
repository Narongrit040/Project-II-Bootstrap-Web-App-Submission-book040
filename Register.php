<?php
session_start();
if($_SESSION["User"] == null){

}else{
  header("location:index.php");
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
    <script type='text/javascript'>






    function check_num1(input){
      if(input.value.length<6 || input.value.length>15){
        alert("Please use username between 6 and 20 characters.");

      }
    }
    function check_num2(input){
      if(input.value.length<6 || input.value.length>15){
        alert("Please use password between 6 and 20 characters.");

      }
    }
    function check_letters(input){

    var regex = /[^a-z]/gi;
    input.value = input.value.replace(regex, "");

    }

    </script>

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
                    <div class="intro-text">
                        <h3>Register</h3>
                        <hr class="star-light">

                        <body>
                          <center>
                          Register Infomation<br><br>
                          </center>
<center><table border="0"><tr><td><center>





                          <form name= "frm" action="RegisterCheck.php" method="post" >
                          <div id='text_left' class='textcon'>Username<br>
                          <input type="text" name="id" id="id" class="boxregi"   onblur='check_num2(this)' required><br>

                        Password<br>
                          <input type="text" name="pass" class="boxregi"  onblur='check_num2(this)' required><br>
                            Firstname<br>
                            <input type="text" name="Fn" class="boxregi" placeholder="Letter only." required onKeyUp="check_letters(this)"><br>
                             Lastname<br>
                            <input type="text" name="Ln" class="boxregi" placeholder="Letter only." required onKeyUp="check_letters(this)"><br>
                             Gender<br>
                             <select name="Gen" class="boxradio" placeholder="Gender" >
  <option  value="men">Men</option>
  <option  value="Women">Women</option>
</select><br>
                            Address
                            <input type="text" name="Ad"  class="boxregi" required><br>
                            City
                            <input type="text" name="Ci"  class="boxregi" required><br>
                          Zip
                            <input type="text" name="Zi" class="boxregi" required><br>
                            Phone
                            <input type="text" name="Ph" class="boxregi" required onKeyUp="if(isNaN(this.value)){ alert('Number only!'); this.value='';}"/><br>
                          Email
                            <input type="email" name="Em" placeholder="jane.doe@example.com"class="boxregi" required><br>

</div></center>
<td></tr>
</table></center>

                            <br><br>

                            <input type="submit" value="Register" class="btn-login">&nbsp;&nbsp;<br><br>

                          </div>

                            </form>

                        </body>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>


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
