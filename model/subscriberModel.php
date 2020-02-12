<?php
require 'database/connection.php';

class subscriberModel extends connection
{

    protected $data = [];

    public function showSubscriber()
    {
       $con = $this->connect();
       $query = "SELECT * FROM subscriber;";
       $result=mysqli_query($con,$query);
       $resultCheck = mysqli_num_rows($result);
        if($resultCheck >0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $this->data .= $row['id'].'<br>  '.$row['first_name'].' <br> '.$row['last_name'].' <br> '.$row['email'].'  <br>'.$row['phone no'].' <br> '.$row['gender'].' <br> '.$row['date_entered'].'<br>  '.$row['profession'].'<br>';
            }
            print_r ($this->data);
            return ($this->data);
        }
        else
        {
            echo 'sorry not working
            <br> work harder';
        }
    }
    public function addSubscriber()
    {
        $con = $this->connect();
        $id=$_POST['id'];
        $first_name=$_POST['first'];
        $last_name=$_POST['last'];
        $email=$_POST['email'];
        $phone_no=$_POST['phone'];
       // $gender=$_POST['gender'];
        $gender = 'f';
        $date=$_POST['date'];
        $profession=$_POST['profession'];
       $query ="INSERT INTO `subscriber`(`id`,`first_name`,`last_name`,`email`,`phone no`,`gender`,`date_entered`,`profession`) values('$id','$first_name','$last_name','$email','$phone_no','$gender','$date','$profession');";
       $result=mysqli_query($con,$query);
       if(!$result){
        echo "error";
        echo mysqli_errno($con). ":" .mysqli_error($con). "\n";
        return false;      
    }
    else{
        echo 'Subscribed';
        return true;
    }
    }

        public function mailTo(){
        $con = $this->connect();
        $industry = $_POST['industry'];
        $query = "SELECT * FROM subscriber where profession ='".$_POST['industry']."';";
        echo $_POST['industry'];
        //$query = "SELECT * FROM subscriber;";
        $result=mysqli_query($con,$query);
        $resultCheck = mysqli_num_rows($result);
         if($resultCheck >0){
              while($row = mysqli_fetch_assoc($result)){
                $this->data[] = $row['email'];
              }
              return ($this->data);
              
            }
             else{
                 echo '<br>I am inside else part of resultcheck<br> ';
                echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n"; 
                echo '<br>You did it wrong </br>';
             }

    }

}
?>