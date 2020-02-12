<?php
require 'database/connection.php';

class campaignModel extends connection{

    protected $data = [];

    public function showCampaign(){
       $con = $this->connect();
       $query = "SELECT * FROM campaign;";
       $result=mysqli_query($con,$query);
       $resultCheck = mysqli_num_rows($result);
        if($resultCheck >0){
            while($row = mysqli_fetch_assoc($result)){
                $this->data .= $row['camp_id'].'<br>  '.$row['camp_subject'].'<br>  '.$row['camp_body'].'<br>   '.$row['camp_date'].' <br> '.$row['camp_entered'].' <br> '.$row['camp_category'].'<br>';
            }
            print_r ($this->data);
            return ($this->data);
        }
        else{
            echo 'sorry not working
            <br> work harder';
        }
       
        }
    
}

?>