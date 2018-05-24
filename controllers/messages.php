<?php
class MessagesController{
    
  function root(){
    require('./models/message.php');
    $messages = Message::all();
    include("./views/messages/top.php"); 
  }
  
  function create(){
    require('./models/message.php');
    $message = new Message;
    $message->insert($_POST['title'],$_POST['content']);
    header('Location: ../../');
    exit;
  }
  
  function edit($id){
    require('./models/message.php');
    $message = Message::find($id);
    include("./views/messages/edit.php"); 
  }
  
  function update($id){
    require('./models/message.php');
    $message = Message::update($id,$_POST['title'],$_POST['content']);
    header('Location: ../../../');
    exit;
  }
  
  function destroy($id){
    
  }
}