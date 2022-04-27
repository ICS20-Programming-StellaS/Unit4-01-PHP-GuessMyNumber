<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Guess my nummber, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Stella S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Guess My Number</title>
  </head>
  <body>
    
    <!-- PHP echo to print the html to the page -->
    <center><h1><?php 
			echo "Guess My Number";?></h1></center>

    <!-- Image -->
    <?php
      echo '<center><img src= "./images/question_marks.jpg" alt="question marks" width="45%" height="auto"></center>';
    ?>

    <!-- user input -->
    <form action="./results.php" method="post" target="results">  
      <label for=numberGuess">Number (1-6) :</label>
      <input type="number" step="1" min="1" max="6" name="numberGuess">
      <br>
      <br>

      <input type="submit" value="Calculate">
      
    <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">	
      </iframe>
      
    </form></center>
    <br>
    <br>
  </body>
</html>