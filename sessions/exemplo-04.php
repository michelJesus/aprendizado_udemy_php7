<?php 

session_id('1921c56687921bda51d7ed13d2af66e9');

require_once("config.php");

session_regenerate_id();

echo session_id();


var_dump($_SESSION);
?>