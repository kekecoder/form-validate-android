<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $first_name = trim($_POST["firstname"]);
  $last_name = trim($_POST['lastname']);
  $email = trim($_POST["email"]);
  $pass = trim($_POST['password']);
  $cpass = trim($_POST["cpassword"]);
  
  // performing validation
  if(!$first_name){
    $error['firstname'] = "First name is required";
  }
  if(!$last_name){
    $error['lastname'] = "Last name is required";
  }
  if(!$email){
    $error['email'] = "Email is required";
  }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error['email'] = "The email address you entered is invalid";
  }
  if(!$pass){
    $error['password'] = "Password is required";
  }elseif(strlen($pass) <= 4){
    $error['password'] = "Password length should be atleast 5";
  }
  if(!$cpass){
    $error['cpassword'] = "Confirm Password is required";
  }elseif($cpass !== $pass){
    $error['cpassword'] = "Confirm password must match with password";
  }
  
  if(empty($error)){
    echo "Your First name is: " . $first_name . "<br>";
    echo "Your Last name is: " . $last_name . "<br>";
    echo "Your Email address is: " . $email . "<br>";
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form validation</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
    <h3 class="mt-3 text-center mb-3">Simple Form Validation using our Android Phone</h3>
<div class="container mb-4">
<form action="" method="post">
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control <?php echo isset($error['firstname']) ? 'is-invalid' : ""?>" name="firstname" aria-describedby="firstname" value="<?= $first_name ?? ""?>">
    <small class="invalid-feedback">
      <?= $error["firstname"] ?? "" ?>
    </small>
  </div>
  <div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control <?php echo isset($error['lastname']) ? 'is-invalid' : ""?>" name="lastname" aria-describedby="lasttname" value="<?= $last_name ?? ""?>">
<small class="invalid-feedback">
      <?= $error["lastname"] ?? "" ?>
    </small>
  </div>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control <?php echo isset($error['email']) ? 'is-invalid' : ""?>" name="email" aria-describedby="email" value="<?= $email ?? ""?>">
<small class="invalid-feedback">
      <?= $error["email"] ?? "" ?>
    </small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control <?php echo isset($error['password']) ? 'is-invalid' : ""?>" name="password">
<small class="invalid-feedback">
      <?= $error["password"] ?? "" ?>
    </small>
  </div>
  <div class="form-group">
    <label for="cpassword">Confirm Password</label>
    <input type="password" class="form-control <?php echo isset($error['cpassword']) ? 'is-invalid' : ""?>" name="cpassword">
<small class="invalid-feedback">
      <?= $error["cpassword"] ?? "" ?>
    </small>
  </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
  </html>