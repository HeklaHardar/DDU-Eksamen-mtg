<?php
require 'testinput.php';
if (isset($_GET['id'])) {
  $_SESSION['turnid']=$_GET['id'];
}else {
  echo "failed";
}

$hentturninfo="SELECT * FROM mtgstats.turneringer WHERE turneringer.turneringsid='$_SESSION[turnid]'";
$hentturninfo_query=mysqli_query($dbconnect, $hentturninfo);
$hentturninfo_result=mysqli_fetch_assoc($hentturninfo_query);

if ($_POST) {
  if (isset($_POST['overtid'])) {
    $overtid="1";
  }else {
    $overtid="0";
  }

if (isset($overtid)) {
$modstanderdeck=test_input($_POST['modstanderdeck']);

$opretrunde="INSERT INTO `runder`(`rundeid`, `turneringsid`, `brugerid`, `Format`, `Deck`, `wins`, `losses`, `overtid`, `modstanderdeck`) VALUES (NULL, '$_SESSION[brugerid]', '$_SESSION[turnid]','$hentturninfo_result[Format]', '$hentturninfo_result[Deck]', '$_POST[wins]', '$_POST[losses]', '$overtid', '$modstanderdeck')";
$opretrunde_query=mysqli_query($dbconnect, $opretrunde);

if($opretrunde_query){ ?>
  <div class="alert alert-success" role="alert">
Runde oprettet
</div> <?php
header("Location: visturnering.php?id=$_SESSION[turnid]");
}else {
  ?>
  <div class="alert alert-danger" role="alert">
Der skete en fejl
  </div>
  <?php
}




}else {
  echo "Der skete en fejl";
}

}

?>
