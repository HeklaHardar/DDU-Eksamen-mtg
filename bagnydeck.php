<?php
$hentformat="SELECT * FROM mtgstats.formater";
$hentformat_query=mysqli_query($dbconnect, $hentformat);
$hentformat_result=mysqli_fetch_assoc($hentformat_query);

if ($_POST) {

  $Decklistenavn=test_input($_POST['Decklistenavn']);
  $Main=test_input($_POST['Main']);
  $Side=test_input($_POST['Side']);

  $opretdeck="INSERT INTO `decks` (`deckid`, `brugerid`, `decknavn`, `Format`, `Mainboard`, `Sideboard`) VALUES (NULL, '$_SESSION[brugerid]', '$Decklistenavn', '$_POST[Format]', '$Main', '$Side')";
  $opretdeck_query=mysqli_query($dbconnect, $opretdeck);

  if($opretdeck_query){ ?>
    <div class="alert alert-success" role="alert">
  Deck oprettet
  </div> <?php
  // header("Location: visturnering.php?id=$_SESSION[turnid]");
  }else {
    ?>
    <div class="alert alert-danger" role="alert">
  Der skete en fejl
    </div>
    <?php
  }






}

?>
