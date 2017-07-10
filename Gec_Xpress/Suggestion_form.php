<?php session_start();
if(isset($_SESSION["userid"]) && $_SESSION["password"])
{
    include './gecdp.php';
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
    </head>
    <body>
        <h2>Suggetion_form</h2>
        <form method="POST" enctype="multipart/form-data">
            <div>
                <label>Suggestion titile:</label>
                <input type="text" name="txtsugtitle"/>
            </div>
            <div>
                <label>Suggestion:</label>
                <textarea name="txtsugdesc" rows="4" cols="20">
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
else
{
    header("Location:Login_user.php");
}
?>
