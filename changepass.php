<?php 
include("include/settings.php");
// $msg="";

 if(isset($_POST['submit']))
 {
          $sql=$con->prepare("select * from signup where User_Name=?");
          $sql->bind_param("s",$_POST['txtName']);
          $sql->execute();
          $sql->bind_result($User_Id,$User_Name,$Phone_Number,$Password,$Confirmpassword,$Email,$Fruit,$Teacher);
          $sql->fetch();
          $_SESSION['user_name']=$User_Name;
           $_SESSION['user_id']=$User_Id;
        if(($Fruit==$_POST['txtfruit'])&&($Teacher==$_POST['txtteach']))
        {
          echo"hello";
          header("location:newpass.php");
        }
        else
        {
          echo"please enter the correct values";
        }
           
           
 }
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <style type="text/css">
 	.forget
 	{
 		height: 827px;
 		/*background-size: cover;*/
 		background-size:100% 100%;
    background-image: url('blackwall.jpg');
 	}
 </style>     
</head>
<body>
  <div class="forget">
<div class="container" style="border:solid;width:351px;color:white;height:324px;position:absolute;margin-top: 146px; margin-left: 863px;">
<div class="row">
<form action="" method="post">
<br>
<div class="col-sm-12">
<div class="form-group">
User Name
<input type="text" name="txtName"   class="form-control"/>
</div>
</div>

<div class="col-sm-12">
<div class="form-group">
 what's your favourite fruit?
<input type="text" name="txtfruit"   class="form-control"/>
</div>
</div>

<div class="col-sm-12">
<div class="form-group">
 what's your favourite teacher name?
<input type="text" name="txtteach"  class="form-control"/>
</div>
</div>

<div class="col-sm-6">
<div class="form-group"><br>
<input type="submit" value="Submit" name="submit" class="btn btn-warning form-control" style="border-color:#f44336;background-color: rgb(233, 30, 180);width: 100px;font-size: 19px;height:36px;margin-left: 102px;" />
</div>
</div>

</form>
</div>
</div>
    <img src="forgot.png" style="margin-left:189px;margin-top:163px;">
</div>
</body>
</html>