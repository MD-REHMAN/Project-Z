<?php session_start();
 include './gecdp.php';
if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
{
    if(isset($_REQUEST["btnsubmit"]))
    {
        $sugtitle=$_REQUEST["txtsugtitle"];
        $sugdesc=$_REQUEST["txtsugdesc"];
        
        $qry="INSERT INTO suggestion
                (student_id,suggetion_title,suggetion_desc,added_on)
                VALUES
                ('".$_SESSION["userid"]."','".$sugtitle."','".$sugdesc."',now())
                ";
        //echo $qry;
        if(mysql_query($qry,$con))
        {
           ?>
            <script>
            alert('Your suggestion is sent sucessfully!!!!');
            window.location.href="Suggestion_view.php";
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
          <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php
            include './header.php';
        ?>
        <div class="container">
        <div class="row">
                <div class="col-md-3" style="margin-bottom: 30px;">
                    <h5><a href="#" data-toggle="modal" data-target="#suggestionModal" class="feedback_button">Send New Suggetion</a></h5>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-3" style="margin-bottom: 30px;">
                    <h5><a href="Feedback_view.php" class="feedback_button">View Feedback</a></h5>   
                </div>
            </div>
        <?php
            $qry="SELECT * FROM suggestion ORDER BY suggetion_id";
            $result=mysql_query($qry,$con);
            while($row=mysql_fetch_array($result))
            {
                ?>
            <div style="margin-bottom: 50px;">
                <a href="#" style="text-decoration: none;"><b>
                <div class="row" style="border:1px solid #000;">
                    <div class="col-md-3" style="padding: 0px;"><img src="images/feedback.jpg" class="img-responsive"/></div>
                    <div class="col-md-9" style="padding-top: 30px;font-size: 40px;"><?php echo $row["suggetion_title"]; ?></div>
                </div>
                <div class="row" style="border:1px solid #000;padding: 15px;">
                    <div class="col-md-3" style="color:#000;">DATE OF SUGGETION:</div>
                    <div class="col-md-9" style="color:#6B6A6B;"><?php echo $row["added_on"]?></div>                    
                </div></b>
            </a>
            </div>
        <?php
            }
        ?>
        
        </div>  
          <!-- Modal -->
  <div class="modal fade" id="suggestionModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Suggestion</h4>
        </div>
        <div class="modal-body">
          <p><form>
            <div class="form-group">
              <label for="email">Suggestion-Title:</label>
              <input type="text" class="form-control" id="email" placeholder="Enter Title"name="txtsugtitle">
            </div>
            <div class="form-group">
              <label for="comment">Suggestion:</label>
          <textarea class="form-control" rows="5" id="comment" name="txtsugdesc"></textarea>
            </div> 
            <div>
                <input type="submit" name="btnsubmit"/>
            </div>
          </form></p>
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
