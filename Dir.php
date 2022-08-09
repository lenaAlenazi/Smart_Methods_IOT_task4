<?php

$conn = mysqli_connect('localhost', 'root', '', 'panel');
if (!$conn) {
    echo " Error : " , mysqli_connect_error();
}
else if (isset($_GET['F'])) {
    echo "<h1>F</h1>";
    $sql = "INSERT INTO direction(RDirection)VALUES('Forward')";
    mysqli_query($conn, $sql);
} if (isset($_GET['B'])) {

    echo "<h1>B</h1>";
    $sql = "INSERT INTO direction(RDirection)VALUES('Backward')";
    mysqli_query($conn, $sql);
}  if (isset($_GET['L'])) {
    echo "<h1> L  </h1>";
    $sql = "INSERT INTO direction(RDirection)VALUES('Left')";
    mysqli_query($conn, $sql);
} if (isset($_GET['R'])) {
    echo "<h1>R </h1>";
    $sql = "INSERT INTO direction(RDirection)VALUES('Right')";
    mysqli_query($conn, $sql);
} if (isset($_GET['S'])) {
    echo "<h1>S</h1>";
$sql = "INSERT INTO direction(RDirection)VALUES('Stop')";
  mysqli_query($conn, $sql);
}
  ?>

  <!DOCTYPE html>
  <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruserlt</title>
</head>
<style>
  body{
    font-family: arial;
  	font-size: 18px;
  	margin: 0;
    background-image: url("background.gif");
  	color: #000;
  	display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
  }

  .Back{

  	width: 140px;
  	padding: 9px 22px;
  	background: white;
  	border: 2px solid #009999;
  	color: #008f8f;
  	font-size: 18px;
  	cursor: pointer;
  	border-radius: 10px;
    align-items: center;
    justify-content: center;
    }
    .Back:hover {
  	background-color:#00FFFF;
  	transition: 0.7s;
    }
    h1 {
      width: 140px;
      padding: 9px 22px;
    font-size: 200px;
    color: white;
    align-items: center;
    justify-content: center;
    font-family: 'Inter UI', sans-serif;
    height: 50vh;
    margin: 0;

    }

  </style>
  <body>
      <form action="cp.php" method="get">
          <br>  <br>   <br>  <br>   <br>  <br>   <br>  <br>  <br>  <br>
          <button class= "Back" name="Back" id="Back">Back</button>
</br></br>
      </form>
  </body>

  </html>
