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
require 'dbconnect.php';
require 'testinput.php';
require 'bagstats.php';

?>

<div class="container">
  <div class="row">
    <div class="col-sm">

      <!--kolonne nr 1 -->
    </div>

    <div class="col-sm-8">
      <!--kolonne nr 2 -->
      <h1>Dine Stats</h1>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <!--kolonne nr 2.1 -->

            <div class="card" style="width: 18rem;">
              <br>
              <div class="text-center">
                 <h1><?php echo $antalturn; ?></h1>
              </div>
              <div class="card-body">
                <h5 class="card-title">Turneringer spillet</h5>
                <p class="card-text">Du har spillet <?php echo $antalturn; ?> turneringer i alt!</p>
              </div>
            </div>
        <br>
        <div class="card" style="width: 18rem;">
          <br>
          <div class="text-center">
             <h1><?php echo $games;?></h1>
          </div>
          <div class="card-body">
            <h5 class="card-title">Games spillet</h5>
            <p class="card-text">Du har spillet <?php echo $games;?> enkelte games i alt!</p>
          </div>
        </div>
        <br>
        <div class="card" style="width: 18rem;">
          <br>
          <div class="text-center">
             <h1><?php echo $losses; ?></h1>
          </div>
          <div class="card-body">
            <h5 class="card-title">Games tabt</h5>
            <p class="card-text">Du har tabt <?php echo $losses; ?> games i alt!</p>
          </div>
        </div>
        <br>
        <div class="card" style="width: 18rem;">
          <br>
          <div class="text-center">
          </div>
          <div class="card-body">
            <h5 class="card-title">Se stats for de forskellige formater</h5>
            <p class="card-text">Her kan du se hvordan du klarer dig i de forskellieg formater. Vælg et fra listen herunder:</p>

            <form method="post" action="statsformat.php">
                <div>
                  <select id="Format" name="Format" class="form-control">
                    <?php do {
                      ?> <option value="<?php echo $hentformat_result['format']?>"> <?php echo $hentformat_result['format']?></option> <?php
                    } while ($hentformat_result=mysqli_fetch_assoc($hentformat_query));
                    ?>
                  </select>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                      Vælg deck
                    </button>
                  </div>
            </form>


          </div>
        </div>
          </div>
          <div class="col-sm">
            <!--kolonne nr 2.2 -->
            <div class="card" style="width: 18rem;">
              <br>
              <div class="text-center">
                 <h1><?php echo $antalrunde; ?></h1>
              </div>
              <div class="card-body">
                <h5 class="card-title">Runder spillet</h5>
                <p class="card-text">Du har spillet <?php echo $antalrunde; ?> runder i alt!</p>
              </div>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
              <br>
              <div class="text-center">
                 <h1><?php echo $winrate; ?>%</h1>
              </div>
              <div class="card-body">
                <h5 class="card-title">Overall winrate</h5>
                <p class="card-text">Du har en winrate på <?php echo $winrate; ?>% overall!</p>
              </div>
            </div>
            <br>
            <div class="card" style="width: 18rem;">
              <br>
              <div class="text-center">
                 <h1><?php echo $wins; ?></h1>
              </div>
              <div class="card-body">
                <h5 class="card-title">Games vundet</h5>
                <p class="card-text">Du har vundet <?php echo $wins; ?> games i alt!</p>
              </div>
            </div>
            <br>
                <div class="card" style="width: 18rem;">
                  <br>
                  <div class="text-center">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Se stats for enkelte decks</h5>
                    <p class="card-text">Her kan du se stats for dine forskellige decks. Vælg et fra listen herunder:</p>
                    <form method="post" action="statsdeck.php">
                        <div>
                          <select id="Deck" name="Deck" class="form-control">
                            <?php do {
                              ?> <option value="<?php echo $hentdecks_result['deckid']?>"> <?php echo $hentdecks_result['decknavn']?></option> <?php
                            } while ($hentdecks_result=mysqli_fetch_assoc($hentdecks_query));
                            ?>
                          </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                              Vælg deck
                            </button>
                          </div>
                    </form>

                  </div>
                </div>


          </div>
        </div>
      </div>




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
