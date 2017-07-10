<!DocType html>
<html lang="en">
<html>
<head>
<title>Bootstarp</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="profile/style.css">
  <script src="profile/script.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
	<div class="row">
        <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
					<li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        
                        
                        
                        
                        
                        
                        <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="conrol-lable">First Name:</label>
                                    <input type="text" class="form-control border_v" name="txtfname" value="<?php echo $row["fname"]?>" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="conrol-lable">Last Name:</label>
                                    <input type="text" class="form-control border_v" name="txtlname"  value="<?php echo $row["lname"]?>" />
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Father Name:</label>
                                    <input type="text" class="form-control border_v" name="txtfather" value="<?php echo $row["fathername"]?>" />
                                </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="conrol-lable">Date of birth:</label>
                                    <input type="date" class="form-control border_v" name="txtdate" value="<?php echo $row["dob"]?>" />
                                </div>
                            </div>
                            <div>
                                <label class="conrol-lable">Gender:<br>
                                    <?php
                                        $value=$row["gender"];
                                        if($value='Male')
                                        {
                                            
                                            echo"<input type='radio' name='txtgender' value='Male' checked='checked'/>       Male";
                                            ?>
                                    <span style="margin-left: 20px;"></span>    
                                            <?php
                                            echo"<input type='radio' name='txtgender' value='Female' />       Female";
                                        }
                                        else
                                        {
                                            echo"<input type='radio' name=txtgender' value='Male'/>Male";
                                            echo"<input type='radio' name=txtgender' value='Female'  checked='checked' />Female";;
                                        }
                                    ?>
                                        </label>
<!--                                    <input type="radio" name="txtgender" value="Male" checked="checked" />Male
                                    <input type="radio" name="txtgender" value="Female"/>Female-->
                                </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Email Id:</label>
                                    <input type="email" class="form-control border_v" name="txtemail" value="<?php echo $row["emailid"]?>" />
                                </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Mobile No.:</label>
                                    <input type="number" class="form-control border_v" name="txtmobile" value="<?php echo $row["mobileno"]?>" />
                                </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Address:</label>
                                    <textarea name="txtaddress" class="form-control border_v" rows="4">
                                    </textarea>   
                                </div>
                            <div class="button_align_v">    
                                <a href="#id12" data-toggle="tab" class="btn btn-primary button_v">Save & Next</a>
                            </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step button_v">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        
                        
                        
                        
                        
                        <div class="form-group">
                                    <label class="conrol-lable">Roll No.:</label>
                                    <input type="number" class="form-control border_v" name="txtroll" value="<?php echo $row["rollno"]?>"/>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="conrol-lable">Enrollment No.:</label>
                                        <input type="text" class="form-control border_v" name="txtenroll" value="<?php echo $row["enrollment"]?>"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="conrol-lable">Semester:</label>
                                        <select name="txtsem" class="form-control border_v">
                                            <option value="">Select semester</option>
<!--                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>-->
                                            <?php
                                                include './gecdp.php';
                                                $qry_b = "SELECT * FROM semester ORDER BY id";
                                                $result_b = mysql_query($qry_b, $con);
                                                if(isset($_SESSION["userid"]) && isset($_SESSION["password"])) {
                                                    while ($row_b = mysql_fetch_array($result_b)) {

                                                        if ($row1["semester"] == $row_b["semester"]) {
                                                            echo"<option value='" . $row_b['semester'] . "' selected>" . $row_b['semester'] . "</option>";
                                                        } else {
                                                            echo"<option value='" . $row_b["semester"] . "'>" . $row_b['semester'] . "</option>";
                                                        }
                                                    }
                                                } else {
                                                    while ($row_b = mysql_fetch_array($result_b)) {
                                                        echo"<option value='" . $row_b['semster'] . "'>" . $row_b['semester'] . "</option>";
                                                    }
                                                }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="conrol-lable">Branch:</label>
                                        <select name="txtbranch" class="form-control border_v">
                                            <option value="">Select your Branch</option>
<!--                                            <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                                            <option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
                                            <option value="Electronics & Telecommunication Engineering">Electronics & Telecommunication Engineering</option>
                                            <option value="Civil Engineering">Civil Engineering</option>
                                            <option value="Mechanical Engineering">Mechanical Engineering</option>-->
<?php
                                                include './gecdp.php';
                                                $qry_b = "SELECT * FROM branch ORDER BY bid";
                                                $result_b = mysql_query($qry_b, $con);
                                                if(isset($_SESSION["userid"]) && isset($_SESSION["password"])) {
                                                    while ($row_b = mysql_fetch_array($result_b)) {

                                                        if ($row1["bname"] == $row_b["bname"]) {
                                                            echo"<option value='" . $row_b['bname'] . "' selected>" . $row_b['bname'] . "</option>";
                                                        } else {
                                                            echo"<option value='" . $row_b["bname"] . "'>" . $row_b['bname'] . "</option>";
                                                        }
                                                    }
                                                } else {
                                                    while ($row_b = mysql_fetch_array($result_b)) {
                                                        echo"<option value='" . $row_b['bname'] . "'>" . $row_b['bname'] . "</option>";
                                                    }
                                                }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Achivement(Training & Certificates):</label>
                                    <textarea name="txtachive" rows="5" class="form-control border_v">
                                    </textarea>
                                </div>
                        
                        
                        
                        
                        
                        
                        
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step button_v">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        
                        
                        
                        
                        
                        <div class="form-group">
                                    <label class="conrol-lable" class="form-control">Select your photo:</label>
                                    <input type="file" name="upfile"/>
                                </div>
                        
                        
                        
                        
                        
                        
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step4">
                        
                        
                        
                        <div class="">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="form-group col-md-6">
                                            <label class="conrol-lable">Choose password:</label>
                                            <input type="password" class="form-control border_v" name="txtpass" value="<?php echo $row["password"]?>"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="form-group col-md-6">
                                            <label class="conrol-lable">Confirm your password:</label>
                                            <input type="password" class="form-control border_v" name="txtconf" value="<?php echo $row["password"]?>"/>
                                        </div>
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                        <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                        <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                                    </ul>
                                </div>
                        
                        
                        
                        
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
</div>

</body>
</html>