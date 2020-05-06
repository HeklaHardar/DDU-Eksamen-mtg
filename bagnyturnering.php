<?php
require 'dbconnect.php';
$hentformat="SELECT * FROM mtgstats.formater";
$hentformat_query=mysqli_query($dbconnect, $hentformat);
$hentformat_result=mysqli_fetch_assoc($hentformat_query);

$hentdeck="SELECT deckid,brugerid,decknavn FROM mtgstats.decks WHERE decks.brugerid=$_SESSION[brugerid]";
$hentdeck_query=mysqli_query($dbconnect, $hentdeck);
$hentdeck_result=mysqli_fetch_assoc($hentdeck_query);

if ($_POST) {



  $opretturnering="INSERT INTO `turneringer` (`turneringsid`, `brugerid`, `Turneringsnavn`, `Dato`, `Sted`, `Format`, `Deck`) VALUES (NULL, '$_SESSION[brugerid]', '$_POST[Turneringsnavn]', '$_POST[Dato]', '$_POST[Sted]', '$_POST[Format]', '$_POST[Deck]')";
  $opretturnering_query=mysqli_query($dbconnect, $opretturnering);

  if($opretturnering_query){ ?>
    <div class="alert alert-success" role="alert">
  Turnering Oprettet
</div> <?php
  }else {
    ?>
    <div class="alert alert-danger" role="alert">
  Der skete en fejl
    </div>
    <?php
  }

}




 ?>
