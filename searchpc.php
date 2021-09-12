<!DOCTYPE html>

<html lang="en">
  
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./index.css">
</head>
<body>


<div class="container-fluid text-center">  

  <div class="row content">
    
    <div class="col-sm-8 text-left"> 

      

      <?php

      $i = 2;
      $servername = "localhost";
      $username = "newuser";
      $password = "simona";
      $dbname = "portfolio";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      
      $sql = "SELECT * FROM micros where micro_id=1";
      $result = mysqli_query($conn, $sql);

     
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td id='item'>" . $row["product"]. "</td></tr>";
              echo "<tr><td id='item'>" . $row["ram"]. "</td></tr>";
      $i++;
          }
      
      } else {
          echo "0 results";
      }

      mysqli_close($conn);
      $GLOBALS['z']=$GLOBALS['i'];

      ?> 

      </div>
    </div>
  </div>


 


</body>
</html>
