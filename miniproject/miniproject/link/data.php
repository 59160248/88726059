<?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "shopping";

      // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   }
   $sql = "SELECT shopID, shopName, shopDetail, shopPrice FROM shopping";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
      // output data of each row 
      echo "<div class='row'>";
      while($row = $result->fetch_assoc()) {
         echo " <div class='col-sm-4'>"
            ."<h4>".$row["shopName"]."</h4>" 
            .$row["shopDetail"]. "<br>". "<br>"
            ."<button type='button' class='btn btn-danger' disabled>"."ราคา ".$row["shopPrice"]."บาท". "</button>"."<br>"
            ."</div>";
      }
      echo "</div>";
      } else {
      echo "0 results";
      }
  
   $conn->close();

?>