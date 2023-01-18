<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Here you can check the credentials against a database or hardcoded values
    if ($username == "admin" && $password == "password") {
      // Start a session and redirect to a protected page
      session_start();
      $_SESSION["logged_in"] = true;
      header("Location: protected.php");
    } else {
      echo "Invalid username or password";
    }
  }
?>

