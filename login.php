
<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user_form
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user_form = $result->fetch_assoc();
    
    if ($user_form) {
        
        if (password_verify($_POST["password"], $user_form["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_form_id"] = $user_form["id"];
            
            header("Location: order.html");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>  
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Style.css">  
        <div class="image">

        </div>
        <title>NeighborCare</title>
    </head>  
    <header>  
      
    </header>     
    <div class="main1">  
        <nav> 
            <a href="ho.html">Home</a> 
            <a  href="service.html">Services</a>   
            <a  href="about.html">About</a>   
            <a  href="contact.html">Contact</a>    
             
            <div class="btn">
           <a href="index.php"><button class="right" style="height:10%; width:320%  ;  border-radius: 14px; border: none; background-color:lightblue; color:white; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;margin-left:110% ;margin-top:380%;padding:2px;" >Back to Home</a> </button>  
          </div>
          </nav>     
    
</div>    

    <body>
        
        <div class="cont-sign">  
            
            <div class="log-box">
                <img class="logo" src="images/logo1.png" alt="Logo">
                <h1 style="top:-13px;">Hello Again!</h1>   

                <?php if ($is_invalid): ?>
                  <em>Invalid login</em>
                <?php endif; ?>
            
                <form method="POST">
                    <label for="email" >Email</label> <br> 
                    <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>  <br><br>
                   <button style="background-color:darkblue; margin-left:90px; padding:5px; width:50%; border-radius:10px; color:white;border:none;font-size:18px;">Log in</button><br>  
                   <a class="regi" href="signUp.html"style="top:30px;">Register</a>
                    <a class="forg-pass" href="#" style="top:70px; left:20px;">forgot password?</a><br>
                    
                </form>  
            
            </div>  
          
            <div class="cont-sign-img">
                <img class="sign-pic" src="images/p.png">
            </div>  
         
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