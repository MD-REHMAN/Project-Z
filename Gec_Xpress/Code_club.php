<?php
include './gecdp.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  float: left;
  margin: 15px;
  margin-left: 18.2px;
  height: 450px;
}

.container {
  padding: 0 16px;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<!--<h2 style="text-align:center">User Profile Card</h2>-->
<?php 
$qry="SELECT * FROM codeclub ORDER BY id";
$result= mysql_query($qry,$con);
while($row= mysql_fetch_array($result))
{
?>
<div class="card" style="">
  <img src="team2.jpg" alt="John" style="width:100%">
  <div class="container">
    <h3><?php echo $row["name"]; ?></h3>
    <p class="title"><?php echo $row["work"]; ?></p>
    <p>GEC Raipur</p>
    <div style="margin: 24px 0;">
      <a href="<?php echo $row["email"];  ?>"><i class="fa fa-google-plus"></i></a>  
      <a href="<?php echo $row["linkedin"]; ?>"><i class="fa fa-linkedin"></i></a>  
      <a href="<?php echo $row["facebook"];  ?>"><i class="fa fa-facebook"></i></a>  
      <a href="<?php echo $row["github"];  ?>"><i class="fa fa-github"></i></a>
   </div>
   <p><button>Contact</button></p>
  </div>
</div>
<?php 
}
?>
</body>
</html>
