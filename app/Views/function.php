<?php
function getUserById($user_id) {
    $db = new mysqli('your_database_host', 'your_database_username', 'your_database_password', 'your_database_name');
    $query = "SELECT * FROM users WHERE id = '$user_id'";
    $result = $db->query($query);
    $user = $result->fetch_assoc();
    return $user;
  }