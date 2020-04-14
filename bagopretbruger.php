<?php
require("dbconnect.php");
require("testinput.php");

echo "hejhej";
if ($_POST) {
  echo "der er post!!";
}
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
          echo "Din bruger er blevet oprettet";

        } else{
          echo "Der skete en fejl";
        }







      }else {
      echo "Dit password matcher ikke dit kontrolpassword";
    }




  }
  else{
    //Hvis vi fik nogle rækker ud af vores database så giver vi brugeren ef fejl, da det begtyder at brygernavnet er optaget.
    echo "<p>Dit brugernavn er optaget, vælg venligst et nyt</p>";


}
}else {
  echo "Brug venligst kun bogstaver og tal";
}
}
?>
