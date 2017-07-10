<?php session_start();
include './gecdp.php';

if(isset($_REQUEST["btnsubmit"]))
{
    $userid=$_REQUEST["txtuser"];
    $password=$_REQUEST["txtpass"];
    
    $qry="SELECT * FROM user_registration WHERE rollno='".$userid."' AND password='".$password."'";
    //echo $qry;
    $result=mysql_query($qry,$con);
    //echo $result;
    $row=mysql_fetch_array($result);
    if(mysql_affected_rows()>0)
    {
        $_SESSION["userid"]=$userid;
        $_SESSION["password"]=$password;
        ?>
        <script>
            window.location.href="User_home.php"
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('Incorrect User Id and password');
            window.location.href="Login_user.php";
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
        <h2>User Login</h2>
        <form method="POST" enctype="multipart/form-data">
            <div>
                <label>User Id:</label>
                <input type="text" name="txtuser" placeholder="Enter your roll Number"/>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="txtpass" placeholder="Enter your secret password"/>
            </div>
            <div>
                <input type="submit" name="btnsubmit" value="Login"/>
                <a href="Profile_page.php">Registration</a>
            </div>
        </form>
    </body>
</html>
<?php
}
?>
