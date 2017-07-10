<?php session_start();
 include './gecdp.php';
if((isset($_SESSION["userid"]) && isset($_SESSION["password"]))||(isset($_SESSION[""])&& isset($_SESSION[""]) && isset($_SESSION[""])))
{
    if(isset($_REQUEST["techsubmit"]))
    {
        $title=$_REQUEST["txttitle"];
        $product=$_REQUEST["txtproduct"];
        $desc=$_REQUEST["txtdesc"];
        
        $source_file=$_FILES["upfile"]["tmp_name"];
        $target_file="Issuephoto/".$_FILES["upfile"]["name"];
        if(move_uploaded_file($source_file, $target_file))
        {
            $imagename=$_FILES["upfile"]["name"];
        }
        
        $qry="INSERT INTO issues
            (student_id,issue_title,product_detail,issue_desc,issue_status,added_on,related_photo)
            VALUES
            ('".$_SESSION["userid"]."','".$title."','".$product."','".$desc."','in_process',now(),'".$imagename."')
                ";
        //echo $qry;
        if(mysql_query($qry,$con))
        {
            ?>
            <script>
            alert('Your Issue is sent sucessfully!!!!');
            window.location.href="Issue_tech_view.php";
            </script>
        <?php
        }
        else
        {
            ?>
        <script>
            var str="<?php echo mysql_error(); ?>";  
            var res=str.replace(/'/g,"");

            alert(res);
        </script>
            <?php
        }
    }
    else if($_REQUEST["missubmit"])
    {
        $title=$_REQUEST["txttitle"];
         $desc=$_REQUEST["txtdesc"];
         
         $source_file=$_FILES["upfile"]["tmp_name"];
         $target_file="Issuephoto/".$_FILES["upfile"]["name"];
         if(move_uploaded_file($source_file, $target_file))
         {
             $imagename=$_FILES["upfile"]["name"];
         }
         $qry="INSERT INTO issues
                (student_id,issue_title,issue_desc,issue_status,added_on,related_photo)
                VALUES
                ('".$_SESSION["userid"]."','".$title."','".$desc."','Active',now(),'".$imagename."')
                 ";
         if(mysql_query($qry,$con))
         {
             ?>
            <script>
            alert('Your Issue is sent sucessfully!!!!');
            window.location.href="Issue_tech_view.php";
            </script>
        <?php
         }
         else
         {
             ?>
        <script>
            var str="<?php echo mysql_error(); ?>";  
            var res=str.replace(/'/g,"");

            alert(res);
        </script>
            <?php
         }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          
          <link rel="stylesheet" href="style.css" type="text/css"/>
          <style>
              #fileselector {
    margin: 10px; 
}
#upload-file-selector {
    display:none;   
}
.margin-correction {
    margin-right: 10px;   
}
  .circle {
  margin: 36px;
  display: inline-block;
  padding: 16px;
  text-align: center;
  width: 120px;
  height: 120px;
  border-radius: 50%;
  border: 2px solid #1d2087;
}
.col-sm-2{
	margin-left:65px;}
.circle::before,
.circle::after {
  position: absolute;
  z-index: -1;
  display: block;
  content: '';
}
.circle,
.circle::before,
.circle::after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all .5s;
  transition: all .5s;
}

.circle {
  position: relative;
  z-index: 2;
  background-color: #fff;
  border: 2px solid #5c5eae;
  color: #5c5eae;
  line-height: 50px;
  overflow: hidden;
}

.circle:hover {
  color: #fff;
}
.circle::after {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  -webkit-transform: scale(.5);
  transform: scale(.5);
}
.circle:hover::after {
  background: #5c5eae;
  border-radius: 50%;
  -webkit-transform: scale(.9);
  transform: scale(.9);
}

.circle1 {
  opacity: 0.6;
}

.circle2 {
  opacity: 0.6;
}

.circle3 {
  opacity: 0.6;
}
.circle4 {
  opacity: 0.6;
}
.circle a {
  text-decoration: none;
  color: #1d2087;
}

.circle h2 {
  font-size: 18px;
}

.circle h2 small {
  color: #1d2087;
}

.circle p {
  font-size: 20px;
  line-height: 26px;
}
  body, html{
	height: 100%;
 	background-repeat: no-repeat;
 	background:url(io.jpg);
 	font-family: 'Oxygen', sans-serif;
	background-size: 100%;
	background-attachment: fixed;
}
.topnav {
  overflow: hidden;
}

.topnav a {
  margin-left:140px;
  float: left;
  display: block;
  color: #4f4643;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: "Franklin Gothic Demii";
  font-size: 25px;
}

.topnav a:hover {
  background-color: #f46242;
  color: black;
}

.topnav .icon {
  display: none;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
          </style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <?php
        {?>
        <div class="row">
                <div class="col-md-3" style="margin-bottom: 30px;">
                    <h5><a href="#" data-toggle="modal" data-target="#myModal" class="feedback_button">Send New Technical issue</a></h5>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-3" style="margin-bottom: 30px;">
                    <h5><a href="#" data-toggle="modal" data-target="#myModal2" class="feedback_button">Send New Misclaneous Issue</a></h5>   
                </div>
            </div>
        <?php }?>
        <?php
        $qry="SELECT * FROM issues ORDER BY issue_id";
        $result=mysql_query($qry,$con);
        while($row=mysql_fetch_array($result))
        {
            ?>
        <div class="container" style="margin-bottom: 50px;">
            <a href="#">
                <div class="row" style="border:1px solid #000;">
                    <div class="col-md-3" style="padding: 0px;"><img src="Issuephoto/<?php echo $row["related_photo"]?>" alt="Issue related pic"class="img-responsive"/></div>
                    <div class="col-md-9" style="padding-top: 30px;font-size: 40px;"><?php echo $row["issue_title"] ?></div>
                </div>
                <div class="row" style="border:1px solid #000;padding: 15px;">
                    <div class="col-md-6" >Date & time  of posted:<span style="color:#6B6A6B;"><?php echo $row["added_on"] ?></span></div>
                    <div class="col-md-6">Status:<span style="color:#6B6A6B;"><?php echo $row["issue_status"] ?></span></div>
                </div>
            </a>
        </div>
        <?php
        }
        ?>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Issue(Technical)</h4>
        </div>
        <div class="modal-body">
          <p><form>
    <div class="form-group">
      <label for="email">Issue-Title:</label>
      <input type="" class="form-control" id="email" placeholder="Enter Title" name="txttitle">
    </div>
    <div class="form-group">
      <label for="pwd">Product-Description:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Description" name="txtproduct">
    </div>
    <div class="form-group">
      <label for="comment">Issue-Description:</label>
  <textarea class="form-control" rows="5" id="comment" name="txtdesc"></textarea>
    </div> 
	    <span id="fileselector">
        <label class="btn btn-default" for="upload-file-selector">
            <input id="upload-file-selector" type="file" name="upfile">
            <i class="fa_icon icon-upload-alt margin-correction"></i>upload file
        </label>
    </span>
 <input type="submit" class="btn btn-primary" name="techsubmit">
  </form></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
		 <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Issue(Non-technical)</h4>
        </div>
        <div class="modal-body">
		  <p><form>
    <div class="form-group">
      <label for="email">Issue-Title:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Title" name="txttitle">
    </div>
    <div class="form-group">
      <label for="comment">Issue-Description:</label>
  <textarea class="form-control" rows="5" id="comment" name="txtdesc"></textarea>
    </div> 
    <span id="fileselector">
        <label class="btn btn-default" for="upload-file-selector">
            <input id="upload-file-selector" type="file" name="upfile">
            <i class="fa_icon icon-upload-alt margin-correction"></i>upload file
        </label>
    </span>
 <input type="submit" class="btn btn-primary" name="missubmit"/>
  </form>
		  </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    </body>
</html>
<?php
}
else
{
    header("Location:Login_user.php");
}
?>
