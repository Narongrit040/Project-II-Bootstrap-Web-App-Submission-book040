<?php
echo "hello";
//echo $_POST['user'];
//echo $_POST['passw'];
echo '<br>';
session_start();
$connect =mysqli_connect("localhost","id1501595_book","5830213040","id1501595_book");
$sql='select*from customer where customer_id="'.$_POST['user'].'"AND password="'.$_POST['passw'].'"';

$result=mysqli_query($connect,$sql);
$numrows=mysqli_num_rows($result);

if ($numrows==0) {


  //echo "please check username and password";
  echo '<form name=frm action="login.php" method="post">';

  echo '<input type="hidden" name="che" value="'.$row[1].'" >';


  header("location:login.php");
}else{
  while($row=mysqli_fetch_array($result,MYSQLI_NUM)){

      $_SESSION["User"]=$row[0];
      echo $_SESSION["User"];
      session_write_close();
        header("location:index.php");
  }
  mysqli_close($connect);
}
 ?>
