<?php
require 'dbconnect.php';
require 'testinput.php';
if ($_POST) {
  echo "post";
  if (ctype_alnum($_POST['brugernavn']) && ctype_alnum($_POST['password'])){
    $brugernavn=test_input($_POST['brugernavn']);
    $password=test_input($_POST['password']);


    $checklogin="SELECT kodeord, Brugerid FROM brugere WHERE brugernavn = '$brugernavn'";
    $checklogin_query=mysqli_query($dbconnect, $checklogin);
    $checklogin_result=mysqli_fetch_assoc($checklogin_query);



    if(mysqli_num_rows($checklogin_query) == 1)  {
      if (password_verify($password, $checklogin_result['kodeord'])) {
        //når brugeren har logget ind med korrekt brugernavn og password, lav variabler for brugerinformation.
        $_SESSION['brugernavn']= $brugernavn;
        $_SESSION['brugerid']=$checklogin_result['Brugerid'];
        $_SESSION['logincheck']= "yep";
        echo "logget ind";
      }else {
        echo "Forkert password";
      }
    } else {
      echo "Forkert brugernavn";
    }
  }else {
    echo "Brug venligst kun bogstaver og tal";
  }
}
?>
