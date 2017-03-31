<!DOCTYPE html>
<html>
  <head>
    <title>Property Valuation Applicaiton Demo - property and sales</title>
    <link href="bootstrap/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
    <script src="bootstrap/js/jquery-3.2.0.min.js"></script>
    <script src="bootstrap/js/jquery-ui.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="bootstrap/css/img/house_logo.jpg" alt="house.logo" height="40"></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="property-valuation.php">Property Valuation</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Loans and Credit <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Mortgage Loans</a></li>
                <li><a href="#">Auto Loans</a></li>
                <li><a href="#">Student Loans</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Mortgage Rates</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Home Lending</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Sign in</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Insurance <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Auto Insurance</a></li>
                <li><a href="#">Home Insurance</a></li>
                <li><a href="#">Business Insurance</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Commercial Insurance</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>