<?php include 'templates\header.php'; ?>

<form method="post">
  <div class="form-group">
    <label for="firstname">Frist Name:</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
  </div>
  <div class="form-group">
    <label for="Lastname">Lastname:</label>
    <input type="text" class="form-control" id="Lastname" name="Lastname">
  </div>
  <div class="form-group form-check">
  </div>
    <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="Age">Age:</label>
    <input type="text" class="form-control" id="age">
  </div>
  <div class="form-group">
    <label for="Location">Location:</label>
    <input type="text" class="form-control" id="Location">
  </div>
  <div class="form-group form-check">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<br>
<br>

<a href="index.php">Home</a>



<?php include 'templates\footer.php';?>