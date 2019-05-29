<?php
 $con=new mysqli("localhost","root","","restaurant1");
 if(!$con)
 {
 	echo"error in connection".mysqli_connect_errorno();
 	exit();
 }
 function baseurl()
 {
 	return "http://localhost/manpreet/";
 }
  session_start();
  ?>