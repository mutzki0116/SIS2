<?php 
    include_once 'connection.php';
    $wizID = $_GET['wizardId'];
    $getWizardDetails = "SELECT * FROM wizardrecords WHERE wizard_id = $wizID;";
    $wizResult = $pdo->prepare($getWizardDetails);
    $wizResult->execute();
    $wizData =  $wizResult->fetchAll(PDO::FETCH_OBJ); 
    foreach($wizData as $wizard): 
    endforeach;
    if(isset($_POST['submitbutton'])){
        
        $firstname1 = $_POST['firstname1'];
        $lastname1 = $_POST['lastname1'];
        $middlename1 = $_POST['middlename1'];
        $bday1 = $_POST['bday1'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $hogwarts = $_POST['hogwarts'];
    
        $insertWizQuery = "UPDATE wizardrecords set wizard_fname = :firstname1, wizard_lname = :lastname1,wizard_mname = :middlename1, birthdate = :bday1, address1 = :address1,address2 = :address2, house = :hogwarts where wizard_id = $wizID;";
        $pdoResult = $pdo->prepare($insertWizQuery);
        $pdoResult->execute([':firstname1'=>$firstname1,':lastname1'=>$lastname1,':middlename1'=>$middlename1,':bday1'=>$bday1,':address1'=>$address1,':address2'=>$address2,':hogwarts'=>$hogwarts]);
        header("Location: index.php?wizardinfoupdatedsuccessfully");
        
    }
    

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
    <li class="breadcrumb-item"><a href="#">Hogwarts University of Witchcrafting and Wizardry</a></li>
    <li class="breadcrumb-item"><a href="newwizard.php">Add New Wizard</a></li>
    <li class="breadcrumb-item"><a href="wizardlist.php">View List of Wizards</a></li>
  </ol>
</nav>
    
<div class="container">
	<form action="updateWizard.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="firstname1"></label>
      <input type="text" class="form-control" name="firstname1" value="<?= $wizard->wizard_fname; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="lastname1">Lastname</label>
      <input type="text" class="form-control" name="lastname1" value="<?= $wizard->wizard_lname; ?>">
    </div>
  </div>
  <div class="form-row">
        <div class="form-group col-md-6">
            <label for="middlename1">Middlename</label>
            <input type="text" class="form-control" name="middlename1" value="<?= $wizard->wizard_mname; ?>">
        </div>
  </div>
  <div class="form-row">
        <div class="form-group col-md-6">
            <label for="bday1">Birthdate</label>
            <input type="date" class="form-control" name="bday1" value="<?= $wizard->birthdate; ?>" >
        </div>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address1" value="<?= $wizard->address1; ?>">
  </div>
  <div class="form-group">
    <label for="address2">Address 2</label>
    <input type="text" class="form-control" name="address2" value="<?= $wizard->address2; ?>">
  </div>
  <div class="form-group col-md-3">
      <label for="hogwarts">Choose your House</label>
      <select name="hogwarts" class="form-control">
        <option><?= $wizard->house; ?></option>
        <option>Hupplepuff</option>
        <option>Gryffindor</option>
        <option>Slytherin</option>
        <option>Ravenclaw</option>
            </select>
            </div>
        <a href="updateWizard.php?wizardId=<?= $wizard->wizard_id; ?>"><input type="submit" class="btn btn-primary" name="submitbutton" value="Update Wizard Details">
    </div>
    </form>
  
   
</div>
</body>
</html>