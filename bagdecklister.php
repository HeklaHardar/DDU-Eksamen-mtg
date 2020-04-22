<?php

$hentdecks="SELECT deckid, brugerid, decknavn, Format FROM mtgstats.decks WHERE decks.brugerid='$_SESSION[brugerid]'";
$hentdecks_query=mysqli_query($dbconnect, $hentdecks);
$hentdecks_result=mysqli_fetch_assoc($hentdecks_query);

?>
