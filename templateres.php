<?php
  /* signup code start here*/
include("include\settings.php");
$msg="";

if(isset($_POST['btnReg']))
{
 $sql=$con->prepare("insert into user_login(user_name,password)values(?,?)");
          $sql->bind_param("ss",$_POST["txtuse"],$_POST["txtPass"]);
          $sql->execute();
          $sql->close();
          $sql=$con->prepare("select max(user_id) from user_login");
          $sql->execute();
          $sql->bind_result($id);
          $sql->fetch();
          $sql->close();  
        
          $sql1=$con->prepare("insert into signup(User_Id,User_Name,Phone_Number,Password,Confirmpassword,Email,Fruit,Teacher)values(?,?,?,?,?,?,?,?)");
          $sql1->bind_param("isssssss",$id,$_POST["txtuse"],$_POST["txtpn"],$_POST["txtPass"],$_POST["txtConfirmpassword"],$_POST["txtEmail"],$_POST["txtFood"],$_POST["txtTech"]);
          $sql1->execute();
          $sql1->close();
}
   /* login code start here*/
if(isset($_POST['btnLogin']))
{

  if(trim($_POST['txtName'])!=null && trim($_POST['txtPassword'])!=null)
    {
      $sql=$con->prepare("select * from user_login where user_name=?");
      $sql->bind_param("s",$_POST['txtName']);
      $sql->execute();
      $sql->bind_result($userid,$username,$password);
      if($sql->fetch()>0 && $password==$_POST['txtPassword'])
      {
        $_SESSION['userid']=$userid;
        $_SESSION['username']=$username;
        
        
          header("location:".baseurl()."index1.html");
        
      }
      else
      {
        echo"Password don't match";
      }
    }
    else
    {
      echo"fields kept empty";
    }
}
  /* booktable code start here*/
if(isset($_POST['btnSubmit']))
{ 
  if(($_POST["txtname"]!=null)&& ($_POST["txtEmail2"]!=null)&& ($_POST["txtNumber"]!=null)&& ($_POST["txtDate"]!=null)&& ($_POST["txttime"]!=null)&& ($_POST["txtpeople"]!=null)&& ($_POST["txtlocation"]!=null))
  {  
          $sql=$con->prepare("insert into booktable(Name,Email,Contact_number,Dated,Timing,People,Location,Loc_Value)values(?,?,?,?,?,?,?,?)");
          $sql->bind_param("sssssiss",$_POST["txtname"],$_POST["txtEmail2"],$_POST["txtNumber"],$_POST["txtDate"],$_POST["txttime"],$_POST["txtpeople"],$_POST["txtlocation"],$_POST['txtlocvalue']);
          $sql->execute();
          $sql->close();
          $msg="Your table is booked";
 }
  else                                                     
  {
    /*echo"Fields can't be empty";*/
  }
  }
  /* music code start here*/
   if(isset($_POST['btnBook']))
{ 
  if(($_POST["txtName1"]!=null)&& ($_POST["txtphone2"]!=null)&& ($_POST["txtemail"]!=null)&& ($_POST["txtcity"]!=null)&& ($_POST["txtdate"]!=null)&& ($_POST["txtItem"]!=null)&& ($_POST["txtperson"]!=null))
  {  
          $sql=$con->prepare("insert into music(Name,Phone_number,Email_id,City,Dated,Time,People)values(?,?,?,?,?,?,?)");
          $sql->bind_param("ssssssi",$_POST["txtName1"],$_POST["txtphone2"],$_POST["txtemail"],$_POST["txtcity"],$_POST["txtdate"],$_POST["txtItem"],$_POST["txtperson"]);
          $sql->execute();
          $sql->close();
          $msg="Your Event is booked";
  }
  else                                                     
   {
     echo"Fields can't be empty";
   }
}
/*music code is end here*/

/* code for contact page is start here*/
     if(isset($_POST['btnContact']))
{ 
  if(($_POST["txtName3"]!=null)&& ($_POST["txtPhone3"]!=null)&& ($_POST["txtEmail3"]!=null)&& ($_POST["txtmsg"]!=null))
  {  
          $sql=$con->prepare("insert into contact(Name,Phone_Number,Email,Message)values(?,?,?,?)");
          $sql->bind_param("ssss",$_POST["txtName3"],$_POST["txtPhone3"],$_POST["txtEmail3"],$_POST["txtmsg"]);
          $sql->execute();
          $sql->close();
          $msg="Your Event is booked";
  }
  else                                                     
   {
     echo"Fields can't be empty";
   }
}
 
   
?>
<!DOCTYPE html>
<html>
<head>
<title> Title </title>
  <script src="val_function.js" type="text/javascript">   
    </script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap.min.css">  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script>
   function validate()
      {
        var a= document.getElementById('1').value;
        var b= document.getElementById('2').value;
        var d= document.getElementById('3').value;
        var c= document.getElementById('4').value;
        var f=true;
        var m="";
        
        if(a==null || a=="")
        {
          m+="Please enter the correct value in the name field\n";
          f=false;
        }
        if(b.length<8 || b.length>18)
        {
          m+="Please enter the password between 8 to 18 characters\n";
          f=false;
        }
        if(c.length<10 || c.length>10)
        {
          m+="Please enter the correct 10 digit phone number\n";
          f=false;
        }
        if((d.indexOf("..")!=-1)||(d.indexOf("__")!=-1)||(d.indexOf("@")!=d.lastIndexOf("@")) ||(d.indexOf("@")==-1))
        {
          m+="Enter correct email like in format abc@gmail.com\n";
          f=false;
        }
        alert(m);
        return f;
      }
 </script>
