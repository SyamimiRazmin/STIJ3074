<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $password= "";

if ($["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $password = test_input($_POST["password"]);
  $repassword = test_input($_POST["repassword"]);
  
}

function test_input($data) 
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $password;
echo "<br>";
echo $repassword;
?>

</body>
</html>