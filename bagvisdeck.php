<?php
if (isset($_GET['id'])) {
  $_SESSION['deckid']=$_GET['id'];
}else {
  echo "failed";
}



$hentdeckinfo="SELECT * FROM mtgstats.decks WHERE decks.deckid='$_SESSION[deckid]'";
$hentdeckinfo_query=mysqli_query($dbconnect, $hentdeckinfo);
$hentdeckinfo_result=mysqli_fetch_assoc($hentdeckinfo_query);
 ?>
