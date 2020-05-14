<?php
$wins=0;
$losses=0;
if ($_POST) {
  $format=$_POST['Format'];


//HENT TURNERINGS ANTAL
  $hentturn="SELECT * FROM mtgstats.turneringer WHERE turneringer.brugerid='$_SESSION[brugerid]' && turneringer.Format='$_POST[Format]'";
  $hentturn_query=mysqli_query($dbconnect, $hentturn);
  $hentturn_result=mysqli_fetch_assoc($hentturn_query);

  if ($hentturn_query=mysqli_query($dbconnect, $hentturn)) {
    $antalturn=mysqli_num_rows($hentturn_query);
  }else {
    $antalturn="0";
  }

  // HENT RUNDE ANTAL
  $hentrunde="SELECT * FROM mtgstats.runder WHERE runder.brugerid='$_SESSION[brugerid]' && runder.Format='$_POST[Format]'";
  $hentrunde_query=mysqli_query($dbconnect, $hentrunde);
  $hentrunde_result=mysqli_fetch_assoc($hentrunde_query);

  if ($hentrunde_query=mysqli_query($dbconnect, $hentrunde)) {
    $antalrunde=mysqli_num_rows($hentrunde_query);

  }else {
    $antalrunde="0";
  }

  // HENT Wins
  $hentwins="SELECT wins, losses FROM mtgstats.runder WHERE runder.brugerid='$_SESSION[brugerid]' && runder.Format='$_POST[Format]'";
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








}else {
  header('Location: index.php');
  die();
}




?>
