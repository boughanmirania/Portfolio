<?php

session_start();

$role = $_SESSION["role"];
$name = $_SESSION["name"];

echo ($role . "<br>");
echo ($name);
