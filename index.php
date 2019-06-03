<!DOCTYPE html>
<html lang="en">
<head>
  <title>RESTAPI Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="https://s3.amazonaws.com/kinlane-productions/salesforce/salesforce-rest-api.png">
</head>
<body>

<div class="jumbotron text-center">
  <h1><u>RESTAPI Simple Project</u></h1>
  <br>
  <p>In this project some data will be inserted in database and will be displayed as JSON in the form of RESTAPI.</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="divborder col-sm-4">
      <h3><u>Inset Data</u></h3>
      <br>
      <p>Data will be inserted here will be displayed in JSON Format</p>
      <br>
      <button type="button" class="btn btn-primary" onclick="window.location.href='#insertdiv'">Insert</button>
    </div>
    <div class="divborder col-sm-4">
      <h3><u>View Data</u></h3>
      <br>
      <p>Data will be displayed in a normal table using PHP.</p>
      <br>
      <button type="button" class="btn btn-primary" onclick="window.location.href='#viewdiv'">VIEW</button>
    </div>
    <div class="divborder col-sm-4">
      <h3><u>RESTAPI</u></h3>
      <br>        
      <p>API can be accessed here.</p>
      <br>
      <button type="button" class="btn btn-primary" onclick="window.location.href='JSONAPI'">JSON API</button>
    </div>
  </div>
</div>

<br>
<br>
<br>



<script language="javascript">

function validateForm() 

{

  var x = document.forms["myForm"]["countryname"].value;
  if (x == "") 
  {
    alert("Country Name must be filled out and shount not include a number.");
    return false;
  }

  var y = document.forms["myForm"]["countrycapital"].value;
  if (y == "") 
  {
    alert("Capital must be filled out and shount not include a number.");
    return false;
  }

  var z = document.forms["myForm"]["countrycode"].value;
  if (z == "") 
  {
    alert("Country Code must be filled out and shount not include a number. ");
    return false;
  }

}

</script>


<div class="container text-center form_color">
    <br>
    <br>
  <h2><u>Insert Data Here</u></h2>
  <br>
  <p>Insert data that you want to get in your API.</p>          
  
  <br>
  <br>

  <div class="row">
    <div class="col-sm-3">
    </div>




    <div class="divborder col-sm-6" id="insertdiv">
      

    <form name="myForm" action="read" method="post"  onsubmit="return validateForm()">
    <div class="form-group">
      <label for="usr">Country Name:</label>
      <input type="text" class="form-control" id="usr" name="countryname" placeholder="India">
    </div>
    <div class="form-group">
    <label for="usr">Capital:</label>
      <input type="text" class="form-control" id="usr" name="countrycapital" placeholder="Delhi">
    </div>

    <div class="form-group">
    <label for="usr">Country Code:</label>
      <input type="text" class="form-control" id="usr" name="countrycode" placeholder="IN">
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="insert">Submit</button>
    </form>

    </div>
    

    <div class="col-sm-3">
    </div> 

    </div>
     
</div>


<br>
<br>
<br>


<div class="container text-center view_div_color"  id="viewdiv">
    <br>
    <br>
  <h2><u>View Data</u></h2>
  <br>
  <p>All inserted data are viewed here.</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Country</th>
        <th>Capital</th>
        <th>Code</th>
      </tr>
    </thead>
    <tbody>


<?php
          include("db.php");

           $sql_qry = "SELECT * FROM `countries`";

         $query = mysqli_query($conn,$sql_qry);

         while ($rows = mysqli_fetch_array($query)) { 

?>
     <tr>
        <td><?php echo $rows['id'];?> </td>
        <td><?php echo $rows['countryName'];?> </td>
        <td><?php echo $rows['countryCapital'];?> </td>
        <td><?php echo $rows['countryCode'];?> </td>
      </tr>

 <?php     

} 

?>
      
    </tbody>
  </table>
</div>




<!-- form validation -->





<!-- Footer -->
<div class="col-sm-12 footer_div">

  <!-- Copyright -->
  <div class="text-center"><p>Copyright © <?php echo date("d/m/Y"); ?>
  <br>
  <a href=""> Deepak Yadav</a></p>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



</body>
</html>
