
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
    <li class="breadcrumb-item"><a href="wizardlist.php">View List of Wizards</a></li>
    <li class="breadcrumb-item"><a href="#">Expel a Wizard</a></li>
  </ol>
   
</nav>
<div class="container">
	<form action="createwizard.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="firstname1">Firstname</label>
      <input type="text" class="form-control" name="firstname1" placeholder="Firstname">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="lastname1">Lastname</label>
      <input type="text" class="form-control" name="lastname1" placeholder="Lastname">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="middlename1">Middlename</label>
      <input type="text" class="form-control" name="middlename1" placeholder="Middlename">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="bday1">Birthdate</label>
      <input type="date" class="form-control" name="bday1" >
    </div>
  </div>
    <!-- <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="inputEmail4" placeholder="Email">
    </div> -->
    <!-- <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="inputPassword4" placeholder="Password">
    </div> -->
  
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" placeholder="1234 Main St., Brgy. Tibay">
  </div>
  <div class="form-group">
    <label for="address2">Address 2</label>
    <input type="text" class="form-control" name="address2" placeholder="District, City">
  </div>
  <div class="form-group col-md-3">
      <label for="hogwarts">Choose your House</label>
      <select name="hogwarts" class="form-control">
        
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
    
  <input type="submit" class="btn btn-primary" name="submitbutton" value="Create Wizard">
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