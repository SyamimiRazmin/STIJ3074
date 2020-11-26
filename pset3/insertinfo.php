

<?php

//get data
echo $foodid = $_GET['foodid'];
echo $foodname = $_GET['foodname'];
echo $foodprice = $_GET['foodprice'];
echo $foodquantity = $_GET['foodquantity'];
echo $foodcolorie = $_GET['foodcolorie'];

//connect database

$servername = "localhost";
$username = "root";
$password = "";
$database = "foodinfo";

$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO fooddetail (foodid, foodname, foodprice, foodquantity, foodcolorie)
VALUES ('$foodid', '$foodname', '$foodprice' , '$foodquantity' , '$foodcolorie')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

