<?php
include("db.php");



if(isset($_POST['insert'])) 
{

     $CountryName = mysqli_real_escape_string($conn, $_POST['countryname']);
     $CountryCapital = mysqli_real_escape_string($conn, $_POST['countrycapital']);
     $CountryCode = mysqli_real_escape_string($conn, $_POST['countrycode']);



     $sql = "INSERT INTO `countries`(`countryName`, `countryCapital`, `countryCode`) VALUES ('$CountryName','$CountryCapital','$CountryCode')";


     $result = mysqli_query($conn , $sql);


     if (!$result) {
        ?> 
            <script language="javascript">
              alert("OOPs Something Went Wrong on our end.");
              location.replace("home");
           </script>
        <?php
      }
      else
      {
          ?>
        <script language="javascript">
          alert("Insert Successfully.");
          location.replace("home");
        </script>

        <?php
      }


}



?>