<style type="text/css">

.top
{
	
	width: 100%;
  background-image:linear-gradient(rgba(30, 233, 233, 0.98),rgba(244, 115, 54, 0.37),rgba(75, 0, 255, 0.65));

}
.top1
{
	height: 30px;
	width: 289px;
	margin-top: -17px;
	margin-left: 1352px;
	text-align: center;
	color: white;

}
.nav
{
    text-decoration: none;
	  width: 100%;
    background:#000;
    

}
ul {
    list-style-type: none;
    background-color: #333;
  }

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color:#f1f1f1;
}
.mid
{
	height: 600px;
	width:100%;
	
}

.form
{
	  height: 559px;
	  width: 464px;
    background-color: rgba(255, 53, 7, 0.45);
    position: absolute;
    border-radius:20px;
    
    background-size: cover;
    background-position: center;
    opacity: 6.5;
}
.first
 {
 	height: 650px;
 	width: 100%;
 	color: black;
 }
 .txt
 {
 	height: 92px;
 	width: 761px;
 	color: black;
 	margin-left:452PX;
 	margin-top: 12PX;
 	position: absolute;
 	font-family: 'Cinzel Decorative', cursive;
 }

 .hour{
    width: 350px;
    height: 152px;
    margin-bottom: 80px;
    margin-left: 356px;
    border: 1px dashed black;
   }

 .animate 
  {
  height: 152px;
  width: 173px;
  border: 1px dashed black;
  background:#FF5722;;
    transition-property: background;
  transition-duration: 1s;
  transition-timing-function: linear;
}
.animate:hover
{
  background:rgba(58, 183, 114, 0.71);
}
 .abc
 {
  height: 270px;
  width:516px;
  margin-left:129px;
  border:2px solid black;
  /*background:red;*/
  -webkit-transition: width 2s, height 4s ;
  transition: width 2s, height 4s;
 }
 .abc:hover
 {
  height: 200px;
  width:400px;
 }
 .imgg
 {
  height: 151px;
  width: 250px;
  margin-top: -2px;
  margin-left: 114px;
  border:2px solid black;
  -webkit-transition: width 2s, height 4s ;
  transition: width 2s, height 4s;
 }
 .imgg:hover
 {
  height: 100px;
  width: 200px;
 }
 .imgg1
 {
  height: 151px;
  width: 250px;
  margin-top: -2px;
  margin-left: 304px;
  border:2px solid black;
  -webkit-transition: width 2s, height 4s ;
  transition: width 2s, height 4s;
 }
 .imgg1:hover
 {
  height: 100px;
  width: 200px;
 }
 
 
 .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer
}

