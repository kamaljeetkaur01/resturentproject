<?php
$msg="";

include("include/settings.php");
if(isset($_POST["btnUpdate"]))
  {
     if(($_POST["txtpass1"]!=null) && ($_POST["txtpass2"]!=null))
    {
        if($_POST["txtpass1"]== $_POST["txtpass2"])
          {         
          
            $sql=$con->prepare("update signup set Password=? where User_Id=?");
            $sql->bind_param("ss",$_POST["txtpass1"],$_SESSION["user_id"]);
            $sql->execute();
            $sql->close();
            
            $msg= "Updation done";
          }
          else
          {
            $msg= "Passwords don't match";
          }
    }
   
    else
    {
      $msg= "Fields kept empty";
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
    height: 830px;
    /*background-size: cover;*/
    background-size:100% 100%;
    background-image: url('redflwr.jpg');
  }
 </style>     
</head>
<body>
  <div class="forget">
<div class="container" style="border:solid;width:318px;background:white;height:297px;position:absolute;margin-top: 113px; margin-left: 87px;">
<div class="row">
<form action="" method="post">
<br>
<div class="col-sm-12">
<div class="form-group">
User Name
<input type="text" name="txtName"  class="form-control" value="<?php echo $_SESSION["user_name"]; ?>">
</div>
</div>

<div class="col-sm-12">
<div class="form-group">
 New Password
<input type="password" name="txtpass1"   class="form-control"/>
</div>
</div>

<div class="col-sm-12">
<div class="form-group">
 Confirm Password
<input type="password" name="txtpass2"  class="form-control"/>
</div>
</div>

<div class="col-sm-6">
<div class="form-group"></div>
<input type="submit" value="Update" name="btnupdate" class="form-control"  style="width:87px;background-color: rgb(21, 123, 25);color:white;" />
</div>

</form>
</div>
</div>
 
</div>
</body>
</html>