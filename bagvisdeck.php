<?php
require("dbconnect.php");
require("testinput.php");


if (isset($_GET['id'])) {
  $_SESSION['deckid']=$_GET['id'];
}else {
  echo "failed";
}



$hentdeckinfo="SELECT * FROM mtgstats.decks WHERE decks.deckid='$_SESSION[deckid]'";
$hentdeckinfo_query=mysqli_query($dbconnect, $hentdeckinfo);
$hentdeckinfo_result=mysqli_fetch_assoc($hentdeckinfo_query);

if ($_POST) {
$mainboard= test_input($_POST['Main']);
$sideboard= test_input($_POST['Side']);


$indtast_sql="UPDATE mtgstats.decks SET decks.Mainboard='$mainboard', decks.Sideboard='$sideboard' WHERE decks.deckid=$_SESSION[deckid]";
$brugeropret_query=mysqli_query($dbconnect, $indtast_sql);

if($brugeropret_query){
    ?>
        <div class="alert alert-success" role="alert">
      Dine ændringer er gemt
        </div>
    <?php

  } else{
    ?>
        <div class="alert alert-danger" role="alert">
      Der skete en fejl
        </div>
    <?php
  }


}



 ?>
