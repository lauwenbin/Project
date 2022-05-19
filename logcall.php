<?php

require_once'db.php';

$conn = new mysqli(DB_SERVER, DB_USER,DB_PASSWORD,DB_DATABASE);
$sql = "SELECT * FROM incident_type";
$result = $conn->query($sql);
$incidentTypes =[];
while ($row = $result->fetch_assoc()){
	$id = $row['incident_type_id']; 
	$type= $row['incident_type_desc'];
	$incidentType = ["id" => $id, "type" => $type];
	array_push($incidentTypes, $incidentType);
}
$conn->close();
?>
<!doctype html>
<html>
 <head>
 <meta charset="utf-8">
 <title>Log Call</title>
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
 <body>
 <div class="container" style="width: 80%">

 <!-- Use php require_once expression to include header image and
navigation bar from nav.php -->
 <?php require_once 'nav.php' ?>
 <!-- Create section container to place web form -->
 <section style="margin-top:20px">

 <!-- Create web form with Caller Name, Contact number, Location of
Incident, Type of Incident, Description of Incident input fields-->
 <form action="dispatch.php" method="post">

 <!-- Row for Caller Name label and textbox input-->
 <div class="form-group row">
 <label for="callerName" class="col-sm-4
col-form-label">Caller's Name</label>
 <div class="col-sm-8">
 <input type="text" class="form-control" id="callerName"
name="callerName">
 </div>
 </div>

 <!-- Row for Contact No label and textbox input-->
 <div class="form-group row">
 <label for="contactNo" class="col-sm-4
col-form-label">Contact Number (Required)</label>
 <div class="col-sm-8">
 <input type="text" class="form-control" id="contactNo"
name="contactNo">
 </div>
 </div>

 <!-- Row for Location of Incident label and textbox input-->
 <div class="form-group row">
 <label for="locationofIncident" class="col-sm-4
col-form-label">Location of Incident (Required)</label>
 <div class="col-sm-8">
 <input type="text" class="form-control"
id="locationofIncident" name="locationofIncident">
 </div>
 </div>

 <!-- Row for Type of Incident label and drop down input-->
 <div class="form-group row">
 <label for="typeofIncident" class="col-sm-4
col-form-label">Type of Incident (Required)</label>
 <div class="col-sm-8">
 <select id="typeofIncident" class="form-control"
name="typeofIncident">
<option>Select</option>
<?php
/* using for lopp to retrieve the data from array var incidentTypes--> */
for ($i = 0;$i < count($incidentTypes);$i++ ) {
	$incidentType = $incidentTypes[$i];
	echo '<option value="' . $incidentType['id'] . '">' .
	$incidentType['type'] . '</option>';
}
?>
 </select>
 </div>
 </div>

 <!-- Row for Description of Incident label and large textbox input-->
 <div class="form-group row">
 <label for="descriptionofIncident" class="col-sm-4
col-form-label">Description of Incident (Required)</label>
 <div class="col-sm-8">
 <textarea class="form-control" rows="5"
id="descriptionofIncident"
name="descriptionofIncident"></textarea>
 </div> 
</div>

<div class="form-group row">
	<div class="col-sm-4"></div>
	<div class="col-sm-8" style="text-align:center;">
		<input type= "submit" name="btnProcessCall" class="btn btn-primary" value="Process Call">
		<input type= "reset" name="btnReset" class="btn btn-primary" value="Reset ">

		
	</div>
</div> 

</form>
</section>
<footer class="page-footer font small blue pt-4 footer-copyright text-center py-3">
	&copy;2021 copyright
	<a href="www.ite.edu.sg">ITE</a>
</footer>

</div>
</body>
</html>

