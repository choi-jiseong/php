<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  
  <title>Document</title>
</head>
<body>
  <h1>function</h1>
  <?php
  $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt facere corporis atque sed ad illo rerum.  
  
  mollitia quos, assumenda dolorem esse quae! Nihil dolorem culpa porro magnam repellat accusantium provident.";
  echo $str;
  ?>
  <h2>strlen()</h2>
  <?php
  echo strlen($str);
  ?>

  <h2>nl2br</h2>
  <?php
  echo nl2br($str);
  ?>
</body>
</html>