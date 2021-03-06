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
    </style>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="../index.html">Shopping info</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="../index.html">หน้าแรก</a></li>
        <li><a href="addNew.html">เพิ่มข้อมูล</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <h1>Shopping info</h1>
    <form action="get.php" method="post">
        <label for="data">ค้นหา : </label>
        <input type="text" id="dataInput" name="dataInput"  placeholder="ใส่คำที่ต้องการค้นหา">
        <input type="submit" value="ค้นหา" class="btn btn-primary">
    </form><br>
    <div id="show"></div>
  </div>
    <script>
        var xmlhttp = new XMLHttpRequest();
        var obj,show;
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            show = document.getElementById("show");
            show.innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET", "data.php", true);
        xmlhttp.send();
        </script>
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
$itemID = $_POST['itemID'];
$itemName = $_POST['itemName'];
$itemDetail = $_POST['itemDetail'];
$itemPrice = $_POST['itemPrice'];

if($itemID !="" && $itemName !="" && $itemDetail !="" && $itemPrice !="" ){
  $sql = "INSERT INTO shopping (shopID, shopName, shopDetail, shopPrice) VALUES ('$itemID', '$itemName', '$itemDetail', '$itemPrice')";
}
$successfully = "New record created successfully";
$error = "Error: " . $sql . "<br>" . $conn->error;
if ($conn->query($sql) === TRUE) {
  echo $successfully;
} else {
  echo $error;
}

$conn->close();

?>
</div>
</body>
