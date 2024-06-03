<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        //password_verify($_POST["password"], $user["password_hash"])
        //        if ($user["password_hash"] === $_POST["password"]) {

        if ($_POST["password"] === $user["password_hash"]) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }

        else if (password_verify($_POST["password"], $user["password_hash"])) {
            
          session_start();
          
          session_regenerate_id();
          
          $_SESSION["user_id"] = $user["id"];
          
          header("Location: index.php");
          exit;
      }

    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    

<link rel="icon" type="image/png" href="img/hamburger.png">
    
 

    <script src="script.js"></script>

    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="Style2.css">

    
    <title>Login</title>
    <meta charset="UTF-8">
    

   
</head>
<body>
    
      <!-- Header -->
      <section id="header">
        <div class="header container">
          <div class="nav-bar">
            <div class="brand">
              <a href="index.php">
                <bh> QuackFood </bh>
              </a>
            </div>
            <div class="nav-list">
              
                <div class="bar"></div>
          
              <ul>
                <li><a href="index.php" data-after="Home">Home</a></li>
                <li><a href="about.html" data-after="About">About</a></li>
                <li><a href="contact.html" data-after="Contact">Contact</a></li>
  
                
        <!--  <li>  <img src="img/shopping-cart.png" /></li> -->
  
              </ul>
            </div>
          </div>
        </div>
      </section>
    <!-- End Header -->


      </head>
      <body>
      
        <br>
        
        <div class="container3">

    <h1>Login</h1>
    
    <br>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
    <form method="post">

        <label for="email">Email</label>
        
        <input type="email" name="email" id="email" placeholder="Email"

               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
       
               <br><br>


        <label for="password">Password</label>

        <input type="password" name="password" id="password" placeholder="password">

        <br>

        <button type="submit" class="submit-button">Log in</button>
    </form>
    </div>

      
</body>
</html>







