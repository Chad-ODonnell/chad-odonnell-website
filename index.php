<?php

  // Connect to the Database.
  $connect = mysqli_connect('localhost', 'chad', 'MyNameIsBOB101', 'contact_information');

  // Checks the connection.
  if(!$connect){
    echo 'Connection Error: ' . mysqli_connect_error();
  }

  // Write Query for Contact Info.
  $sql = 'SELECT fname, lname, email, phone, id, inquiry FROM contactinfo';

  // Make query and get result.
  $result = mysqli_query($connect, $sql);

  // Fetch the resulting rows as an array.
  $contact = mysqli_fetch_all($result, MYSQLI_ASSOC);

  mysqli_free_result($result);

  // Close connection via $connect.
  mysqli_close($connect);

  //print_r($contact);


?>

<html>

<header>
  <link rel="stylesheet" href="css/index.css"> 
  <link rel="stylesheet" href="css/navBar.css"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chad O'Donnell's Website</title>
  <style>
  * {box-sizing: border-box;}
  </style>
</header>

<body>

  <div class="top-container">
      <h1>Welcome to Chad O'Donnell's Website</h1>
      <p>I'm hosting this on my Heroku private service server.</p>
  </div>
    
  <div class="navBar" id="navBar">
    <a href="index.php" class="logo">Welcome to City 17</a>
    <div class="navBar-right">
      <a class="active" href="#">Home</a>
      <a href="services.php">Services</a>
      <a href="portfolio.html">Portfolio</a>
      <a href="about.html">About</a>
      <a href="contact.html">Contact</a>
    </div>
  </div>

  <div class="content">
    <h3>On Scroll Sticky Header</h3>
  </div>
      
  <div id="pageDivider" class="a-container">
      <h2>Testing</h2>
  </div>

  <div class="content">
    <h3>On Scroll Sticky Header</h3>
  </div>
      
  <div id="pageDivider" class="a-container">
      <h2>Testing</h2>
  </div>
    
<!-- Navigation Bar Sticky Position -->
<script>
  window.onscroll = function() {myFunction()};
  
  var navbar = document.getElementById("navBar");
  var sticky = navbar.offsetTop;
  
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }
  </script>

</body>

<footer>
  <h1>Scroll Up</h1>
  <p>Scroll up to see more of my website.</p>
  
</footer>
    
</html>