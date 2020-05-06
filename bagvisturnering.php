<?php
if (isset($_GET['id'])) {
  $_SESSION['turnid']=$_GET['id'];
}else {
  echo "failed";
}

$hentturninfo="SELECT * FROM mtgstats.turneringer WHERE turneringer.turneringsid='$_SESSION[turnid]'";
$hentturninfo_query=mysqli_query($dbconnect, $hentturninfo);
$hentturninfo_result=mysqli_fetch_assoc($hentturninfo_query);

$hentdeckinfo="SELECT decknavn FROM mtgstats.decks WHERE decks.deckid='$hentturninfo_result[Deck]'";
$hentdeckinfo_query=mysqli_query($dbconnect, $hentdeckinfo);
$hentdeckinfo_result=mysqli_fetch_assoc($hentdeckinfo_query);




$hentrunder="SELECT * FROM mtgstats.runder WHERE runder.turneringsid='$_SESSION[turnid]'";
$hentrunder_query=mysqli_query($dbconnect, $hentrunder);
$hentrunder_result=mysqli_fetch_assoc($hentrunder_query);



 ?>
