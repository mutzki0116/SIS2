<?php
class wizardinfo extends dbconn{

    public function getAllWizards(){
        $statement = $this->connect()->query("SELECT * FROM wizardrecords");
        while($row = $statement->fetch()){
            $wid = $row['wizard_id'];
            $wfname = $row['wizard_fname'];
            return $wid;
            return $wfname;
        }
    }
}
?>