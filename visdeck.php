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
require 'bagvisdeck.php';
?>

<div class="container">
  <div class="row">
    <div class="col-sm">

      <!--kolonne nr 1 -->
    </div>

    <div class="col-sm-8" >
      <!--kolonne nr 2 -->
      <h1><?php echo $hentdeckinfo_result['decknavn']; ?></h1>
      <h2 class="text-muted"><?php echo $hentdeckinfo_result['Format']; ?></h2>
decks decks lister
her kan du se alle dine decks

      <form action="visdeck.php?id=<?php echo $hentdeckinfo_result['deckid']; ?>" method="POST">


        <div class="form-group">
            <label for="Main"><h5>Mainboard</h5></label>
            <textarea rows="20" class="form-control" name="Main" ><?php echo $hentdeckinfo_result['Mainboard']?></textarea>
        </div>
        <div class="form-group">
            <label for="Side"><h5>Sideboard</h5></label>
            <textarea rows="10" class="form-control" name="Side" ><?php echo $hentdeckinfo_result['Sideboard']?></textarea>
        </div>

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
