<?php

    include_once 'dbconfig.php';
    include_once 'header.php'; 
?>

<div class="clearfix"></div>

<div class="container" style="margin: 100px auto;">
    <header class="jumbotron">
        <div class="container">
            <h1>Welcome to Property Valuation!</h1>
            <p>View and manage real estate property valuation to provide a comprehensive on-site property report with neighborhood characteristics along with an independent assessment.</p>
            <a href="add-data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add New Property</a>
        </div>
    </header>
    
    <br />

    <table class='table table-bordered table-responsive'>
        <tr>
            <th>#</th>
            <th>Subject Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
            <th>Sale Date</th>
            <th>Sale Price</th>
            <th colspan="2" align="center">Actions</th>
        </tr>
<?php
    $query = "SELECT p.property_id, p.address, p.city, p.state, p.zip, s.sales_date, s.sales_price 
              FROM property p
              INNER JOIN sales s on p.property_id = s.property_id";       
    $records_per_page = 3;
    $newquery = $crud->paging($query, $records_per_page);
    $crud->dataview($newquery);
?>
    <tr>
        <td colspan="9" align="center">
            <div class="pagination-wrap">
                <?php $crud->paginglink($query, $records_per_page); ?>
             </div>
        </td>
    </tr>
</table>
</div>

<?php include_once 'footer.php'; ?>