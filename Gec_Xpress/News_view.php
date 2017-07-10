<?php session_start();
 include './gecdp.php';
if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
{
    if(isset($_REQUEST["btndate"]))
    {
        $start=$_REQUEST["txtstart"];
        $end=$_REQUEST["txtend"];
        $qry_s="SELECT * FROM news added_on BETWEEN ".$start." AND ".$end."";
    }
    elseif(isset ($_REQUEST["btntype"]))
    {
        $type=$_REQUEST["txttype"];
        $qry_s="SELECT * FROM news WHERE detp_name='".$type."' ";
    }
    elseif (isset ($_REQUEST["btndept"])) {
        $dept=$_REQUEST["txtdept"];
    $qry_s="SELECT * FROM news WHERE detp_name='".$dept."' ";
}
 else {
    $qry_s="SELECT * FROM news ORDER BY added_on";
}
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="style.css" type="text/css">
          
<style>
      .bubble
      {
          height: 120px;
          width: 120px;
          background-color: #FFF;
          border-radius: 50%;
          border:3px solid #373737;
          float: left;
          margin:10px 0px;
      }
      .bubble_text
      {
          margin: 32px;
          font-size: 15px;
          margin-top:20px;
          margin-left: 35px;
          text-align: center;
      }
      .bubble:hover
      {
          box-shadow: 1px 1px 15px #1D1D1D;
      }
</style>
          
    </head>
    <body>
        <?php
        include './header.php';
        ?>
        
        
        <!-- Modal of date-->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Search Notice By Date</h4>
                  </div>
                  <div class="modal-body">
                    <p><form>
              <div class="form-group">
                <label>Start Date:</label>
                <input type="date" class="form-control" id="email" placeholder="Enter Title" name="txtstart">
              </div>
              <div class="form-group">
                <label>End Date:</label>
                <input type="date" class="form-control" id="pwd" placeholder="Enter Description" name="txtend">
              </div>
                <input type="submit" class="btn btn-primary" name="btndate"/>
            </form></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
<!--        modal ends-->
        
<!-- Modal of type-->
        <div class="modal fade" id="myModal2" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Search Notice By notice type</h4>
                  </div>
                  <div class="modal-body">
                    <p><form>
              <div class="form-group">
                <label>Select notice type:</label>
                <?php
                    $qry_t="SELECT * FROM news_type ORDER BY nid";
                    $result_t=mysql_query($qry_t,$con);
                    echo"<select name = 'txttype' class='form-control'>
                    <option value=''>Select any one type</option>";
                    while($row_t=mysql_fetch_array($result_t))
                    {
                        echo "<option value='".$row_t["ntype"]."'>".$row_t["ntype"]."</option>";
                    }
                    echo"</select>";
                ?>                
              </div>
                <input type="submit" class="btn btn-primary" name="btntype"/>
            </form></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
<!--        modal ends-->
        
<!-- Modal of date-->
        <div class="modal fade" id="myModal3" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Search Notice By Department</h4>
                  </div>
                  <div class="modal-body">
                    <p><form>
              <div class="form-group">
                <label>Select the department:</label>
                                <?php
                    $qry_tt="SELECT * FROM branch ORDER BY bid";
                    $result_tt=mysql_query($qry_tt,$con);
                    echo"<select name = 'txtdept' class='form-control'>
                    <option value=''>Select any one Department</option>";
                    while($row_tt=mysql_fetch_array($result_tt))
                    {
                        echo "<option value='".$row_tt["bname"]."'>".$row_tt["bname"]."</option>";
                    }
                    echo"</select>";
                ?> 
                
              </div>
                <input type="submit" class="btn btn-primary" name="btndept"/>
            </form></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
<!--        modal ends-->
        
        <div class="container">
            <div style="padding-bottom: 50px;"></div>
            <div class="row">
                <div class="col-md-3">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <div class="bubble">
                            <div class="bubble_text">Search notice by Date:</div>
                        </div>        
                    </a>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <a href="#" data-toggle="modal" data-target="#myModal2">
                        <div class="bubble" style="margin-left:8px;">
                            <div class="bubble_text">Search notice by type:</div>
                        </div>        
                    </a>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <a href="#"data-toggle="modal" data-target="#myModal3">
                        <div class="bubble" style="float: right;padding-left: 18px;">
                            <div class="bubble_text" style="margin-left: 15px;">Search by Depart-<br>ment</div>
                        </div> 
                    </a>
                </div>
            </div>
        </div>
        <div class="row" style="padding-bottom: 50px;"></div>
        <?php
//            $qry_s="SELECT * FROM news ORDER BY added_on";
            //echo $qry_s;
            $result_s=mysql_query($qry_s,$con);
            while($row_s=mysql_fetch_array($result_s))
            {
                ?>
                <div class="container" style="margin-bottom: 50px;">
                    <a href="#">
                        <div class="row" style="border:1px solid #000;">
                            <div class="col-md-3" style="padding: 0px;"><img src="News/<?php echo $row_s["related_photo"]?>" alt="News related pic"class="img-responsive"/></div>
                            <div class="col-md-9" style="padding-top: 30px;font-size: 40px;"><?php echo $row_s["news_title"] ?></div>
                        </div>
                        <div class="row" style="border:1px solid #000;padding: 15px;">
                            <div class="col-md-6" >Date & time  of posted:<span style="color:#6B6A6B;"><?php echo $row_s["added_on"] ?></span></div>
                            <div class="col-md-6">Last Date & Time:<span style="color:#6B6A6B;"><?php echo $row_s["last_date"] ?></span></div>
                        </div>
                    </a>
                </div>
                
                <?php
            }
        ?>
    </body>
</html>
<?php
}
else
{
    header("Location:Login_user.php");
}
?>
