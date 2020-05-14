<?php
$wins=0;
$losses=0;

$hentdeck="SELECT * FROM mtgstats.decks WHERE decks.deckid='$_POST[Deck]'";
$hentdeck_query=mysqli_query($dbconnect, $hentdeck);
$hentdeck_result=mysqli_fetch_assoc($hentdeck_query);

$hentturn="SELECT * FROM mtgstats.turneringer WHERE turneringer.brugerid='$_SESSION[brugerid]' && turneringer.Deck='$_POST[Deck]'";
$hentturn_query=mysqli_query($dbconnect, $hentturn);
$hentturn_result=mysqli_fetch_assoc($hentturn_query);

if ($hentturn_result=mysqli_fetch_assoc($hentturn_query)) {
  $antalturn=mysqli_num_rows($hentturn_query);
}else {
  $antalturn="0";
}

// HENT RUNDE ANTAL
$hentrunde="SELECT * FROM mtgstats.runder WHERE runder.brugerid='$_SESSION[brugerid]' && runder.Deck='$_POST[Deck]'";
$hentrunde_query=mysqli_query($dbconnect, $hentrunde);
$hentrunde_result=mysqli_fetch_assoc($hentrunde_query);

if ($hentrunde_result=mysqli_fetch_assoc($hentrunde_query)) {
  $antalrunde=mysqli_num_rows($hentrunde_query);

}else {
  $antalrunde="0";
}

// HENT Wins
$hentwins="SELECT wins,losses FROM mtgstats.runder WHERE runder.brugerid='$_SESSION[brugerid]' && runder.Deck='$_POST[Deck]'";
$hentwins_query=mysqli_query($dbconnect, $hentwins);
$hentwins_result=mysqli_fetch_assoc($hentwins_query);


if ($hentwins_result) {
  do {
    $wins=$wins+$hentwins_result['wins'];
    $losses=$losses+$hentwins_result['losses'];
  } while ($hentwins_result=mysqli_fetch_assoc($hentwins_query));
}

$games=$wins+$losses;

if ($games>0) {
$winrate=round(($wins/$games)*100,2);
}else {
$winrate=0;
}


?>
