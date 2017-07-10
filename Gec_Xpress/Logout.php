<?php session_start();
if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
{

    $_SESSION["userid"]="";
    $_SESSION["password"]="";
    
    session_destroy();
    
    header("Location:Login_user.php");
}
else
{
    header("Location:User_home.php");
}