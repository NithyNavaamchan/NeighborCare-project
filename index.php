<?php

session_start();

if (isset($_SESSION["user_form_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user_form
            WHERE id = {$_SESSION["user_form_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>   



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    
    <title>Neighborcare</title>  
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>    

    
    <header>    
      
    
        <div class="mainheader"> 
            <div class="logo"> 
                <img src="images/logo1.png">   
            </header>
            <div class="main1">  
            <nav> 
                <a href="ho.html">Home</a> 
                <a  href="service.html">Services</a>   
                <a  href="about.html">About</a>   
                <a  href="contact.html">Contact</a>    
                 
                 
                <?php if (isset($user_form)): ?>
        
        <p>Hello <?= htmlspecialchars($user_form["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
      <div class="btn"> 
       <p> <a href="login.php"><button class="right" style="height:150% ; width:120%  ;  border-radius: 20px; border: none; background-color: rgb(53, 165, 230); font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;  margin-left:10% ;padding:6px; margin-top:-10px" >Login </a> </button> 
       
        
    <?php endif; ?>
    
              
              </div>
              </nav>     
        
    </div>    
  
  
           
        
        <main> 
            <section class="left-sec"> 
                 <h2>Quick Medicine Delivery</h2>  
                 <h1>We The Best Home Delivery </h1>  
                 <p>we are here for your care 24/7. Any help just call us.</p>  
                 <a href="signUp.html"> <button> Register for Customer </a> </button> 
                 <a href="regi.html"> <button> Register for Pharmacy  </a></button>    

                 
                 
            </section>  
            <section class="right-sec">  
              <figure> 
                <img src="images/p1.png">
              </figure>
            </section>
        </main>  
      </body>   
      <footer>
        <div class="row">
          
            <h1>NeighborCare</h1>
            <p>This System has been established with the aim of <br>
              “getting medicines at home quickly and with <br> the social responsibility of saving our life”.</p>
        
          
        </div>  
        <div class="row2">
          <h1>Links</h1>
          <ul>  
            <li> <a href="ho.html">Home </a></li>  
            <li> <a href="service.html"> Service </a></li>
            <li><a href=about.html>About</a></li>
            <li > <a href=contact.html>Contact</a></li>
          </ul>  
        </div>
      <div class="footer"> 
        <h3>Contact Information</h3>  
        <p><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><i class='fa fa-phone'></i> (TEL) +94700565090 <br> <br> <i style="font-size:20px" class="fa">&#xf0e0;</i> (E-Mail Address) NeighborCare@gmail.com </p>
      <div class="foot">  
        <p> @ All right reserved</p>
      </div>
        
      
      </footer> 
    
    

</html>