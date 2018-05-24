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
    <h1>Message id <?= $message[id] ?>Edit</h1>
    <form action="../update/<?= $message[id] ?>/" method="post">
      <div class="form">
        <label>Title</label>
        <input type="text" name="title" value="<?= $message[title] ?>">
      </div>

      <div class="form">
        <label>Content</label>
        <textarea name="content"><?= $message[content] ?></textarea>
      </div>

      <div class="form">
        <input type="submit" name="submit">
      </div>
    </form>
    
    <form action="../update/<?= $message[id] ?>/" method="post">

      <div class="form">
        <input type="submit" name="delete">
      </div>
    </form>
  </body>
</html>