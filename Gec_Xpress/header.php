<?php 
include './gecdp.php';

if(isset($_REQUEST["btnlogin"]))
{
    $userid=$_REQUEST["txtuser"];
    $password=$_REQUEST["txtpass"];
    
    $qry="SELECT * FROM user_registration WHERE rollno='".$userid."' AND password='".$password."'";
    //echo $qry;
    $result=mysql_query($qry,$con);
    //echo $result;
    $row=mysql_fetch_array($result);
    if(mysql_affected_rows()>0)
    {
        $_SESSION["userid"]=$userid;
        $_SESSION["password"]=$password;
        ?>
        <script>
            window.location.href="User_home.php"
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('Incorrect User Id and password');
            window.location.href="header.php";
        </script>
        <?php
    }
}
elseif (isset ($_REQUEST["btnsign"]))
{
     $name=$_REQUEST["txtname"];
     $email=$_REQUEST["txtemail"];
     $rollno=$_REQUEST["txtrollno"];
     $password=$_REQUEST["txtpass"];
     $confpass=$_REQUEST["txtconpass"];
     
     
     if($password != $confpass)
     {
         ?>
        <script>
            alert('Your password and confirmpass word is not matching');
            window.location.href="header.php";
        </script>
        <?php
     }
     else
     {
         $qry="INSERT INTO user_registration 
                (fname,emailid,rollno,password)
                VALUES
                ('".$name."','".$email."','".$rollno."','".$password."');
                ";
         if(mysql_query($qry,$con))
         {
         ?>
            <script>alert('Your given information is Saved sucessfully please fill your profile form!!!!');
            window.location.href="Profile_page.php";
            </script>
            <?php
         }
         else
         {
             ?>

            <script type='text/javascript'>
                var str="<?php echo mysql_error(); ?>";  
                var res=str.replace(/'/g,"");

                alert(res);
            </script>
            <?php
         }
     }
     $_SESSION["userid"]=$rollno;
     $_SESSION["password"]=$password;
}
elseif(isset ($_REQUEST["btnverify"]))
{
    $rollno=$_REQUEST["txtrollno"];
    $email=$_REQUEST["txtemail"];
    $qry_f ="SELECT * FROM user_registration WHERE rollno='".$rollno."' AND emailid='".$email."'";
    $result_f=mysql_query($qry_f,$con);
    $row_f=mysql_fetch_array($result_f);
    if(mysql_affected_rows()>0)
    { 
        ?>

            <script type='text/javascript'>
                alert('vikash');
            </script>
            <?php
    }
 else {
        ?>

            <script type='text/javascript'>
                alert('Sorry your given roll number or email is not matching please sign up again!!!!!');
            </script>
            <?php
    }
}
else
{
?>
<!DocType html>
<html lang="en">
<html>
<head>
<title>Bootstarp</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
  <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--  Custom style starts-->
  <style>
          body {
              font-family: "Lato", sans-serif;
          }

          .sidenav {
              height: 100%;
              width: 0;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #111;
              overflow-x: hidden;
              transition: 0.5s;
              padding-top: 60px;
          }

          .sidenav a {
              padding: 8px 8px 8px 32px;
              text-decoration: none;
              font-size: 15px;
              color: #818181;
              display: block;
              transition: 0.3s;
          }

          .sidenav a:hover, .offcanvas a:focus{
              color: #f1f1f1;
          }

          .sidenav .closebtn {
              position: absolute;
              top: 0;
              right: 25px;
              font-size: 36px;
              margin-left: 50px;
          }

          @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
          }
          
          .check
          {
              padding:0;
          }
          .container
          {
              padding:0;
          }
  </style>
<!--Custom style ends-->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<!--Custom script starts-->



<!--Custom script ends-->
<style>
</style>
</head>
<body>

    <nav class="navbar navbar-inverse" style="border-radius: 0px;">
        <div class="container" style="padding-bottom: 0px;padding-top: 0px;">
			<div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" onclick="openNav()" style="float: left;margin-left: 20px;">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
                                <li><a href="wrapper.php">Home</a></li>
				<li><a href="#">About</a></li>
                                <li><a href="News_view.php">News</a></li>
                                <li><a href="Issue_tech_view.php">Issue</a></li>
                                <li><a href=Feedback_view.php">Feedback</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" data-toggle="modal" data-target="#signupModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
			</div>
		</div>
	</nav>
    <div class="row" style="margin-right:0px;">
        <div class="container">
            <div style="padding-left: 22px;font-family: Georgia, 'Times New Roman', 'Times, serif';text-decoration:none;font-size: 20px;padding-top:10px; ;padding-bottom:10px ;"><span style="font-size: 30px;">G</span>EC <span style="font-size: 30px;">X</span>PRESS</div>
        </div>   
        <hr>
    </div>
    
<!--        Slide bar menu starts-->
<div id="mySidenav" class="sidenav" style="font-size: 10px;z-index: 6666666;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="text-decoration: none;">&times;</a>
            <a href="#"  style="text-decoration: none;">Home</a>
            <a href="#" style="text-decoration: none;">About</a>
            <a href="#"  style="text-decoration: none;">News</a>
            <a href="#" style="text-decoration: none;">Issue</a>
            <a href="Feedback_view.php" style="text-decoration: none;">Feedback</a>
            <a href="#" data-toggle="modal" data-target="#loginModal"  style="text-decoration: none;">Login</a>
            <a href="#" data-toggle="modal" data-target="#signupModal"  style="text-decoration: none;">Sign up</a>
        </div>
<!--        Slide bar menu ends-->


<!--Login modal-->
    <div class="container">
        <!--Model-->
        <div class="modal fade" id="loginModal" role="dialog" style="z-index: 9999999">
                <div class="modal-dialog">
                    <!--Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Login Here</h4>
                        </div>
                        <div class="modal-body">
                            <br>
                            <form>
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                        <input type="text" class="form-control border_v" name="txtuser" placeholder="Enter your roll number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="password" class="form-control" name="txtpass" placeholder="Enter your password"/>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" name="btnlogin" class="btn btn-success">Login</button>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer" style="">
                            <a href="#" data-toggle="modal" data-target="#verifyModal" data-dismiss="modal" class="btn btn-default">Forget password</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>

<!--Login modal ends-->
<form method="POST" enctype="multipart/form-data">
<!--Signup modal-->
    <div class="container">
        <!--Model-->
        <div class="modal fade" id="signupModal" role="dialog"  style="z-index: 9999999">
                <div class="modal-dialog">
                    <!--Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Sign Up Here</h4>
                        </div>
                        <div class="modal-body">
                            <br>
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                        <input type="text" class="form-control" name="txtname"  placeholder="Enter your Name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" class="form-control" name="txtemail"  placeholder="Enter your Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-tag"></span>
                                        </span>
                                        <input type="number" class="form-control" name="txtrollno"  placeholder="Enter your roll number"/>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="password" class="form-control" name="txtpass"  placeholder="Enter your password"/>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="password" class="form-control" name="txtconpass"  placeholder="Confirm your password"/>
                                    </div>
                                </div>
                                
                                <div class="form-group text-center">
                                    <button type="button" class="btn btn-info" name="btnsignup" class="close" data-dismiss="modal" data-toggle="modal" data-target="#otpModal">Send OTP</button>
                                </div>
                        </div>
                        <div class="modal-footer" style="">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>


<!--signup modal ends-->
<!--Otp verification-->

<div class="container">
        <!--Model-->
        <div class="modal fade" id="otpModal" role="dialog" style="z-index: 9999999">
                <div class="modal-dialog">
                    <!--Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">OTP Verification</h4>
                        </div>
                        <div class="modal-body">
                            <br>
                            <div style="margin-bottom: 20px;">
<!--                                <p>An OTP is sent to your email id please check and enter here..</p>-->
                            </div>
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="password" class="form-control" placeholder="Enter the otp that you received in your given email"/>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" name="btnsign" class="btn btn-success">Sign up</button>
                                </div>
                        </div>
                        <div class="modal-footer" style="">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</form>
<!--otp verification ends-->
<!--forget password modal-->
<form>
    <div class="container">
        <!--Model-->
        <div class="modal fade" id="verifyModal" role="dialog" style="z-index: 9999999">
                <div class="modal-dialog">
                    <!--Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Forget password</h4>
                        </div>
                        <div class="modal-body">
                            <br>
                            <div style="margin-bottom: 20px;">
<!--                                <p>An OTP is sent to your email id please check and enter here..</p>-->
                            </div>
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter your roll number" name="txtrollno"/>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="email" class="form-control" placeholder="Enter your email id" name="txtemail"/>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" name="btnverify" class="btn btn-success">Verify me</button>
                                </div>
                        </div>
                        <div class="modal-footer" style="">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</form>
<!--forget password modal ends-->
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>
<?php
}
?>