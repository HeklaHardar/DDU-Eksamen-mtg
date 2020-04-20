<?php
if (isset($_SESSION['logincheck'])) {

}else {
   echo "ikke logget ind";
  // require 'login.php';
  header('Location: login.php');
}
?>
