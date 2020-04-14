<?php
session_start();
  $_SESSION = array(); session_destroy();
echo "Du er nu logget ud";
header("Location: index.php");


?>
