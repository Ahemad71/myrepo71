<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactus";

//Insert data
$name=$_POST['name'];
$num=$_POST['num'];
$emai=$_POST['email'];
$comm=$_POST['comm'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else echo " Send Successfully";

$sql = "INSERT INTO `contacts` (`Name`, `Number`, `Email`, `msg`, `At`) VALUES ('$name', '$num', '$email', '$comm', NOW());";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>myWebsite</title>
  
  <!-- HTML -->
  

  <!-- Custom Styles -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="desk-nav">
    <div class="logo">
      <center>
        MA71
      </center>
    </div>
    <div class="navbar">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Gallery</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </nav>
  <main class="container">
    
  <form method="POST" action="cont.php">
    <center>
      <h2>Contact Us</h2>
    </center>
    Name:<input type="text" name="name" id="name" placeholder="Enter Your Name"><br>
    Number:<input type="tel" name="num" id="num" placeholder="Enter Your Number"><br>
    Email:<input type="email" name="email" id="email" placeholder="Enter Your email"><br>
    Your Message:<textarea name="comm" id="comm" rows="6">
      
    </textarea>
    <button type="submit">Send</button>
  </form>
      
  </main>
  <footer class="footer">
    <img src="">
    <div class="ftxt">
     <center>
       All Copyright Reserved
     </center>
    </div>
  </footer>
  <!-- Project -->
  <script src="js/main.js"></script>
</body>
</html>
