<?php
  require_once("./idiorm.php");
  ORM::configure('mysql:host=localhost;dbname=messageboardtest');
  ORM::configure('username', 'root');
  ORM::configure('password', '');
  $db = ORM::get_db();
  $db->exec("
  CREATE TABLE IF NOT EXISTS messages (
    id INTEGER PRIMARY KEY AUTO_INCREMENT, 
    title TEXT, 
    content TEXT,
    created_at timestamp
  );"
  );