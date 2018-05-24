<?php
  $params = explode('/', $_GET['url']);
  var_dump($params);
  
  if($params[0] == ""){
    $controller = "MessagesController";
    $action = "root";
  }elseif($params[0] == "messages"){
    $controller = ucfirst($params[0])."Controller";
    $action = $params[1];
  }else{
    include('404.php');
    exit;
  }

  require_once('./controllers/messages.php');
  $controller = new $controller;
  if($params[2]){
    $controller->$action($params[2]);
  }else{
    $controller->$action();
  }
