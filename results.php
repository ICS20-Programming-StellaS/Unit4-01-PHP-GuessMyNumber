<?php
  // get the input from text field
  $number = rand(1,6);
  $numberGuess = ($_POST['numberGuess']);
?>

<?php
	// calculate the volume
  if($numberGuess == $number) {
  echo "That's Correct!";
  } else { 
  echo "That is inncorrect!";
  echo "<h4>The correct answer is " . $number . "</h4>";
  }
?>
