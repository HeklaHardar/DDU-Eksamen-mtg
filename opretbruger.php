<?php include 'navbar.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-sm">

 <?php require 'bagopretbruger.php';?>
      One of three columns
    </div>

    <div class="col-sm-4">

      <form method=post>
        <div class="form-group">
          <label for="Brugernavn">Brugernavn</label>
          <input type="text" name="brugernavn" class="form-control" id="Brugernavn" aria-describedby="emailHelp ">
        </div>
        <div class="form-group">
          <label for="Password1">Password</label>
          <input type="password" name="password1" class="form-control" id="Password1">
        </div>
        <div class="form-group">
          <label for="Password2">Gentag password</label>
          <input type="password" name="password2" class="form-control" id="Password2">
        </div>
        <button type="submit" class="btn btn-primary">Opret bruger</button>
      </form>

<br>
<br>
    </div>

    <div class="col-sm">


      One of three columns
    </div>
  </div>
</div>
