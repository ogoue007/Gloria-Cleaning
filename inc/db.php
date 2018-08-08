<?php

    $db = new mysqli('localhost', 'root', '', 'gloria_cleaning');
    if($db->connect_error) {
      $error = $db->connect_error;
    }
