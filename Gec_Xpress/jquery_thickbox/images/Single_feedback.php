<?php include './gecdp.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            $qry="SELECT * FROM feedback";
            $result=mysql_query($qry,$con);
            $row=mysql_fetch_array($result);
        ?>
        <div class="container">
            <div class="row">
                <p>Feedback Title:<p>
            </div>
            <div class="row">
                <p><?php echo $row["feedback_title"]; ?></p>
            </div>
            <div class="row">
                <div class="col-md-6"><p>Feedback type:</p></div>
                <div class="col-md-6"><p><?php echo $row["feedback_type"]; ?></p></div>
            </div>
            <div class="row">
                <div class="col-md-6"><p>Rating</p></div>
                <div class="col-me-6"><p><?php echo $row["feedback_rate"]; ?></p></div>
            </div>
            <div class="row"><p><?php echo $row["feedback_desc"]; ?></p></div>
            <div class="row">
                <p>Feedback data & time:</p>
                <p><?php echo $row["added_on"]; ?></p>
            </div>
        </div>
    </body>
</html>
