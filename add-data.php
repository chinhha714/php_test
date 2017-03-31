<?php

include_once 'dbconfig.php';
include_once 'header.php';

if(isset($_POST['btn-save'])) {
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $sales_date = $_POST['sales_date'];
    $sales_price = $_POST['sales_price'];
 
    if($crud->create($address, $city, $state, $zip, $sales_date, $sales_price)) {
        header("Location: add-data.php?inserted");
    }
    else {
        header("Location: add-data.php?failure");
    }
}
?>

<div class="container" style="margin: 100px auto;">
<?php
if(isset($_GET['inserted'])) {
?>
    <div class="container">
        <div class="alert alert-info">
            Record was inserted successfully <a href="property-valuation.php">HOME</a>!
        </div>
    </div>
<?php
} else if(isset($_GET['failure'])) {
?>
    <div class="container">
        <div class="alert alert-warning">
            ERROR while inserting record!
        </div>
    </div>
<?php
}
?>

    <form method='post'>
        <table class='table table-bordered'>
            <tr>
                <td>Property Address</td>
                <td><input type='text' name='address' class='form-control' required></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type='text' name='city' class='form-control' required></td>
            </tr>
            <tr>
                <td>State</td>
                <td><input type='text' name='state' class='form-control' required></td>
            </tr>
            <tr>
                <td>Zip</td>
                <td><input type='text' name='zip' class='form-control' required></td>
            </tr>
            <tr>
                <td>Sale Date</td>
                <td><input type='text' id="datepicker" name='sales_date' class='form-control' required></td>
            </tr>
            <tr>
                <td>Sale Price</td>
                <td><input type='text' name='sales_price' class='form-control' required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary" name="btn-save">
                        <span class="glyphicon glyphicon-plus"></span> Create New Record
                    </button>  
                    <a href="property-valuation.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
                </td>
            </tr>
        </table>
    </form>
</div>

<?php include_once 'footer.php'; ?>