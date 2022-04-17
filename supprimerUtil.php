<?php
require("connect.php");
$result = $conn->query("DELETE FROM utilisateur WHERE id='$_GET[idUtil]'");
if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
} else {
    header("Location: webmaster.php");
}
