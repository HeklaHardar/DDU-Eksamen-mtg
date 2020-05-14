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
require 'dbconnect.php';
require 'logincheck.php';
require 'navbar.php';
require 'bagnyrunde.php';
?>

<div class="container">
  <div class="row">
    <div class="col-sm">

      <!--kolonne nr 1 -->
    </div>

    <div class="col-sm-8">
      <!--kolonne nr 2 -->
      <h1><?php echo "Ny runde - ",$hentturninfo_result['Turneringsnavn']; ?></h1>
      <br>
      <form method="post">
        <div class="form-group">
          <label class="mr-sm-2" for="wins">Wins:</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="wins">
            <option selected>Choose...</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </div>

        <div class="form-group">
          <label class="mr-sm-2" for="losses">Losses:</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="losses">
            <option selected>Choose...</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="overtid" id="overtid" value="overtid">
          <label class="form-check-label" for="overtid">Gik du i overtid?</label>
        </div>
        <br>
        <br>
        <div class="form-group">
          <label for="modstanderdeck">Modstanderdeck:</label>
          <input type="text" name="modstanderdeck" class="form-control" id="modstanderdeck" placeholder="modstanderdeck" required>
        </div>

      <br>

  <div class="form-group">
      <button type="submit" class="btn btn-primary">
          Opret runde
      </button>
  </div>
      </form>

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
