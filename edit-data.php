<?php

include_once 'dbconfig.php';
include_once 'header.php';

if(isset($_POST['btn-update'])) {
    $id = $_GET['edit_id'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $sales_date = $_POST['sales_date'];
    $sales_price = $_POST['sales_price'];
 
    if($crud->update($id, $address, $city, $state, $zip, $sales_date, $sales_price)){
        $msg = "<div class='alert alert-info'>
                    Record was updated successfully <a href='property-valuation.php'>HOME</a>!
                </div>";
    } else {
        $msg = "<div class='alert alert-warning'>
                    ERROR while updating record!
                </div>";
    }
}

if(isset($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    extract($crud->getID($id)); 
}
?>


<div class="container" style="margin: 100px auto;">
<?php
    if(isset($msg)) {
        echo $msg;
    }
?>

    <form method='post'>
        <table class='table table-bordered'>
            <tr>
                <td>Property Address</td>
                <td><input type='text' name='address' class='form-control' value="<?php echo $address; ?>" required></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type='text' name='city' class='form-control' value="<?php echo $city; ?>" required></td>
            </tr>
            <tr>
                <td>State</td>
                <td><input type='text' name='state' class='form-control' value="<?php echo $state; ?>" required></td>
            </tr>
            <tr>
                <td>Zip</td>
                <td><input type='text' name='zip' class='form-control' value="<?php echo $zip; ?>" required></td>
            </tr>
            <tr>
                <td>Sales Date</td>
                <td><input type='text' name='sales_date' class='form-control' value="<?php echo $sales_date; ?>" required></td>
            </tr>
            <tr>
                <td>Sales Price</td>
                <td><input type='text' name='sales_price' class='form-control' value="<?php echo $sales_price; ?>" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary" name="btn-update">
                        <span class="glyphicon glyphicon-edit"></span> Update this Record
                    </button>
                    <a href="property-valuation.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; CANCEL</a>
                </td>
            </tr>
        </table>
    </form>
</div>

<?php include_once 'footer.php'; ?>