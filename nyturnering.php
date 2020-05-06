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
require 'navbar.php';
require 'bagnyturnering.php';
?>

<div class="container">
  <div class="row">
    <div class="col-sm">

      <!--kolonne nr 1 -->
    </div>

    <div class="col-sm-8">
      <!--kolonne nr 2 -->
      <h1>Opret turnering</h1>
      <br>
      Opret en turnering,
      <form method="post">
        <div class="form-group">
          <label for="Turneringsnavn">Turnerings navn:</label>
          <input type="text" name="Turneringsnavn" class="form-control" id="Turneringsnavn" placeholder="Turneringsnavn" required>
        </div>

          <div class="form-group">
            <label for="Dato">Dato:</label>
            <input type="date" id="Dato" name="Dato" required>
          </div>

        <div class="form-group">
          <label for="Sted">Sted:</label>
          <input type="text" name="Sted" class="form-control" id="Sted" placeholder="Sted" required>
        </div>

        <div>
  <label for="Format">Format:</label>
  <select id="Format" name="Format" class="form-control">
    <?php do {
      ?> <option value="<?php echo $hentformat_result['format']?>"> <?php echo $hentformat_result['format']?></option> <?php
    } while ($hentformat_result=mysqli_fetch_assoc($hentformat_query));
    ?>
  </select>
</div>
<div>
<label for="Deck">Deck:</label>
<select id="Deck" name="Deck" class="form-control">
<?php do {
?> <option value="<?php echo $hentdeck_result['deckid']?>"><?php echo $hentdeck_result['decknavn']?></option>
 <?php } while ($hentdeck_result=mysqli_fetch_assoc($hentdeck_query));
?>
</select>
</div>
<br>

<div class="form-group">
    <button type="submit" class="btn btn-primary">
        Create
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
