<?php 
$firstname = $_POST['firstname1'];
$lastname = $_POST['lastname1'];
$middlename = $_POST['middlename1'];
$bday = $_POST['bday1'];
$add = $_POST['address'];
$add2 = $_POST['address2'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css" />
    <script src="main.js"></script>
</head>
<body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Hogwarts University of Witchcrafting and Wizardry</a></li>
    <li class="breadcrumb-item"><a href="newwizard.php">Add New Wizard</a></li>
    <li class="breadcrumb-item"><a href="#">View List of Wizards</a></li>
    <li class="breadcrumb-item"><a href="#">Expel a Wizard</a></li>
  </ol>
   
</nav>
<div class="container">
	<form action="#" method="$_POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="firstname1">Firstname</label>
      <input type="text" class="form-control" id="firstname1" placeholder="Firstname">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="lastname1">Lastname</label>
      <input type="text" class="form-control" id="lastname1" placeholder="Lastname">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="middlename1">Middlename</label>
      <input type="text" class="form-control" id="middlename1" placeholder="Middlename">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="bday1">Birthdate</label>
      <input type="date" class="form-control" id="bday1" >
    </div>
  </div>
    <!-- <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div> -->
    <!-- <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div> -->
  
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="1234 Main St., Brgy. Tibay">
  </div>
  <div class="form-group">
    <label for="address2">Address 2</label>
    <input type="text" class="form-control" id="address2" placeholder="District, City">
  </div>
  <div class="form-group col-md-3">
      <label for="inputState">Choose your House</label>
      <select id="inputState" class="form-control">
        
        <option>Hupplepuff</option>
        <option>Gryffindor</option>
        <option>Slytherin</option>
        <option>Ravenclaw</option>
      </select>
    </div>
  <!-- <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div> -->
    
  <button type="submit" class="btn btn-primary">Create New Student</button>
  </div>
  <!-- <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I Agree to the Terms and Conditions of Hogwarts University of Witchcrafting and Wizardry.
      </label>
    </div>
  </div> -->
</form>

</div>

</body>
</html>