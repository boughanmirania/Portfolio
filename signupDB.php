<?php

require("connect.php");
$name = $_POST["name"];
$role = $_POST["role"];
$email = $_POST["email"];
$password = $_POST["password"];
echo ($password);


$sql = "INSERT INTO utilisateur (name, email, passwordd,role)
VALUES ('" . $name . "', '" . $email . "', '" . $password . "','" . $role . "')";

echo ($sql);

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: webmaster.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
