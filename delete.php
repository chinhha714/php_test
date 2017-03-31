<?php

include_once 'dbconfig.php';
include_once 'header.php';
 
if(isset($_POST['btn-del'])) {
    $id = $_GET['delete_id'];
    $crud->delete($id);
    header("Location: delete.php?deleted"); 
}

?>

<div class="container" style="margin: 100px auto;">
<?php
    if(isset($_GET['deleted'])) {
?>
       <div class="alert alert-success">
           <strong>Success!</strong> record was deleted... 
       </div>
    <?php
    } else {
?>
       <div class="alert alert-danger">
           Are you sure to remove the following record? 
       </div>
<?php
    }

    if(isset($_GET['delete_id']))  {
?>
      <table class='table table-bordered'>
          <tr>
              <th>#</th>
              <th>Address</th>
              <th>City</th>
              <th>State</th>
              <th>Zip</th>
              <th>Sales Date</th>
              <th>Sales Price</th>
         </tr>
<?php
         $stmt = $DB_con->prepare("SELECT p.property_id, p.address, p.city, p.state, p.zip, s.sales_date, s.sales_price 
                                   FROM property p
                                   INNER JOIN sales s on p.property_id = s.property_id  
                                   WHERE p.property_id = :id");
         $stmt->execute(array(":id"=>$_GET['delete_id']));
         while($row = $stmt->fetch(PDO::FETCH_BOTH)) {
?>
             <tr>
                 <td><?php print($row['property_id']); ?></td>
                 <td><?php print($row['address']); ?></td>
                 <td><?php print($row['city']); ?></td>
                 <td><?php print($row['state']); ?></td>
                 <td><?php print($row['zip']); ?></td>
                 <td><?php print($row['sales_date']); ?></td>
                 <td><?php print('$'.number_format($row['sales_price'])); ?></td>
             </tr>
<?php
         }
?>
     </table>
<?php
  }

  if(isset($_GET['delete_id'])) {
?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
            <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; YES</button>
            <a href="property-valuation.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NO</a>
        </form>  
<?php
  } else {
?>
        <a href="property-valuation.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to Property Valuation</a>
<?php
  }
?>
</div>

<?php include_once 'footer.php'; ?>