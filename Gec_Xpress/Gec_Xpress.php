<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php        
        if(isset($_SESSION["userid"]) && $_SESSION["password"])
        {
            echo"<a href='Logout.php'>Logout</a>";
        }
        else
        {
            echo"<a href='Login_user.php'>Login</a>";
        }
        ?>
        <a href="Feedback_view.php">Feedback</a>
        <a href="News_view.php">Notice</a>
        <a href="Issue_view.php">Issue</a>
    </body>
</html>
