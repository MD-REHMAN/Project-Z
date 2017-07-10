<?php
include './gecdp.php';

if(isset($_REQUEST["btnsubmit"]))
{
    echo "vikash";
    $name=$_REQUEST["cname"];
    $workas=$_REQUEST["cwork"];
    $email=$_REQUEST["cemail"];
    $linked=$_REQUEST["clink"];
    $face=$_REQUEST["cface"];
    $git=$_REQUEST["cgit"];
    $number=$_REQUEST["cnumber"];
    
    $source_file=$_FILES["upfile"]["tmp_name"];
    echo $source_file;
    $target_file="codeclub/".$_FILES["upfile"]["name"];
    echo $target_file;
    if(move_uploaded_file($source_file, $target_file))
    {
        $imagename=$_FILES["upfile"]["name"];
    }
    else
    {
        ?>
<script>
    alert('Error in uploading file!!!!Please fill again Thankyou');
    window.location.href="AddCodeClub.php";
</script>
            <?php
    }
    
    $qry="INSERT INTO codeclub
                (name,work,email,linkedin,facebook,github,photo,number)
                VALUES
                ('".$name."','".$workas."','".$email."','".$linked."','".$face."','".$git."','".$imagename."','".$number."');
                ";
    if(mysql_query($qry,$con))
    {
        ?>
        <script>
            alert('Data saved sucessfully!!!!');
            window.location.href="AddCodeClub.php";
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
else
{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
        <div>
            <div>
                <label>Name:</label>
                <input type="text" name="cname"/>
            </div>
            <div>
                <label>Work as:</label>
                <input type='text' name="cwork"/>
            </div>
            <div>
                <label>Photo:</label>
                <input type="file" name="upfile"/>
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="cemail"/>
            </div>
            <div>
                <label>Linkedin id:</label>
                <input type="text" name="clink"/>
            </div>
            <div>
                <label>Facebook id:</label>
                <input type="text" name="cface"/>
            </div>
            <div>
                <label>Github id:</label>
                <input type="text" name="cgit"/>
            </div>
            <div>
                <label>Contact:</label>
                <input type="number" name="cnumber"/>
            </div>
            <div>
                <input type="submit" name="btnsubmit" />
            </div>
        </div>
            
            </form>
    </body>
</html>
<?php
}
?>
