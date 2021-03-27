<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Shopping info</title>

    <style>
      .row > div {
        background: lavender;
        border: 1px solid grey;
        height: 200px;
    }
    .container > div{
            position: relative;
            min-height: 100vh;
        }
      .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 2.5rem;            /* Footer height */
  }
    </style>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="../index.html">Shopping info</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="../index.html">หน้าแรก</a></li>
        <li><a href="addNew.html">เพิ่มข้อมูล</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <h1>ผลการค้นหา</h1>
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
    $dataInput = $_POST['dataInput'];
    if($dataInput != ""){
    $sql = "SELECT shopID, shopName, shopDetail, shopPrice FROM shopping WHERE shopID LIKE '%".$dataInput."%' or 
                                                                               shopName LIKE '%".$dataInput."%' or 
                                                                               shopDetail LIKE '%".$dataInput."%' or 
                                                                               shopPrice LIKE '%".$dataInput."%'";
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
    }else{
        echo "ไม่พบข้อมูล";
    }
   
?>
</div>
<footer  class="footer">
        <ul class="pager">
          <li class="previous"><a href="../index.html">กลับหน้าหลัก</a></li>
        </ul>
      </footer>
</body>
