<?php session_start();
 include './gecdp.php';
if((isset($_SESSION["userid"]) && isset($_SESSION["password"]))||(isset($_SESSION[""])&& isset($_SESSION[""]) && isset($_SESSION[""])))
{
    
    
if(isset($_REQUEST["btnsubmit"]))
{
    $title=$_REQUEST["txttitle"];
    $rate=$_REQUEST["rate"];
    $desc=$_REQUEST["txtdesc"];
    $feedback_type=$_REQUEST["txttype"];
    
    $qry="INSERT INTO feedback
        (student_id,feedback_title,feedback_rate,feedback_desc,added_on,feedback_type)
        VALUES
        ('".$_SESSION["userid"]."','".$title."','".$rate."','".$desc."',now(),'".$feedback_type."');
            ";
    if(mysql_query($qry,$con))
    {
        ?>
        <script>
            alert('Your feedback is sent sucessfully!!!!');
            window.location.href="Feedback_view.php";
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
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <link rel="stylesheet" href="css\bootstrap.min.css">
        <script src="js\bootstrap.min.js"></script>
        <script src="jquery\jquery-3.2.1.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php include './header.php';?>
        <div class="container">
            <?php if(isset($_SESSION["userid"])&& isset($_SESSION["password"]))
            {?>
            <div class="row">
                <div class="col-md-3" style="margin-bottom: 30px;">
                    <h5><a href="#" data-toggle="modal" data-target="#feedbackModal" class="feedback_button">Send New Feedback</a></h5>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-3" style="margin-bottom: 30px;">
                    <h5><a href="Suggestion_view.php" class="feedback_button">View Suggestion</a></h5>   
                </div>
            </div>
            <?php }?>
            <?php
                $qry="SELECT * FROM feedback";
                $result=mysql_query($qry,$con);
                while($row=mysql_fetch_array($result))
                {
//                    echo"<div class='row' style='background-color:#ff0000;padding:10px;margin-top:10px;'>";
//                    echo "<a href='#'>";
//                    echo $row["feedback_title"];
//                    echo "</div>";
//                    echo"<div class='row' style='background-color:#336699'>";
//                    echo $row["added_on"];
//                    echo "</a>";
//                    echo"</div>";
                    ?>
            <div style="margin-bottom: 50px;">
                <a href="#" style="text-decoration: none;"><b>
                <div class="row" style="border:1px solid #000;">
                    <div class="col-md-3" style="padding: 0px;"><img src="images/feedback.jpg" class="img-responsive"/></div>
                    <div class="col-md-9" style="padding-top: 30px;font-size: 40px;"><?php echo $row["feedback_title"]; ?></div>
                </div>
                <div class="row" style="border:1px solid #000;padding: 15px;">
                    <div class="col-md-3" style="color:#000;">FEEDBACK DATE & TIME:</div>
                    <div class="col-md-9" style="color:#6B6A6B;"><?php echo $row["added_on"]?></div>                    
                </div></b>
            </a>
            </div>
                    <?php
                }
    ?>
        </div>
<!--        feedback send-->


  <!-- Modal -->
  <div class="modal fade" id="feedbackModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Feedback(Miscellaneous)</h4>
        </div>
        <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Feedback-Title:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Title" name="txttitle">
    </div>
    <div class="form-group">
        <label class="control-lable">Feedback-Type:</label>
<!--	  <h6></h6>
	   <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Type
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">Type1</a></li>
              <li><a href="#">Type2</a></li>
              <li><a href="#">Type3</a></li>
              <li><a href="#">Type4</a></li>
              <li><a href="#">Type5</a></li>
            </ul>
            </label>
            </div> -->
        
    <select name="txttype" class="form-control">
        <option value="">Select type</option>
        <?php
            $qry_q="SELECT * FROM feedback_title ORDER BY fid";
            $result_q=mysql_query($qry_q,$con);
            while($row_q=mysql_fetch_array($result_q))
            {
                echo "<option>".$row_q["ftitle"]."</option>";
            }
        ?>
    </select>


    </div>
    <div class="form-group">
      <label for="pwd">Rating:
	  <label class="radio-inline">
              <input type="radio" name="rate" value="Positive" checked="checked">Positive
    </label>
    <label class="radio-inline">
        <input type="radio" name="rate" value="Negative">Negative
    </label>
	</label>
    </div>
    <div class="form-group">
      <label for="comment">Feedback:</label>
  <textarea class="form-control"  name="txtdesc" rows="5" id="comment"></textarea>
    </div> 
        <div>
            <input type="submit" name="btnsubmit"/>
        </div>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<!--feedback send end-->
    </body>
</html>
<?php
}
else
{
    ?>
    <script>
        alert('Hello there you have to be logged in to access this page please first log in');
        window.location.href="wrapper.php";
    </script>    
    <?php
}
?>
