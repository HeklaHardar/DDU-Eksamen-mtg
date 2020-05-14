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
require 'bagvisturnering.php';
?>

<div class="container">
  <div class="row">
    <div class="col-sm">

      <!--kolonne nr 1 -->
    </div>

    <div class="col-sm-8">
      <!--kolonne nr 2 -->
      <h1><?php echo $hentturninfo_result['Turneringsnavn']; ?></h1>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <!--kolonne nr 1 -->
            <h5 class="text-muted">Dato:</h5>
            <h5 class="text-muted">Sted:</h5>
            <h5 class="text-muted">Format:</h5>
            <h5 class="text-muted">Decknavn:</h5>
          </div>

          <div class="col-sm">
            <!--kolonne nr 2 -->
            <h5><?php echo $hentturninfo_result['Dato'];?></h5>
            <h5><?php echo $hentturninfo_result['Sted'];?></h5>
            <h5><?php echo $hentturninfo_result['Format']; ?></h5>
            <h5><?php echo $hentdeckinfo_result['decknavn']; ?></h5>
            <br>


            </div>
            <div class="col-sm">
              <a class="btn btn-primary" href="nyrunde.php?id=<?php echo $_SESSION['turnid']?>" role="button">Ny runde</a>
            </div>
        </div>
      </div>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Wins</th>
            <th scope="col">Losses</th>
            <th scope="col">overtid</th>
            <th scope="col">modstanderdeck</th>

            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

      <?php
      if ($hentrunder_result) {
        do {


      ?>
          <tr>
            <td><?php echo $hentrunder_result['wins'] ?></td>
            <td ><?php echo $hentrunder_result['losses'] ?></td>
            <td><?php echo $hentrunder_result['overtid'] ?></td>
            <td ><?php echo $hentrunder_result['modstanderdeck'] ?></td>
            <td><a class="btn btn-danger" href="visturnering.php?id=<?php echo $hentturn_result['turneringsid']?>" role="button">Slet</a></td>
          </tr>

      <?php
      } while ($hentrunder_result=mysqli_fetch_assoc($hentrunder_query));
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
