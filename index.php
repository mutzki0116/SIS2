
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
<?php 
include_once 'connection.php';
// include_once 'wizards.php';



?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Hogwarts University of Witchcrafting and Wizardry</a></li>
    <li class="breadcrumb-item"><a href="newwizard.php">Add New Wizard</a></li>
    <li class="breadcrumb-item"><a href="wizardlist.php">View List of Wizards</a></li>
    <li class="breadcrumb-item"><a href="#">Expel a Wizard</a></li>
  </ol>
</nav>
<div class="container">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Hupplepuff</h5>
        <p class="card-text">Hufflepuffs value hard work, patience, loyalty, and fair play. The house has produced its share of great wizards – not least Newt Scamander, author of Fantastic Beasts and Where to Find Them.</p>
        <a href="newwizard.php" class="btn btn-primary">Join Hupplepuf House!</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Gryffindor</h5>
        <p class="card-text">With a lion as its crest and Professor McGonagall at its head, Gryffindor is the house which most values the virtues of courage, bravery and determination.</p>
        <a href="newwizard.php" class="btn btn-primary">Join Gryffindor House!</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Ravenclaw</h5>
        <p class="card-text">Ravenclaws prize wit, learning, and wisdom. It's an ethos etched into founder Rowena Ravenclaw's diadem: 'wit beyond measure is man's greatest treasure'.</p>
        <a href="newwizard.php" class="btn btn-primary">Join Hupplepuf House!</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Slytherin</h5>
        <p class="card-text">Slytherin produces more than its share of Dark wizards, but also turns out leaders who are proud, ambitious and cunning. Merlin is one particularly famous Slytherin.</p>
        <a href="newwizard.php" class="btn btn-primary">Join Slytherin House!</a>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>