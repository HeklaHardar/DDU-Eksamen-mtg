<?php

$hentturn="SELECT * FROM mtgstats.turneringer WHERE turneringer.brugerid='$_SESSION[brugerid]'";
$hentturn_query=mysqli_query($dbconnect, $hentturn);
$hentturn_result=mysqli_fetch_assoc($hentturn_query);

?>
