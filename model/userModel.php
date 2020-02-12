<?php
require 'database/connection.php';


echo 'I am inside connection for database';


class userModel extends connection {
	/*protected $servername="localhost";
	protected $username="root";
	protected $password="";
	protected $db="demo";
*/
	public function SELECT()
	{
	//	$conn=mysqli_connect($this->servername,$this->username,$this->password,$this->db);
 //if(!$conn){
 	//die("connection failed:".mysqli_connect_error());
//}
		$conn = $this->connect();
		echo 'select function of userModel';
		// here goes some hardcoded values to simulate the database
		/*if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
		{
			if($_REQUEST['username']=='admin' && $_REQUEST['password']=='admin')
			{
				return 'login';
			}
			else
			{
			 	return 'invalid user';
			}
		}*/
		 if(isset($_POST['Login']))
    {
      
       
       		
            $query="select * from user where username='".$_POST['username']."' and password='".$_POST['password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
            	return True;
               // $_SESSION['User']=$_POST['uname'];
               // header("location:/ec/view/dashboard/dashboard.php");
            }
            else
            {
            	return False;
                //header("location:login.php ");
            }
       
    }
    else
    {
        echo 'Not Working Now Guys';
    }


	}

}
?>