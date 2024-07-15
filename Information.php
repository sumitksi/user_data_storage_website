<?php

@include 'Config.php';

if(isset($_POST['submit']))
{
   $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
   $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
   $college = filter_input(INPUT_POST, "college", FILTER_SANITIZE_SPECIAL_CHARS);
   $course = filter_input(INPUT_POST, "course", FILTER_SANITIZE_SPECIAL_CHARS);
   $contact = filter_input(INPUT_POST, "contact", FILTER_SANITIZE_SPECIAL_CHARS);
   $dob = filter_input(INPUT_POST, "dob", FILTER_SANITIZE_SPECIAL_CHARS);
   $insert = "INSERT INTO register(name, email, college, course, contact, dob) VALUES('$name','$email','$college','$course','$contact','$dob')";
   mysqli_query($conn, $insert);
   echo "You information is registered successfully";
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
      <h3>Information</h3>
      <input type="text" name="name" required placeholder="Enter your name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="text" name="college" required placeholder="Enter your college name">
      <input type="text" name="course" required placeholder="Enter your course name">
      <input type="number" name="contact" required placeholder="Enter your contact number">
      <input type="date" name="dob" required placeholder="Enter your date of birth">
      <input type="file" name="pic" accept="image/png, image/jpeg" required placeholder="Enter your photo">
      <input type="submit" name="submit" value="submit" class="form-btn">
   </form>

</div>

</body>
</html>