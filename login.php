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
require 'navbar.php';

?>

  <div class="container">
    <div class="row">
      <div class="col-sm">


        <!--kolonne nr 1 -->
      </div>

      <div class="col-sm-4">
        <!--kolonne nr 2 -->
        <h3>Log ind</h3>
        <br>

        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Brugernavn:</label>
            <input type="text" name="brugernavn" class="form-control" id="Brugernavn" placeholder="Brugernavn">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password:</label>
            <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
          </div>
          <?php require 'baglogin.php'; ?>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

<br>
<br>
Har du ikke en bruger? <a class="btn btn-primary" href="opretbruger.php" role="button">Opret Bruger</a>


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
