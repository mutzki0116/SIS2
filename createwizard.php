<?php
class createnewwizard extends dbconn{

    public function createWizard(){
        if(isset($_POST['submitbutton'])){
            $wid = '900246';
            $wfname = $_POST['firstname1'];
            $wlname = $_POST['lastname1'];
            $wmname = $_POST['middlename1'];
            $bday1 = $_POST['bday1'];
            $addr = $_POST['address'];
            $addr2 = $_POST['address2'];
            $haws = $_POST['house1'];
            // $statement = $this->connect()->query("INSERT INTO wizardrecords VALUES(:wid, :wfname, :wlname, :wmname, :bday1, :addr, :addr2, :haws)");
            $sql = "INSERT INTO wizardrecords VALUES(:wid, :wfname, :wlname, :wmname, :bday1, :addr, :addr2, :haws)";
            // $statement = $connection
        }
    }
}
?>