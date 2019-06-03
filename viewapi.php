<?php
          

          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "countrydetails";


          $conn = mysqli_connect($servername, $username, $password, $dbname);


        //  $db_select = mysqli_select_db($conn,$dbname);

    
        $json = array();

        $sql = " SELECT * FROM `countries` ";

        $record = mysqli_query($conn,$sql);
        
        
        
        
        while($rows=mysqli_fetch_assoc($record)) 
        
        {
            $json[] = $rows;

       
       // echo $rows['countryName'];
     //    echo $rows['countryCapital'];
      //  echo $rows['countryCode'];


         }
    
         echo json_encode($json);

         header('Content-Type: application/json');

?>