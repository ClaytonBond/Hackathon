<?php
  $phrase = $_REQUEST["email"];
  $method = $_REQUEST["psw"];
  $program;
  $path = "path";
  
  echo("java " . $program . " " . "\"$phrase\"");
  //exec("java -cp " . $program . " " . "\"$phrase\"", $output);
  
  //echo $output[0];
?>