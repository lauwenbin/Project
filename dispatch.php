<?php
$callerName = $_POST ['callerName'];
$contactNo = $_POST['contactNo'];
$locationofIncident = $_POST['locationofIncident'];
$typeofIncident = $_POST['typeofIncident'];
$descriptionofIncident = $_POST['descriptionofIncident'];

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dispatch</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container" style="width:80%">

    <?php require_once 'nav.php'; ?>

    <section style="margin-top: 20px">
        <form action="dispatch.php" method="post">

            <div class="form-group row">
                <label for="callerName" class="col-sm-4 col-form-label"> Caller's Name
                </label>
                <div class="col-sm-8">
                <?php echo $callerName; ?>
                <input type="hidden" name="callerName" id="callerName" value="
                <?php echo $callerName;?>">
            </div>
    </div>

    <div class="form-group row">
        <label for="contactNo" class="col-sm-4 col-for-label">Contact Number</label>
        <div class="col-sm-8">
            <?php echo $contactNo; ?>
            <input type="hidden" name="contactNo" id="contactNo" value="
            <?php echo $contactNo;?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="locationofIncident class="col-sm-4 col-form-label">
        Location of Incident</label>
        <div class="col-sm-8">
            <?php echo $locationofIncident; ?>
            <input type="hidden" name="locationofIncident" id="locationofIncident" value="<?php $locationofIncident;?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="typefIncident class="col-sm-4 col-form-label">
        Type of Incident</label>
        <div class="col-sm-8">
            <?php echo $typeofIncident; ?>
            <input type="hidden" name="typeofIncident" id="typeofIncident" value="<?php $typeofIncident;?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="descriptionfIncident class="col-sm-4 col-form-label">
        Description of Incident</label>
        <div class="col-sm-8">
            <?php echo $descriptionofIncident; ?>
            <input type="hidden" name="descriptionofIncident" id="descriptionofIncident" value="<?php $descriptionofIncident;?>">
        </div>
    </div>
    
        </form>
    </section>
</body>
</html>