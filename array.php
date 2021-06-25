<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Array</h1>
  <?php
  $coworkers = array('egoing', 'leezche', 'duru', 'taeho');
  echo $coworkers[1].'<br>';
  echo $coworkers[3].'<br>';
  var_dump(count($coworkers)); //count() 배열 안 값의 개수
  array_push($coworkers, 'graphittie');  // 배열 끝에 값 추가
  var_dump($coworkers);
  
  ?>
</body>
</html>