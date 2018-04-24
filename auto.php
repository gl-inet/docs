<?php
error_reporting(E_ALL);
 // Prevent accidental XSS
//header("Content-type: text/plain"); 
 // Run the script - make sure that your SSH key is set with *no* password
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  $out=shell_exec("./pull.sh"); 
  header("Content-type: text/plain");
  echo $out;
}else{
  //$output=exec(getcwd()."/pull.sh",$out,$ret);
  //exec("./pull.sh", $out);
 // echo var_dump($out);
  //header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
   header("Content-type: text/plain");
   echo 'output:\n';
  // $pwd= getcwd();
  $out=shell_exec("./pull.sh");
  echo $out;
}
