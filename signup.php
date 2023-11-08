<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
  
  // Store the data in a database (you need to set up a database connection here)
  // Example SQL query: INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password');
  
  // Redirect to a confirmation page or login page
  header("Location: registration-successful.html");
}
?>
