<?php
function connexobjet($base, $param){ 
  include_once("myparam.inc.php"); 
  $idcon = new mysqli(HOST, USER, PASS, "cegep_php_final"); 
  if (!$idcon){ 
    echo "<script type=text/javascript>"; 
    echo "alert('Connexion impossible à la basel')</script>"; 
    exit(); 
  }
  return $idcon; 
}
?>


