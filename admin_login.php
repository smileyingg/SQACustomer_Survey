<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<style>
  .h-form .form-body .h-form-label {
    height: auto !important;
  }
</style>


<body>
  <?php include 'header.php'; ?>

  <div class="card center" style="width:400px;text-align: center;">
    <div class="card-header">
      <h3>Admin Login</h3>
    </div>

    <form id="form_login" method="POST" style="padding:20px;" action="check_login.php">
      <div class=" form-group" style="text-align: left;">
        <label for="">Username</label>
        <input type="text" class="form-control" id="txtUsername" name="txtUsername" placeholder="Username" style="width:340px" required>
      </div>
      <div class="form-group" style="text-align: left;">
        <label for="">Password</label>
        <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password" style="width:340px;" required>
      </div>

      <button type="submit" name="Submit" value="Login" class="btn btn-outline-success">Login</button>
    </form>
  </div>


  <style>
    .center {
      margin: auto;
      width: 60%;
      padding: 10px;
    }
  </style>



</body>

</html>