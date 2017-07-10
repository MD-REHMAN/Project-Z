<?php session_start();
 include './gecdp.php';
 if(isset($_SESSION["userid"]) && $_SESSION["password"])
 {
     if(isset($_REQUEST["btnsubmit"]))
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
        <h2>Miscallaneous form</h2>
        <form method="POST" enctype="multipart/form-data">
            <div>
                <label>Issue title</label>
                <input type="text" name="txttitle"/>
            </div>
            <div>
                <label>Issue Discription</label>
                <textarea name="txtdesc" rows="4" cols="20">
                </textarea>
            </div>
            <div>
                <label>Related photos</label>
                <input type="file" name="upfile"/>                
            </div>
            <div>
                <input type="submit" name="btnsubmit"/>
            </div>
        </form>
    </body>
</html>
<?php
     }
 }
 else
 {
     header("Location:Login_user.php");
 }
?>