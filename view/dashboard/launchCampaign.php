 <?php
    //$action = $this->getAction();
    $title = $this->getPageTitle();
    $data = $this->getData();
    echo '<br>';
  //echo '<h1>this si before data</h1>';
    print_r ($data);
   // echo '<br>';
    //echo '<h1>this is after data</h1>';

?>

<h1>Launch Campaign</h1>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style>
  .navbar {
      margin-bottom: 0;
      border-radius: 0;
      
      background-color:  #20B2AA;
    }
    .navbar a {
  font-size: 20px;
  color: black;  
  
}

/* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;} 

    .sidenav {
      padding-top: 50px;
      background-color:  #E6E6FA;
      height: 500px;
      font-size: 20px;
    }
    .sidenav a{
      font-size: 20px;
  color: black;
  
    }

    
    /* Set black background color, white text and some padding */
    footer {
      background-color:#20B2AA;
      color: white;
      padding: 15px;
    }
   </style> 
    
</head>
<body>
  <nav class="navbar">
  <div class="container-fluid">
    
     
            <ul class="nav navbar-nav">
        <!--<li style="float: left">
         <img src="/ec/images/email-marketing.jpg" style="width:110px;height:80px"></li>-->
          <li><a href="/login/home">HOME</a></li>
          <li><a href="/login/aboutus">ABOUT US</a></li>
          <li><a href="/login/logout">LOGOUT</a></li>
                   
         <!--<li class="dropdown" style="float:right">
    <button class="dropbtn"><img src="/images/setting.png" style="width:30px;height:30px"></button>
    <div class="dropdown-content">
      <a href="#">GMAIL SMTP</a>
      <a href="#">AWS SES</a>
    </div>
   </li>-->
 </ul>
</div>
</div>
</div>
</nav>
      
    

  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <ul class="nav nav-pills nav-stacked">
        
       <p><a href="/subscriber/showSubscriber">LIST OF ALL SUBSCRIBER</a></p><br>
        <p><a href="/campaign/launchCampaign">LAUNCH NEW CAMPAIGNS</a></p><br>
        <p><a href="/campaign/showCampaign">PREVIOUS CAMPAIGNS</a></p><br>
        <p><a href="/subscriber/addSubscriberDisplay">ADD NEW USER</a></p><br>
        
      </ul>
   </div>
   
   

   

    <div class="col-sm-9 text-center">
      <div id="login-box">
        <div class="right">
          <h1>Launch Campaign</h1>
       <!-- <form action='\campaign\launch' method='POST'>
          <input type="text" name="to" placeholder="id_name"><br>
          <input type="text" name="first" placeholder="first_name"><br>
          <input type="text" name="last" placeholder="last_name"><br>
          <input type="text" name="email" placeholder="email_address"><br>
          <input type="text" name="phone" placeholder="phone_no"><br>
          <input type="date" name="date" placeholder="date"><br>
          <input type="text" name="profession" placeholder="Who are you?(Student, Developer)"><br>
          <div class="dropdown" name='gender'>
          <button class="dropbtn">gender</button>
            <div class="dropdown-content">
            <a href="#">m</a>
            <a href="#">f</a>
            </div>
          </div><br>-->
         <!--<input type="submit" name="subscribe" value="Subscribe">-->
         <div id="login-box">
        <div class="right">
          <h1>Launch Campaign</h1>
        <form action='/campaign/launch' method='POST'>
         <!--<input type="text" name="mailTo" placeholder="To" />-->
          <b style="color:#AAA;font-family: Roboto;";> To:</b>
          <select name="industry">
            <option value="student">Students</option>
            <option value="developer">Developers</option>
          </select><br><br>
            <input type="text" name="subject" placeholder="Subject" />
          <b style="color:#AAA;font-family: Roboto;";> Body:</b><br>
          <!--<input type="text" name="body" placeholder="Body" />-->
          <textarea name="body" style="width:100%; height:350px;font: size 20px;color: #AAA;text-align: left;font-family:'Roboto';">
            
        </textarea> 
          <input type="submit" name="send_mail" value="Launch" />
      </form>
         
       
        </div>
        
      </div>
  
</div>
</div>      
      </div>
    </div>

<footer class="container-fluid">
 
</footer>

</body>
</html>






