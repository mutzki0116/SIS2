<?php
include_once 'connection.php';
        if(isset($_POST['submitbutton'])){
          
            $wfname = $_POST['firstname1'];
            $wlname = $_POST['lastname1'];
            $wmname = $_POST['middlename1'];
            $bday1 = $_POST['bday1'];
            $addr = $_POST['address'];
            $addr2 = $_POST['address2'];
            $haws = $_POST['hogwarts'];
            // $statement = $this->connect()->query("INSERT INTO wizardrecords VALUES(:wid, :wfname, :wlname, :wmname, :bday1, :addr, :addr2, :haws)");
            $pdoQuery = "INSERT INTO wizardrecords (wizard_fname,wizard_lname,wizard_mname, birthdate, address1, address2, house) VALUES(:wfname, :wlname, :wmname, :bday1, :addr, :addr2, :haws)";
            $pdoResult = $pdo->prepare($pdoQuery);
            $pdoResult->execute([':wfname'=>$wfname,':wlname'=>$wlname,':wmname'=>$wmname,':bday1'=>$bday1,':addr'=>$addr,':addr2'=>$addr2,':haws'=>$haws]);
            header("Location: index.php?newwizardadded");
            // if($pdoResult){
            //     Echo"Wizards has been added Successfully!";
            // }
            // else{
            //     Echo"Wizards not added!";
            // }
        }
        else{
            header("Location: index.php?nowizardadded");
        }

?>