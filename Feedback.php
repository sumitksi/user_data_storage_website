<?php

@include 'Config.php';

if(isset($_POST['submit']))
{
   $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
   $feedback1 = filter_input(INPUT_POST, "feedback1", FILTER_SANITIZE_SPECIAL_CHARS);
   $feedback2 = filter_input(INPUT_POST, "feedback2", FILTER_SANITIZE_SPECIAL_CHARS);
   $feedback3 = filter_input(INPUT_POST, "feedback3", FILTER_SANITIZE_SPECIAL_CHARS);
   $remarks = filter_input(INPUT_POST, "remarks", FILTER_SANITIZE_SPECIAL_CHARS);
   $insert = "INSERT INTO feedback(email, feedback1, feedback2, feedback3, remarks) VALUES('$email','$feedback1','$feedback2','$feedback3','$remarks')";
   mysqli_query($conn, $insert);
   echo "Your feedback is submitted successfully";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My website</title>

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <h3>Feedback</h3>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="text" name="feedback1" required placeholder="Feedback 1">
      <input type="text" name="feedback2" required placeholder="Feedback 2">
      <input type="text" name="feedback3" required placeholder="Feedback 3">
      <input type="text" name="remarks" required placeholder="Remarks">
      <input type="submit" name="submit" value="Submit" class="form-btn">
   </form>

</div>

</body>
</html>