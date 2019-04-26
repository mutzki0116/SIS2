<?php 
include_once 'connection.php';
$pdoQuery = "SELECT * FROM wizardrecords;";
$pdoResult = $pdo->prepare($pdoQuery);
$pdoResult->execute();
$wizData =  $pdoResult->fetchAll(PDO::FETCH_OBJ);         
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
<?php 
include_once 'connection.php';
// include_once 'wizards.php';
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Hogwarts University of Witchcrafting and Wizardry</a></li>
    <li class="breadcrumb-item"><a href="newwizard.php">Add New Wizard</a></li>
    <li class="breadcrumb-item"><a href="#">View List of Wizards</a></li>
    <li class="breadcrumb-item"><a href="#">Expel a Wizard</a></li>
  </ol>
</nav>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <table class="table table-bordered">
              <tr>
                <th>Wizard Number</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Middlename</th>
                <th>Birthdate</th>
                <th>Address</th>
                <th>Sorted House</th>
                <th>Action</th>
              </tr>
              <?php 
                foreach($wizData as $wizard):
              ?>
              <tr>
              <td><?= $wizard->wizard_id; ?></td>
              <td><?= $wizard->wizard_fname; ?></td>
              <td><?= $wizard->wizard_lname; ?></td>
              <td><?= $wizard->wizard_mname; ?></td>
              <td><?= $wizard->birthdate; ?></td>
              <td><?= $wizard->address1.$wizard->address2; ?></td>
              <td><?= $wizard->house; ?></td>
              <td>
                <div class="btn-group mt-2" role="group" aria-label="Second group">
                  <a href="updateWizard.php?wizardId=<?= $wizard->wizard_id; ?>"><button type="button" class="btn btn-success" name="edit">Edit</button></a>
                  <a href="expelWizard.php?wizardId=<?= $wizard->wizard_id; ?>"><button type="button" class="btn btn-danger" name="delete">Expel</button>
                </div></td>
              </tr>
              <?php 
              endforeach;
              ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>