.dropbtn:hover, .drbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}.show {display:block;}
.video
{
  width: 100%;
  background-color: red;
  margin-top:40px;
}
 .homepage-hero-module {
    border-right: none;
    border-left: none;
    position: relative;
}
.no-video .video-container video,
.touch .video-container video {
    display: none;
}
.no-video .video-container .poster,
.touch .video-container .poster {
    display: block !important;
}
.video-container {
    position: relative;
    bottom: 0%;
    left: 0%;
    height: 100%;
    width: 100%;
    overflow: hidden;
    background: #000;
}
.video-container .poster img {
    width: 100%;
    bottom: 0;
    position: absolute;
}
.video-container .filter {
    z-index: 100;
    position: absolute;
    background: rgba(0, 0, 0, 0.4);
    width: 100%;
}
.video-container video {
    position: absolute;
    z-index: 0;
    bottom: 0;
}
.video-container video.fillWidth {
    width: 100%;
}
.txt1
 {
    height: 85px;
    width: 806px;
    color: white;
    margin-left:444PX;
    margin-top: 70PX;
    position: absolute;
    background-color: black;
 }
  .img
  {
    height: 370px;
    width: 1075px;
    position: absolute;
    margin-top: 242px;
    margin-left: 142px;
  }
  .container {
    position: relative;
    width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.test:hover .image {
  opacity: 0.3;
}

.test:hover .middle {
  opacity: 1;
}

.inner {
  background-color:black;
  color: white;
  font-size: 16px;
  height:76px;
  width:298px;
  margin-left: 70px;
  text-align: center;
}
input-group {
    position: relative;
    width: 50%;
  
}
input {
    text-indent: 20px;
    width: 100%;
    height: 39px;
    border-radius: 5px;
}

i {
    position: absolute;
    left: 0;
}
.gallery
{
  
  width: 100%;
  

}
.contact
{
  
  width: 100%;
  position: absolute;
  background-image: url('brown.jpg');
  margin-top: 50px;
  background-size: cover;
  height: 59%;
}
 .last
 {

  width: 100%;
  background-color: black;
  color:white;
  position: absolute;
  margin-top: 441px;
 }
 .view
 {
  display: none;
 }
 .menu
 {
  width: 100%;
  background-image: url('wallpink.jpg');
  /*background-color:red;*/
  background-size: cover;
  
 }

</style>
  <script>
    $( document ).ready(function() {

    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

function scaleVideoContainer() {

    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){

    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
    windowHeight = $(window).height() + 5,
    videoWidth,
    videoHeight;

    // console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
}
    </script>
</head>
<body>
<audio autoplay="true" src="Sleep Away.mp3"></audio>
<?php echo $msg; ?>
	<div class="top">
      <div style="float:left;">
          <img src="logo1.png" style="height: 128px; width: 137px; margin-left: 15px;">
      </div>
        <div style="height:117px;width:970px;">
	      <p style="margin-left:98px;font-family:Algerian; font-size:90px;color:black;">DIAMOND PLAZA</p>
     <p style="font-size:23px;margin-left:725px;margin-top:-43px;">(Restaurant Ordering)</p>
       </div>
   
    <div class="top1">
    <div class="col-md-6">
         <a href=""  data-toggle="modal" data-target="#myModal" style="font-size:20px; color:white;text-decoration:none;margin-left:-13px;"><i class="fa fa-cutlery"></i>&nbsp;Order Now</a>
  
  <form method="POST" action="">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md" style="width:454px;">
      <div class="modal-content">
         <div class="modal-body" style="height:361px;">
            <img src="img_avatar4.png" style="height:106px;width:106px;border-radius:51px;margin-left:5px;">
             <div class="col-sm-12">
              <form action="" method="post">
                <div class="col-sm-12">
                 <div class="form-group">
                  User Name
                   <i class="fa fa-user" style="margin-top:38px;font-size:23px;margin-left:24px;color:black;"></i>
                </div>
                <input type="text" name="txtName" required="" placeholder="Username"  class="form-control"/>
                </div>
                <div class="col-sm-12">
                 <div class="form-group">
                  Password
                  <i class="fa fa-lock"  style="margin-top:38px;font-size:23px;margin-left:24px;color:black;"></i>
                </div>
                  <input type="password" name="txtPassword" required="" pattern="[A-Za-z]{8}" placeholder="Password"  class="form-control"/>
                </div>
                 
                <strong></strong>
                 <div class="col-sm-12">
                  <div class="form-group"></div><br>
                 <input type="submit" value="Login" onclick="orderinfo.php" name="btnLogin" class="form-control" style="background:rgba(0, 128, 0, 0.85);color:white;" />
                   <input type="checkbox" name="chk" checked="unchecked" style="height:17px;width:17px;margin-left: -239px;margin-top:7px;">
                   <span style="color:black;margin-left:-2px;">Remeber me</span>
                  
                    <a href="changepass.php" ><p style="text-align:center;margin-top: -24px;margin-left:249px;">Forgot Password</p></a>
                 </div>
                </form>
           </div>
       </div>
        <div class="modal-footer">
           <button type="submit" class="btn btn-default" data-dismiss="modal" style="background:red;margin-right: 354px;color:white;height: 40px; margin-top: -12px;">Cancel</button>
            <p style="color:black;margin-top: -46px;">Not a memeber</p>
            <button type="submit" name="txtsign" value="" style="background:rgba(0, 128, 0, 0.85);color:white;margin-left: 293px;height: 34px; width: 72px;margin-top: -12px;">Signup</button>
          
        </div>
     </div>
    </div>
 </div>
</form>
</div>
<div class="col-md-6>">
  <a href=""  data-toggle="modal" data-target="#myModa2" style="color:white;font-size:20px;text-decoration:none;margin-left:-88px;">&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span>&nbsp;Sign up</a>
     <!-- sign modal start here-->
     <div class="modal fade" id="myModa2" role="dialog">
    <div class="modal-dialog modal-md" style="width:560px;">
      <div class="modal-content">
        <div class="modal-header" style="height:520px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
              <img src="img_avatar4.png" style="height:106px;width:106px;border-radius:51px;margin-left:5px;">
             <div class="col-sm-12">
              <form action="" method="POST">
                <div class="col-sm-6">
                   <div class="form-group">
                    Username
                    <i class="fa fa-user" style="margin-top:43px;font-size:23px;margin-left:24px;color:black;"></i>
                   </div>
                    <input type="text" name="txtuse" required="length10" pattern="[A-Za-z]{10}" placeholder="Full name"  class="form-control"/>
                    <div class="form-group">
                     Password
                    <i class="fa fa-lock" style="margin-top:43px;font-size:23px;margin-left:24px;color:black;"></i>
                    </div>
                   <input type="password" name="txtPass" placeholder="Password" required="" pattern="[A-Za-z0-9]{8}"  class="form-control"/>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                     Phone Number
                    <i class="fa fa-phone" style="margin-top:43px;font-size:23px;margin-left:24px;color:black;"></i>
                   </div>
                    <input type="text" name="txtpn" placeholder="Phone number" required="" class="form-control"/>
                     <div class="form-group">
                    Confirm Password
                     <i class="fa fa-lock" style="margin-top:43px;font-size:23px;margin-left:24px;color:black;"></i>
                     </div>
                     <input type="password" name="txtConfirmpassword" placeholder="Confirmpassword" required=""  class="form-control"/>
              </div>
                <div class="col-md-12">
                    <div class="form-group">
                     Email
                     <i class="fa fa-envelope" style="margin-top:43px;font-size:23px;margin-left:24px;color:black;"></i>
                     </div>
                     <input type="email" name="txtEmail" placeholder="Email" required="" class="form-control"/>
             </div>
              
                                      <div class="col-md-6">
                                    <p style="color:black; font-size:16px;">  what's your favourite fruit?</p> <input type="text" name="txtFood" placeholder=""   class="form-control"/></div>
                              <div class="col-md-6">
                             <p style="color:black; font-size:16px;">Your favourite teacher name?</p> <input type="text" name="txtTech" placeholder=""   class="form-control"/>
                                      </div>
                                     
             <div class="col-sm-12">
              <div class="form-group"></div><br>
               <input type="submit" value="Register" class="alert alert-success"  name="btnReg" class="form-control" style="background:rgba(0, 128, 0, 0.85);color:white;height:50px;" />
                    <!-- <div class="container">
                        <div class="alert alert-success">
                             <p>Registration successful. You are now logged in.</p>
                        </div>
                    </div> -->
           </div>
                </form>
           </div>
          </h4>
        </div>
        
     </div>
    </div>
 </div>
    <!-- end here sign modal-->
    </div>
    </div>
	</div>
 
 <div class="nav">
			<ul>
       <li><a class="active" href="templateres.php" style="text-decoration:none;">HOME</a></li>
        <li><a  href="about.php" style="text-decoration:none;">ABOUT</a></li>
            <li><a  href="party1.php" style="text-decoration:none;">EVENTS</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"  style="text-decoration:none;">MENU<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="golgape.php">Golgappa Junction</a></li>
            <li><a href="main.php">Main-Course</a></li>
            <li><a href="thali.php">Thali</a></li>
            <li><a href="street- food.php">Street-Food</a></li>
            <li><a href="ice-cream.php">Ice-cream</a></li>
            <li><a href="sandwich.php">Sandwich</a></li>
            <li><a href="lassi.php">Lassi</a></li>
            <li><a href="beverage.php">Beverage</a></li>
             <li><a href="pizza.php">Pizza</a></li>
            <li><a href="burger.php">Burgers</a></li>
             <li><a href="slush.php">Slush</a></li>
            <li><a href="chiense.php">Chinese</a></li>
            <li><a href="snacks.php">Snacks</a></li>
            <li><a href="chuski.php">Chuski</a></li>
            <li><a href="shakes.php">Shakes</a></li>
           </ul>
          </li>
               <li><a href="gallary.php" style="text-decoration:none;">GALLERY</a></li>
                <li><a href="contact.php" style="text-decoration:none;">CONTACT US</a></li>
         </ul>
		</div>
		<div class="mid">
		 <div class="col-md-12">
		   <div class="col-md-4">
		   <br>
		   <form method="POST">
		   	 <div class="form" action="" onsubmit="return validate()">
		   	 <h1 style="font-size:35px;text-align:center;font-family:Algerian;"><u><b>BOOK YOUR TABLE</u></b>
		   	  </h1><br>
		   	  <span style="font-size:25px;margin-left:20px;font-family:Andalus;">Name</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="1" name=" txtname" style="height:30px;width:180px;"><br><br>
		   	  <span style="font-size:25px;margin-left:20px;font-family:Andalus;">Email</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  id="3" name="txtEmail2" style="height:30px;width:180px;"><br><br>
		   	  <span style="font-size:25px;margin-left:20px;font-family:Andalus;">Contact Number</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  id="4" name="txtNumber" style="height:30px;width:180px;"><br><br>
		   	  <span style="font-size:25px;margin-left:20px;font-family:Andalus;">Date</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date"  id="1" name="txtDate" style="height:30px;width:180px;"><br><br>
		   	    <span style="font-size:25px;margin-left:20px;font-family:Andalus;">Timing</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <select name="txttime"  id="1" style="height:30px;width:180px;">
             <option>Lunch</option>
                 <option>Dinner</option>
                 
              </select><br><br>      
		   	  <span style="font-size:25px;margin-left:20px;font-family:Andalus;">No.of People</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   	  <select name="txtpeople"  id="1" style="height:30px;width:180px;">
		   	     <option>Select People</option>
                 <option value="1">1 People</option>
                 <option value="2">2 People</option>
                 <option value="3">3 People</option>
                 <option value="4">4 People</option>
                 <option value="5">5 People</option>
              </select><br><br>
            <span style="font-size:25px;margin-left:20px;font-family:Andalus;">Location</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <select name="txtlocation"  id="1" style="height:30px;width:180px;">
                 <option>Select Location</option>
                 <option value="Center">Center</option>
                 <option value="Open Environment">Open Environment</option>
                 <option value="Private Cabin">Private Cabin</option>
                 <option value="Near to Corner">Near to Corner</option>
                 <option value="Near to Window">Near to Window</option>
                 <option value="Any Location">Any Location</option>
                
                </select><br><br> 
                <a href="" data-toggle="modal" data-target="#myModal4" > 
               <img src="btn.gif" type="Submit" name="btnimg" style="margin-left:156px;"></a>
                 <div class="modal fade" id="myModal4" role="dialog" >
                   <div class="modal-dialog">
                      <div class="modal-content" style="width:423px;">
                       <div class="modal-body" style="height:138px;">
                          <p style="font-size:26px;font-family:Andalus;margin-left:10px;color:red;">Price for corresponding location is <span style="color:blue;"></span>.</p>
                    <div class="loc_result" style="margin-left:12px;font-size:18px;"></div>
                    <input type="hidden" name="txtlocvalue">
                    

              
              <span  style="font-size:20px;font-family:Andalus;margin-left:30px;"> For confirm your booking</span>&nbsp;&nbsp;
             <a href="booktable.html"> <button type="Submit"  id="confirm" name="btnSubmit" style="background:green;color:white;">CONFIRM</button></a>
            </div>
            <script type="text/javascript">
              $(document).ready(function(){
                $("#confirm").click(function()
                {
                
                     alert("Your Table is Booked");
                
                });
              });
            </script>
                
           <button type="Submit" class="btn btn-default" data-dismiss="modal" style="font-size:20px;font-family:Andalus;margin-bottom:7px;margin-left:25px;background:red;color:white;height:39px;">Cancel</button>
        
                   </div>
                  </div>
                 </div>
             
             </div>
             </div>
             </u></h1></form>
		   <div class="col-md-8">
            <br>
      
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <img src="indoor.jpg" style="height:559px;width:1100px;border-radius:20px;">
      </div>
       <div class="item">
      <img src="32.jpg" style="height:559px;width:1100px;border-radius:20px;">
      </div>
       <div class="item">
    <img src="12.jpg" style="height:559px;width:1100px;border-radius:20px;">
    </div>
    <div class="item">
    <img src="4.jpg" style="height:559px;width:1100px;border-radius:20px;">
    </div>
    <div class="item">
     <img src="food.jpg" style="height:559px;width:1100px;border-radius:20px;">
    </div>
    <div class="item">
    <img src="11.jpg" style="height:559px;width:1100px;border-radius:20px;">
    </div>
     <div class="item">
    <img src="8.jpg" style="height:559px;width:1100px;border-radius:20px;">
    </div>
    <div class="item">
    <img src="noodles.jpg" style="height:559px;width:1100px;border-radius:20px;">
    </div>
    <div class="item">
    <img src="054.jpg" style="height:559px;width:1100px;border-radius:20px;">
    </div>
     <div class="item">
    <img src="glass.jpg" style="height:559px;width:1100px;border-radius:20px;">
    </div>
    <div class="item">
    <img src="cafe.jpg" style="height:559px;width:1100px;border-radius:20px;">
    </div>
    </div>
   </div>
   </div>
  </div>
 </div>
 <div class="first">
 	 <div class="txt">
		  <h1 style="font-family:Algerian;font-size:48px;border:2px dashed black;text-align:center;color:#FF5722;">WELCOME TO DIAMOND PLAZA</h1>
		</div>
 		 
		<div class="col-md-12" style="margin-top:140px;">
		    <div class="col-md-6">
		    	<img src="ab.jpg" class="abc" >
		    </div>
		
		     <div class="col-md-6" style="height:280px;" >
		     	<p style="font-size:17px;"><span>Diamond Plaza</span> is a vegetarian restaurant brand and a perfect destination for <br>all day dining and entertaining, lunch and dinner in  Chandigarh. Our restaurant<br> is an ideal place for a wide range of events ranging from formal dinners to get<br>-togethers, premium parties to birthday celebrations etc. Over the years, the<br> restaurant has grown into casual, family-oriented and a fine dining restaurant<br> in Chandigrah.<br><br>

                 We offer wholesome dishes that are cooked with right herbs, spices,flavours <br>and textures to offer guests a broad and savory tasting of cuisines.</p>
		     </div>
		</div>
		<div class="col-md-12"  style="margin-top:32px;">
		    <div class="col-md-4">
        <div class="col-md-2">
           <img src="c.jpg" class="imgg" >
        </div>
         <div class="col-md-2">
          <img src="img3.jpg" class="imgg1" >
         </div>
		     </div> 
		    <div class="col-md-8">
		    	<div class="hour">
              <div class="col-md-4 animate" >
              <h1 style="font-size:35px;text-align:center;margin-top:48px;font-family:Andalus;"> OPENING <br>HOURS</h1>
            </div>
            <div class="col-md-4 animate" >
             <h2  style="font-size:26px;text-align:center;margin-top:48px;font-family:Andalus;">Restaurant Timing</h2> 
             
              <p style="text-align:center;"><b>11:00 AM-11:00 PM</b></p>
            </div>
          </div>
		    </div>
		</div>   
 </div>
   <div class="video">
       <div class="homepage-hero-module">
    <div class="video-container">
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
            <source src="noodles.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="noodles.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="poster hidden">
            <img src="" alt="">
        </div>
         <div class="txt1">
      <p style="font-family:Algerian;font-size:56px;border:2px dashed white;text-align:center;">Restaurant Dining & Celebrations</p>
      </div>
       <div class="img">
         <div class="row">
          <div class="col-md-12">
          <div class="col-md-4"  >
          <div class="test">
           <img src="backk.jpg" alt="Avatar" class="image" style="height:250px;width:300px;border:2px solid black; margin-left: 136px;"><br>
              <p style="color:white;font-size:30px;font-family:Andalus;margin-left: 107px;">Events</p>
            <div class="middle">
              <div class="inner" >
              <span style="color:red;font-size:27px;font-family:Andalus;">Booking</span><br>Best Rates Guaranteed

                <a href="event2.php"  style="text-decoration:none;">Book it</a>
      

              </div>
            </div>
          </div>
         </div>
            <div class="col-md-4" >
                <div class="test">
           <img src="music.jpg" alt="Avatar" class="image" style="height:250px;width:300px;border:2px solid black; margin-left: 166px;"><br>
           <p style="text-align:center;color:white;font-size:30px;font-family:Andalus;">Live Music</p>
            <div class="middle">
              <div class="inner" >
              <span style="color:red;font-size:27px;font-family:Andalus;">Live Music</span><br>Every Monday & Friday
               <a href="" data-toggle="modal" data-target="#myModal5" style="text-decoration:none;">Book it</a>
              </div>
            </div>
          </div>   
            </div>
             <div class="col-md-4"  >
                   <div class="test">
           <img src="candle.jpg" alt="Avatar" class="image" style="height:250px;width:300px;border:2px solid black;margin-left: 200px;"><br>
             <p style="color:white;font-size:30px;font-family:Andalus;margin-left: 26px;">Candle Light Dinner</p>
            <div class="middle">
              <div class="inner" >
              <span style="color:red;font-size:27px;font-family:Andalus;">Candle Light Dinner</span><br>Every Monday & Friday
               <a href="" data-toggle="modal" data-target="#myModal5" style="text-decoration:none;">Book it</a>
              </div>
            </div>
          </div>
             </div>
          </div>
          </div>
      </div>
    </div>
    </div>
   </div>
   <form method="POST">
<div class="modal fade" id="myModal5" role="dialog">
       <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title" style="margin-left:60px;font-size:30px;font-family:Algerian;color:red;">Make Your Reservation Now</h4>
         </div>
        <div class="modal-body">
           <div class="col-md-12">
            <div class="col-md-6">
            <div class="input-group">
                <label>Name:</label>
               <i class="fa fa-user" style="margin-top:30px;font-size:23px;margin-left:3px;color:red;"></i>
               <input type="text" name="txtName1" placeholder="Name" style="width:246px;">
            </div><br>
             <div class="input-group">
                <label>Phone Number:</label>
               <i class="fa fa-phone" style="margin-top:30px;font-size:23px;margin-left:3px;color:red;"></i>
               <input type="text" name="txtphone2" placeholder="Phone Number"  style="width:246px;">
            </div>
            </div>
            
            
            <div class="col-md-6">
             <div class="input-group">
                <label>Email:</label>
               <i class="fa fa-envelope" style="margin-top:32px;font-size:21px;margin-left:1px;color:red;"></i>
               <input type="text" name="txtemail" placeholder="Email"  style="width:246px;">
            </div>
             <div class="input-group"><br>
                <label>City:</label>
               <i class="fa fa-map-marker" style="margin-top:30px;font-size:23px;margin-left:3px;color:red;"></i>
               <input type="text"  name="txtcity" placeholder="City"  style="width:246px;">
            </div>
            </div>
            </div>
           <br>
           <div class="col-md-12"><br>
            <div class="col-md-4">
            <div class="input-group">
                <label>Date:</label>
               <i class="fa fa-calendar" style="margin-top:30px;font-size:23px;margin-left:3px;color:red;"></i>
               <input type="date"  name="txtdate" placeholder=""  style="width:160px;">
            </div>
              </div>
            <div class="col-md-4">
              <div class="input-group">
                <label>Time:</label><br>
               <i class="fa fa-clock-o" style="margin-top:9px;font-size:23px;margin-left:3px;color:red;"></i>
                 <select name="txtItem" style="width:160px;height:39px;border-radius:5px;">
                  <option></option>
                  <option value="Lunch">Lunch</option>
                  <option>Dinner</option>
                  <option>Other</option>
                </select>
            </div>
              </div>
            <div class="col-md-4">
            <div class="input-group">
                <label>No.of People:</label>
               <i class="fa fa-users" style="margin-top:30px;font-size:23px;margin-left:3px;color:red;"></i>
                <select name="txtperson" style="width:160px;height:39px;border-radius:5px;">
                  <option></option>
                  <option>1 People</option>
                  <option>2 People</option>
                  <option>3 People</option>
                  <option>4 People</option>
                  <option>More</option>
                </select><br><br><br><br>
            </div>
           </div>
           </div>
            <input  type="submit" name="btnBook" value="Book Now" class="btn btn-default"  style="font-size:20px;font-family:Andalus;width:524px;background:red;color:white;margin-left:22px;">
        </div>
       
      </div>
     </div>
  </div>
  </form>
        <!-- menu class start here-->
             
                
                   <div class="col-md-12 menu" style="back"> <p style="text-align:center;font-size:47px;font-family:algerian;">Menu List</p><br>
                     <div class="col-md-4" >
                        <img src="breakfast.jpg" style="height:200px;width:193px;border-radius:90px;margin-left: 215px"><br><br>
                          <a href="breakfast.php" style="font-size:25px;margin-left:259px;">Breakfast</a>
                          
                     </div>
                       <div class="col-md-4" >
                          <img src="lunch.jpg" style="height:200px;width:193px;border-radius:90px;margin-left:108px;"><br><br>
                            <a href="lunch.php" style="font-size:25px;margin-left:164px;">Lunch</a>
                            
                       </div>
                          <div class="col-md-4" >
                             <img src="dinner.jpg" style="height:200px;width:193px;border-radius:90px;"><br><br>
                              <a href="dinner.php" style="font-size:25px;margin-left: 64px;">Dinner</a>
                              
                          </div>
                   </div>
              
        <!-- end here->
          <!-- gallery class start here-->
      <div class="container-fluid">
         <div class="gallery">
        <h1 style="font-size:47px;font-family:algerian;margin-left:522px;">OUR GALLERY</h1><br>
         <div class="col-md-12">
             <div class="col-md-3" >
                <img id="myImg" src="22.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
               <div class="col-md-3" >
                <img id="myImg" src="30.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
              <div class="col-md-3" >
                <img id="myImg" src="31.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
                <div class="col-md-3" >
                <img id="myImg" src="32.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
         </div>
               <div class="col-md-12 view" style="margin-top:23px;">
             <div class="col-md-3" >
                <img id="myImg" src="1.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
               <div class="col-md-3" >
                <img id="myImg" src="20.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
              <div class="col-md-3" >
                <img id="myImg" src="4.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
                <div class="col-md-3" >
                <img id="myImg" src="8.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
         </div>
             <div class="col-md-12 view" style="margin-top:23px;">
             <div class="col-md-3" >
                <img id="myImg" src="7.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
               <div class="col-md-3" >
                <img id="myImg" src="9.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
              <div class="col-md-3" >
                <img id="myImg" src="5.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
                <div class="col-md-3" >
                <img id="myImg" src="10.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
         </div>
              <div class="col-md-12 view" style="margin-top:23px;">
             <div class="col-md-3" >
                <img id="myImg" src="11.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
               <div class="col-md-3" >
                <img id="myImg" src="12.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
              <div class="col-md-3" >
                <img id="myImg" src="27.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
                <div class="col-md-3" >
                <img id="myImg" src="15.jpg" style="height:264px;width:286px;border:10px solid #9E9E9E;margin-left:29px;">
             </div>
         </div>

                 <div style="margin-left:590px;height:77px;width:200px;margin-top:276px;"><br>
                     <a style="font-size:30px;margin-left:58px;margin-top:20px;" class="more">View More</a>
                      
                  </div>
                  <script type="text/javascript">
                    $(document).ready(function()
                    { 
                      $(".more").click(function()
                      {
                        $(".view").show();
                        $(".more").hide();
                      });
                    });
                  </script>

         </div>
         </div>
         <!-- ending here-->

           <!-- contact cls start here-->
           <div class="contact container-fluid">
              <h1 style="font-size:47px;font-family:algerian;text-align:center;color:white;">OUR CONTACT</h1><br><br>
                    <div class="col-md-12">
                          <a href=""><img src="fb.jpg" style="margin-left:717px;"></a>
                          &nbsp;&nbsp;&nbsp;<a href=""><img src="gmail.jpg" ></a>
                          &nbsp;&nbsp;&nbsp;<a href=""><img src="twtr.jpg"></a>
                    </div><br><br><br>
                    <div class="col-md-12">
                      <i class="fa fa-map-marker" style="font-size:30px;margin-left:480px;color:white;"></i>
                        <p style="font-size:23px;text-align:center;color:white;">Diamond Plaza&nbsp;&nbsp;&nbsp;&nbsp;Sector 22 &nbsp;&nbsp;&nbsp;&nbsp;Chandigarh Chandigarh-160036  </p><br><br>
                    </div>
                                           
                            <div class="col-md-6" >
                                <i class="fa fa-phone" style="font-size:29px;margin-left:570px;color:white;"></i>
                                <p style="margin-left:575px;font-size:20px;color:white;"> +91 8591139245</p>
                           </div>
                             <div class="col-md-6">
                                <i class="fa fa-envelope" style="font-size:29px;margin-left:36px;color:white;"></i>
                                <p style="margin-left:55px;font-size:20px;color:white;">diamondplaza01@gmail.com</p>
                           </div>
                   
         <div style="height:50px;width:58px;background:black;margin-left:778px;margin-top:154px;border-radius:8px;position:absolute;">
             <a href="" data-toggle="modal" data-target="#myModal2">
               <i class="fa fa-envelope-o" style="font-size:37px;color:white;margin-top:5px;margin-left: 10px;"></i>
           </a>
       </div>
          <!-- Modal -->
          <form method="POST">
            <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
              <div class="modal-dialog" role="document" style="margin-top:13px;margin-left:533px;">
                 <div class="modal-content" style="width:260px;">
                   <div class="modal-header" style="background:rgb(70, 63, 181);color:white;">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel2" style="text-align:center;">Have Queries?</h4>
                  </div>
             <div class="modal-body">
                <p style="text-align:center;margin-left: -28px;color:rgb(70, 63, 181);">Please Send Us Your Queries</p>
                
               <input type="text" name="txtName3" placeholder="Name" style="border-radius:6px;height:34px;width:220px;"><br>
               <input type="text" name="txtPhone3" placeholder="Phone Number" style="border-radius:6px;height:34px;width:220px;margin-top:10px;"><br>
               <input type="text" name="txtEmail3" placeholder="Email" style="border-radius:6px;height:34px;width:220px;margin-top:10px;"><br>
               <textarea placeholder="Message" name="txtmsg" style="border-radius:6px;height:78px;width:220px;margin-top:10px;"></textarea><br>
               <button type="submit" name="btnContact" style="border-radius:6px;height:34px;width:69px;margin-top:10px;background:rgb(70, 63, 181);color:white;">Submit</button>
              
           </div>

      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->
  </form>
                  
                          
           </div>
           <!--contact cls ending here-->
            <!-- last cls start here-->
            <div class="last">
                 <div class="col-md-12"><br>
                    <h1 style="font-size:43px;font-family:algerian;text-align: center;">Diamond plaza</h1>
                     <p style="text-align: center;font-size:21px;">Celebrate your <br> Special Events with Us</p><br>
                     <a href="templateres.php" style="text-decoration:none;"><p style="text-align: center;font-size:17px;">Home  |<span><a href="about.php" style="text-decoration:none;">About </a> </span>|<span><a href="party1.php" style="text-decoration:none;"> Event</a></span> |<span><a href="gallary.php" style="text-decoration:none;"> Gallery </a></span> |<span><a href="contact.php" style="text-decoration:none;"> Contact Us</a></span></p></a>
                       <p style="text-align: center;font-size:17px;">Copyright 2017. All Rights Reserved.</p>
                 </div>
                   <a href="templateres.php"><i class="fa fa-arrow-up" style="margin-left:1294px;margin-top:200px;font-size:31px;"></i></a>
            </div>
            <!-- last cls end here-->

        <script>
         //ajax

         $('select[name="txtlocation"]').on('change',function(){
           var loc = $(this).val();
          if(loc == 'Any Location'){
            $('.loc_result').html('Rs. 3000');
            $('input[name="txtlocvalue"]').val(1000);
          }else{
            $('.loc_result').html('Rs. 3000 + 20% extra');
            $('input[name="txtlocvalue"]').val(1200);
          }
         });
         </script>

    


</body>
 </html>