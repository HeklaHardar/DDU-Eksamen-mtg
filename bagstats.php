<?php
$wins=0;
$losses=0;
//HENT TURNERINGS ANTAL
$hentturn="SELECT * FROM mtgstats.turneringer WHERE turneringer.brugerid='$_SESSION[brugerid]'";
$hentturn_query=mysqli_query($dbconnect, $hentturn);
$hentturn_result=mysqli_fetch_assoc($hentturn_query);

if ($hentturn_result=mysqli_fetch_assoc($hentturn_query)) {
  $antalturn=mysqli_num_rows($hentturn_query);
}else {
  $antalturn="0";
}

// HENT RUNDE ANTAL
$hentrunde="SELECT * FROM mtgstats.runder WHERE runder.brugerid='$_SESSION[brugerid]'";
$hentrunde_query=mysqli_query($dbconnect, $hentrunde);
$hentrunde_result=mysqli_fetch_assoc($hentrunde_query);

if ($hentrunde_result=mysqli_fetch_assoc($hentrunde_query)) {
  $antalrunde=mysqli_num_rows($hentrunde_query);

}else {
  $antalrunde="0";
}




// HENT Wins
$hentwins="SELECT wins, losses FROM mtgstats.runder WHERE runder.brugerid='$_SESSION[brugerid]'";
$hentwins_query=mysqli_query($dbconnect, $hentwins);
$hentwins_result=mysqli_fetch_assoc($hentwins_query);

do {
  $wins=$wins+$hentwins_result['wins'];
  $losses=$losses+$hentwins_result['losses'];
} while ($hentwins_result=mysqli_fetch_assoc($hentwins_query));

$games=$wins+$losses;
$winrate=round(($wins/$games)*100,2);

// FORMATER
$hentformat="SELECT * FROM mtgstats.formater";
$hentformat_query=mysqli_query($dbconnect, $hentformat);
$hentformat_result=mysqli_fetch_assoc($hentformat_query);

// DECKS
$hentdecks="SELECT * FROM mtgstats.decks WHERE decks.brugerid='$_SESSION[brugerid]'";
$hentdecks_query=mysqli_query($dbconnect, $hentdecks);
$hentdecks_result=mysqli_fetch_assoc($hentdecks_query);

?>
