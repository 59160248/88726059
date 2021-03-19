<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "authors";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   }

   $sql = "SELECT authorID, author, penname FROM authors";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
      echo "รหัส: " . $row["authorID"]. "<br>". 
            "ชื่อ: " . $row["author"]. "<br>". 
            "นามปากกา: " . $row["penname"]. "<br>". 
            "<hr width='250', size='5', color='BBBBBB', align='left'>";
   }
   } else {
   echo "0 results";
   }
   $conn->close();
?>