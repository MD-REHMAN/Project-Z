<?php
include './header.php';
include 'gecdp.php';
if(isset($_REQUEST["btnsubmit"]))
{
    //echo $fname;
	$fname=$_REQUEST["txtfname"];
	$lname=$_REQUEST["txtlname"];
	$father=$_REQUEST["txtfather"];
	$dob=$_REQUEST["txtdate"];
	$gender=$_REQUEST["txtgender"];
	$email=$_REQUEST["txtemail"];
	$mobile=$_REQUEST["txtmobile"];
	$address=$_REQUEST["txtaddress"];
	$rollno=$_REQUEST["txtroll"];
	$enroll=$_REQUEST["txtenroll"];
	$sem=$_REQUEST["txtsem"];
	$branch=$_REQUEST["txtbranch"];
	$achive=$_REQUEST["txtachive"];
	
	$source_file=$_FILES["upfile"]["tmp_name"];
        $target_file = "studentphoto/" . $_FILES["upfile"]["name"];
        if (move_uploaded_file($source_file, $target_file)) {

            $imagename = $_FILES["upfile"]["name"];

        }
	
	$pass=$_REQUEST["txtpass"];
	$confpass=$_REQUEST["txtconf"];
        //echo $pass;
    ?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>
        <div class="container" style="">
        <form action="Profile_page.php" method="POST" enctype="multipart/form-data">
            <div id="id15" class="tab-pane fade in" style="font-size: 17px;">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="font_padding_v">
                                 Name: <?php echo $fname;    echo " "; echo $lname; ?>
                                 <input type="hidden" name="fname2" value="<?php echo $fname; ?>"/>                        
                         </div>
                         <div class="">
                                 <input type="hidden" name="lname2" value="<?php echo $lname; ?>"/>
                         </div>
                         <div class="font_padding_v">
                                 Father's Name: <?php echo $father?>
                                 <input type="hidden" name="father2" value="<?php echo $father; ?>"/>
                         </div>
                         <div class="font_padding_v">
                                 Date of Birth: <?php echo $dob?>
                                 <input type="hidden" name="dob2" value="<?php echo $dob; ?>"/>
                         </div>
                         <div class="font_padding_v">
                                 Gender: <?php echo $gender?>
                                 <input type="hidden" name="gender2" value="<?php echo $gender; ?>"/>
                         </div>
                         </div>
                             <div class="col-md-3"></div>
                             <div class="col-md-3 font_padding_v" style="">
                                 <?php
                                 echo "<img src='studentphoto/" . $imagename . "' class='img-thumbnail' width=146 height=196 style='padding:2px;'>"; ?>
                                 <input type="hidden" name="imagename2" value="<?php echo $imagename; ?>"/>
                         </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <div  class="font_padding_v">
                                Email: <?php echo $email?>
                                <input type="hidden" name="email2" value="<?php echo $email; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Mobile No.: <?php echo $mobile?>
                                <input type="hidden" name="mobile2" value="<?php echo $mobile; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Address: <?php echo $address?>
                                <input type="hidden" name="address2" value="<?php echo $address; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Roll Number: <?php echo $rollno?>
                                <input type="hidden" name="rollno2" value="<?php echo $rollno; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Enroll No.: <?php echo $enroll?>
                                <input type="hidden" name="enroll2" value="<?php echo $enroll; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Semester: <?php echo $sem?>
                                <input type="hidden" name="sem2" value="<?php echo $sem; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Branch: <?php echo $branch?>
                                <input type="hidden" name="branch2" value="<?php echo $branch; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Achivements: <?php echo $achive?>  
                                <input type="hidden" name="achive2" value="<?php echo $achive; ?>"/>
                        </div>

                            <input type="hidden" name="pass2" value="<?php echo $pass; ?>"/>       
                    </div>
                    <div  class="button_align_v">
                        <input type="submit" class="button_v" style="border:0px;color: #fff;padding: 10px;" name="btnfinal" />
                    </div> 
                </div>
            </div>
        </form>
        </div>
	</body>
</html>

<?php
}
else if(isset($_REQUEST["btnfinal"]))
{
    $fname2=$_REQUEST["fname2"];
    $lname2=$_REQUEST["lname2"];
    $imagename2=$_REQUEST["imagename2"];
    $father2=$_REQUEST["father2"];
    $dob2=$_REQUEST["dob2"];
    $gender2=$_REQUEST["gender2"];
    $email2=$_REQUEST["email2"];
    $mobile2=$_REQUEST["mobile2"];
    $address2=$_REQUEST["address2"];
    $rollno2=$_REQUEST["rollno2"];
    $enroll2=$_REQUEST["enroll2"];
    $sem2=$_REQUEST["sem2"];
    $branch2=$_REQUEST["branch2"];
    $achive2=$_REQUEST["achive2"];
    $pass2=$_REQUEST["pass2"];
    echo $pass2;
//    $qry="INSERT INTO user_registration
//                    (fname,lname,fathername,dob,gender,emailid,mobileno,address,rollno,enrollment,semester,branch,achive,photo,password)
//                    VALUES
//                    ('".$fname2."','".$lname2."','".$father2."','".$dob2."','".$gender2."','".$email2."','".$mobile2."','".$address2."','".$rollno2."','".$enroll2."','".$sem2."','".$branch2."','".$achive2."','".$imagename2."','".$pass2."');
//            ";
    
    $qry="UPDATE user_registration SET
            fname='".$fname2."',lname='".$lname2."',fathername='".$father2."',dob='".$dob2."',gender='".$gender2."',emailid='".$email2."',mobileno='".$mobile2."',address='".$address2."',rollno='".$rollno2."',enrollment='".$enroll2."',semester='".$sem2."',branch='".$branch2."',achive='".$achive2."',photo='".$imagename2."',password='".$pass2."'
            WHERE rollno='".$rollno2."';
            ";
    
    
        echo $qry;
//        echo $con;
        if (mysql_query($qry, $con)) {
            ?>
            <script>alert('Your given information is updated sucessfully plz login!!!!');
            //window.location.href="User_home.php";
            </script>
            <?php
        } 
        else {
               ?>

            <script type='text/javascript'>
    var str="<?php echo mysql_error(); ?>";  
    var res=str.replace(/'/g,"");
    
    alert(res);
            </script>
            <?php
        }
    
    ?>
        <?php
}
 else {    
?>
<!DocType html>
<html>
    <head>
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="style.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body>
        <?php
        ?>
<!--		<ul class="nav nav-pills nav-justified">
			<li class="active"><a href="#id11" data-toggle="tab">Home</a></li>
			<li><a href="#id12" data-toggle="tab">About us</a></li>
			<li><a href="#id13" data-toggle="tab">Gallery</a></li>
			<li><a href="#id14" data-toggle="tab">Login</a></li>
                        <li><a href="$id15" data-toggle="tab">vikash</a>
		</ul>-->
<!--        retriving data of user-->
        <?php
            if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
            {
            $qry="SELECT * FROM user_registration WHERE rollno='".$_SESSION["userid"]."' AND password='".$_SESSION["password"]."';";
            //echo $qry;
            $result=mysql_query($qry,$con);
            $row=mysql_fetch_array($result);
            
            }
        ?>
<!--retriving data of user end-->
<div class="container">       
        <form action="Profile_page.php" method="POST" enctype="multipart/form-data">
		<div class="tab-content">
			<div id="id11" class="tab-pane fade in active">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="conrol-lable">First Name:</label>
                                    <input type="text" class="form-control border_v" name="txtfname" value="<?php echo $row["fname"]?>" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="conrol-lable">Last Name:</label>
                                    <input type="text" class="form-control border_v" name="txtlname"  value="<?php echo $row["lname"]?>" />
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Father Name:</label>
                                    <input type="text" class="form-control border_v" name="txtfather" value="<?php echo $row["fathername"]?>" />
                                </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="conrol-lable">Date of birth:</label>
                                    <input type="date" class="form-control border_v" name="txtdate" value="<?php echo $row["dob"]?>" />
                                </div>
                            </div>
                            <div>
                                <label class="conrol-lable">Gender:<br>
                                    <?php
                                        $value=$row["gender"];
                                        if($value='Male')
                                        {
                                            
                                            echo"<input type='radio' name='txtgender' value='Male' checked='checked'/>       Male";
                                            ?>
                                    <span style="margin-left: 20px;"></span>    
                                            <?php
                                            echo"<input type='radio' name='txtgender' value='Female' />       Female";
                                        }
                                        else
                                        {
                                            echo"<input type='radio' name=txtgender' value='Male'/>Male";
                                            echo"<input type='radio' name=txtgender' value='Female'  checked='checked' />Female";;
                                        }
                                    ?>
                                        </label>
<!--                                    <input type="radio" name="txtgender" value="Male" checked="checked" />Male
                                    <input type="radio" name="txtgender" value="Female"/>Female-->
                                </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Email Id:</label>
                                    <input type="email" class="form-control border_v" name="txtemail" value="<?php echo $row["emailid"]?>" />
                                </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Mobile No.:</label>
                                    <input type="number" class="form-control border_v" name="txtmobile" value="<?php echo $row["mobileno"]?>" />
                                </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Address:</label>
                                    <textarea name="txtaddress" class="form-control border_v" rows="4">
                                    </textarea>   
                                </div>
                            <div class="button_align_v">    
                                <a href="#id12" data-toggle="tab" class="btn btn-primary button_v">Save & Next</a>
                            </div>
                                
                        </div>
			<div id="id12" class="tab-pane fade in">
                                <div class="form-group">
                                    <label class="conrol-lable">Roll No.:</label>
                                    <input type="number" class="form-control border_v" name="txtroll" value="<?php echo $row["rollno"]?>"/>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="conrol-lable">Enrollment No.:</label>
                                        <input type="text" class="form-control border_v" name="txtenroll" value="<?php echo $row["enrollment"]?>"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="conrol-lable">Semester:</label>
                                        <select name="txtsem" class="form-control border_v">
                                            <option value="">Select semester</option>
<!--                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>-->
                                            <?php
                                                include './gecdp.php';
                                                $qry_b = "SELECT * FROM semester ORDER BY id";
                                                $result_b = mysql_query($qry_b, $con);
                                                if(isset($_SESSION["userid"]) && isset($_SESSION["password"])) {
                                                    while ($row_b = mysql_fetch_array($result_b)) {

                                                        if ($row1["semester"] == $row_b["semester"]) {
                                                            echo"<option value='" . $row_b['semester'] . "' selected>" . $row_b['semester'] . "</option>";
                                                        } else {
                                                            echo"<option value='" . $row_b["semester"] . "'>" . $row_b['semester'] . "</option>";
                                                        }
                                                    }
                                                } else {
                                                    while ($row_b = mysql_fetch_array($result_b)) {
                                                        echo"<option value='" . $row_b['semster'] . "'>" . $row_b['semester'] . "</option>";
                                                    }
                                                }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="conrol-lable">Branch:</label>
                                        <select name="txtbranch" class="form-control border_v">
                                            <option value="">Select your Branch</option>
<!--                                            <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                                            <option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
                                            <option value="Electronics & Telecommunication Engineering">Electronics & Telecommunication Engineering</option>
                                            <option value="Civil Engineering">Civil Engineering</option>
                                            <option value="Mechanical Engineering">Mechanical Engineering</option>-->
<?php
                                                include './gecdp.php';
                                                $qry_b = "SELECT * FROM branch ORDER BY bid";
                                                $result_b = mysql_query($qry_b, $con);
                                                if(isset($_SESSION["userid"]) && isset($_SESSION["password"])) {
                                                    while ($row_b = mysql_fetch_array($result_b)) {

                                                        if ($row1["bname"] == $row_b["bname"]) {
                                                            echo"<option value='" . $row_b['bname'] . "' selected>" . $row_b['bname'] . "</option>";
                                                        } else {
                                                            echo"<option value='" . $row_b["bname"] . "'>" . $row_b['bname'] . "</option>";
                                                        }
                                                    }
                                                } else {
                                                    while ($row_b = mysql_fetch_array($result_b)) {
                                                        echo"<option value='" . $row_b['bname'] . "'>" . $row_b['bname'] . "</option>";
                                                    }
                                                }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Achivement(Training & Certificates):</label>
                                    <textarea name="txtachive" rows="5" class="form-control border_v">
                                    </textarea>
                                </div>
                                <div class="button_align_v">
                                    <a href="#id13" data-toggle="tab" class="btn btn-primary button_v" >Save & Next</a>
                                </div>
			</div>
			<div id="id13" class="tab-pane fade in">
                                <div class="form-group">
                                    <label class="conrol-lable" class="form-control">Select your photo:</label>
                                    <input type="file" name="upfile"/>
                                </div>
                                <div class="button_align_v">
                                    <a href="#id14" data-toggle="tab" class="btn btn-primary button_v">Save & Next</a>
                                </div>
			</div>
			<div id="id14" class="tab-pane fade in">
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="form-group col-md-6">
                                            <label class="conrol-lable">Choose password:</label>
                                            <input type="password" class="form-control border_v" name="txtpass" value="<?php echo $row["password"]?>"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="form-group col-md-6">
                                            <label class="conrol-lable">Confirm your password:</label>
                                            <input type="password" class="form-control border_v" name="txtconf" value="<?php echo $row["password"]?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="button_align_v">
                                    <input type="submit" name="btnsubmit" class="btn btn-primary button_v" value="Sava & Next"/>
                                </div>
			</div>
		</div>
        </form>
</div>

    </body>
</html>
<?php
 }
?>