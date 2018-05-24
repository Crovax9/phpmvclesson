<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Message Board</title>
    <style>
      .form{
        margin-bottom:15px;
      }
    </style>
  </head>
  <body>
    <h1>Welcome to Message Bord</h1>

    <?php
    foreach ($messages as $message) {
    ?>
    <a href="messages/edit/<?= $message[id] ?>"><?= $message[id] ?></a>
    <?php
      echo $message[title],$message[content];
      echo "<br>";
    }
    ?>

    <form action="./messages/create/" method="post">
      <div class="form">
        <label>Title</label>
        <input type="text" name="title">
      </div>

      <div class="form">
        <label>Content</label>
        <textarea name="content"></textarea>
      </div>

      <div class="form">
        <input type="submit" name="submit">
      </div>
    </form>
  </body>
</html>
