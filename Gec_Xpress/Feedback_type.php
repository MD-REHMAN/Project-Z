<?php session_start();
if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
{
include './gecdp.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            $qry="SELECT * FROM feedback_title ORDER BY fid";
//            echo $qry;
            $result=mysql_query($qry, $con);
//            echo $result;
        echo '<ul>';
            while($row=mysql_fetch_array($result))
            {                
                echo "<li><a href='Feedback_form.php?type=".$row["ftitle"]."'>".$row["ftitle"]."</a></li>";
            }
            echo '</ul>';
            
        ?>

    </body>
</html>
<?php
}
else{
    header("Location:Login_user.php");
}
?>
