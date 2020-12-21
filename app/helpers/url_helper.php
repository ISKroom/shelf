<?php
  // Sinple page redirect
  function redirect($page){
    header('location: ' . URLROOT . '/' . $page);
  }


?>
