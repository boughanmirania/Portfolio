<?php

require("connect.php");
$name = $_POST["name"];
$password = $_POST["password"];


$sql = "SELECT * FROM utilisateur WHERE name = '" . $name . "' AND passwordd = '" . $password . "'";
$result = $conn->query($sql);

if (!$result) {
  trigger_error('Invalid query: ' . $conn->error);
}

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    //echo "sa7a ya bro";
    session_start();
    $_SESSION["role"] = $row["role"];
    $_SESSION["name"] = $row["name"];

    header("Location: index.php");
  }
} else {
  echo "0 results";
}
