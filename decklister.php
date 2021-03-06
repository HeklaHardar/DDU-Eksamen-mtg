<!doctype html>
<html lang="en">
<?php
session_start();

 ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Magic-Stats</title>
  </head>
  <body>
<?php
require 'logincheck.php';
require 'dbconnect.php';
require 'navbar.php';
require 'bagdecklister.php';
?>
<div class="container">
  <div class="row">
    <div class="col-sm">


      <!--kolonne nr 1 -->
    </div>

    <div class="col-sm-8">
      <!--kolonne nr 2 -->
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h1>Decklister</h1>
            <br>

            Her kan du se alle de decklister du har oprettet
          </div>
          <div class="col-sm">
            <div class="text-center">
              <br>
              <br>
            <a class="btn btn-primary" href="nydeck.php" role="button">Ny Deckliste</a>
            </div>
          </div>
        </div>
      </div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Format</th>
      <th scope="col">Decknavn</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

<?php
if ($hentdecks_result) {
  do {


?>
    <tr>
      <td ><?php echo $hentdecks_result['Format'] ?></td>
      <td><?php echo $hentdecks_result['decknavn'] ?></td>
      <td><a class="btn btn-primary" href="visdeck.php?id=<?php echo $hentdecks_result['deckid']?>" role="button">Se mere</a></td>
    </tr>

<?php
} while ($hentdecks_result=mysqli_fetch_assoc($hentdecks_query));
}
?>

  </tbody>
</table>

</div>

<div class="col-sm">

  <!--kolonne nr 3 -->
</div>
</div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
