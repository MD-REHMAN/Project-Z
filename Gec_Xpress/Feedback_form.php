<?php session_start();
if(isset($_SESSION["userid"]) && $_SESSION["password"])
{
    include './gecdp.php';
//    echo $feedback_type;

if(isset($_REQUEST["btnsubmit"]))
{
    $title=$_REQUEST["txttitle"];
    $rate=$_REQUEST["rate"];
    $desc=$_REQUEST["txtdesc"];
    
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
    </head>
    <body>
        <h2>Feedback form</h2>
        <form method="POST" enctype="multipart/form-data">
        <div>
            <label>Feedback title:</label>
            <input type="text" name="txttitle"/>
        </div>
        <div>
            <label>Rating:</label>
            <input type="radio" name="rate" value="Positive" checked="checked" />Positive
            <input type="radio" name="rate" value="Negative" />Negative
        </div>
        <div>
            <label>Discription of Feedback:</label>
            <textarea name="txtdesc" rows="4" cols="20">
            </textarea>
        </div>
        <div>
            <input type="submit" name="btnsubmit"/>
        </div>
            </form>
    </body>
</html>
<?php
}
 else {
    header("Location:Feedback_type.php");    
}
?>
