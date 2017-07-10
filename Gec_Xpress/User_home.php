<?php session_start();
if(isset($_SESSION["userid"]) && $_SESSION["password"])
{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--  Custom style starts-->
  
  <style>
      .bubble
      {
          height: 120px;
          width: 120px;
          background-color: #FFF;
          border-radius: 50%;
          border:3px solid #373737;
          float: left;
          margin:10px 85px;
      }
      .bubble_text
      {
          margin: 32px;
          font-size: 20px;
          margin-top:40px;
      }
      .bubble:hover
      {
          box-shadow: 1px 1px 15px #1D1D1D;
      }
  </style>
    </head>
    <body>
        <div style="padding-bottom: 50px;">
        <?php
        include './header.php';
        include './Slider.php';
        ?>
        </div>
        <div class="container">
        <a href="News_view.php">
            <div class="bubble">
                <div class="bubble_text">News</div>
            </div>        
        </a>
        <a href="Feedback_view.php">
            <div class="bubble">
                <div class="bubble_text" style="margin-left: 15px;">Feedback</div>
            </div> 
        </a>
        <a href="Suggestion_view.php">
            <div class="bubble">
                <div class="bubble_text" style="margin-left: 10px;">Suggestion</div>
            </div> 
        </a>
        <a href="Issue_tech_view.php">
            <div class="bubble">
                <div class="bubble_text">Issue</div>
            </div> 
        </a>
<!--        <a href="Logout.php">Logout</a>-->
        </div>
        <div class="row" style="padding-bottom: 50px;"></div>
        <?php
            $qry="SELECT * FROM user_registration WHERE rollno='".$_SESSION["userid"]."'";
            //echo $qry;
            $result=mysql_query($qry,$con);
            $row=mysql_fetch_array($result);
            //echo $row["branch"];
            $qry_s="SELECT * FROM news WHERE dept_name='".$row["branch"]."'";
            //echo $qry_s;
            $result_s=mysql_query($qry_s,$con);
            while($row_s=mysql_fetch_array($result_s))
            {
                ?>
                <div class="container" style="margin-bottom: 50px;">
                    <a href="#">
                        <div class="row" style="border:1px solid #000;">
                            <div class="col-md-3" style="padding: 0px;"><img src="News/<?php echo $row_s["related_photo"]?>" alt="News related pic"class="img-responsive"/></div>
                            <div class="col-md-9" style="padding-top: 30px;font-size: 40px;"><?php echo $row_s["news_title"] ?></div>
                        </div>
                        <div class="row" style="border:1px solid #000;padding: 15px;">
                            <div class="col-md-6" >Date & time  of posted:<span style="color:#6B6A6B;"><?php echo $row_s["added_on"] ?></span></div>
                            <div class="col-md-6">Last Date & Time:<span style="color:#6B6A6B;"><?php echo $row_s["last_date"] ?></span></div>
                        </div>
                    </a>
                </div>    
                <?php
            }
        ?>
    </body>
</html>
<?php
}
else
{
    header("Location:header.php");
}
?>
