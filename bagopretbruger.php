<?php
require("dbconnect.php");
require("testinput.php");

if ($_POST) {
  if (ctype_alnum($_POST['brugernavn']) && ctype_alnum($_POST['password1']) && ctype_alnum($_POST['password2'])){
$brugernavn= test_input($_POST['brugernavn']);

$checkusername="SELECT * FROM brugere WHERE brugernavn = '$brugernavn'";
$checkusername_query=mysqli_query($dbconnect, $checkusername);
//Vi beder om data alle rækker fra databasen med samme bruger_navn, og tjekker derefter om der kom nogle rækker.
if(mysqli_num_rows($checkusername_query) == 0){

  // Test input (funktionen findes i testinput.php)
    $password1= test_input($_POST['password1']);
    $password2= test_input($_POST['password2']);



    if ($password1 == $password2) {
//hvis passwordet matcher kontrol-passwordet oprettes brugeren
// hash pasword før det bliver gemt
$hash = password_hash($password1, PASSWORD_DEFAULT);
      $indtast_sql="INSERT INTO brugere(brugernavn, kodeord) VALUES ('$brugernavn', '$hash')";
      $brugeropret_query=mysqli_query($dbconnect, $indtast_sql);

      if($brugeropret_query){
          ?>
              <div class="alert alert-success" role="alert">
            Din bruger er blevet oprettet
              </div>
          <?php

        } else{
          ?>
              <div class="alert alert-danger" role="alert">
            Der skete en fejl
              </div>
          <?php
        }







      }else {
      ?>
          <div class="alert alert-danger" role="alert">
        Dit password matcher ikke dit kontrolpassword
          </div>
      <?php
    }




  }
  else{
    //Hvis vi fik nogle rækker ud af vores database så giver vi brugeren ef fejl, da det betyder at brygernavnet er optaget.
?>
    <div class="alert alert-danger" role="alert">
  Dit brugernavn er optaget, vælg venligst et nyt
    </div>
<?php
}
}else {

  ?>
      <div class="alert alert-danger" role="alert">
    Brug venligst kun bogstaver og tal
      </div>
  <?php
}
}
?>
