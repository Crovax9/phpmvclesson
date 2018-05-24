<?php 
    ORM::configure('mysql:host=localhost;dbname=messageboardtest');
    ORM::configure('username', 'root');
    ORM::configure('password', '');
    $db = ORM::get_db();