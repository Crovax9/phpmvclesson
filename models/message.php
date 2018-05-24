<?php

class Message{

  public static function all(){
    require_once("./idiorm.php");
    include("./db.php");
    $objects = ORM::for_table('messages')
      ->order_by_desc('created_at')
      ->find_array();
    return $objects;
  }

  public static function find($id){
    require_once("./idiorm.php");
    include("./db.php");
    $object = ORM::for_table('messages')
      ->where('id', $id)
      ->find_one()
      ->as_array();
      return $object;
  }

  public static function update($id,$title,$content){
    require_once("./idiorm.php");
    include("./db.php");
    $object = ORM::for_table('messages')->find_one($id);
    $object->set(array(
        'title'   => $title,
        'content' => $content
    ));
    $object->save();
  }

  function insert($title,$content){
    require_once("./idiorm.php");
    include("./db.php");
    $message = ORM::for_table('messages')->create();
    $message->title = $title;
    $message->content = $content;
    $message->save();
  }
  
  function delete($id)
  {
    require_once("./idiorm.php");
    include("./db.php");
    $message = ORM::for_table('message')
      ->delete($id);
    $message->save();
  }
}