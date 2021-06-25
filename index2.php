<?php
function print_title() {
  if (isset($_GET['id'])){  // isset 값이 있다면 true반환 없다면 false 반환
    echo $_GET['id'];
  } else {
    echo "Welcome";
  }
}
  function print_description() {
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    }else {
      echo "Hello, PHP";
    }
  }

  function print_list() {
    $list = scandir('data'); // 첫번째 값은 현재 폴더(.), 두번 째 값은 현재 폴더의 부모 폴더(..)
    $i = 0;
    while($i < count($list)) {
      if($list[$i] != '.') {
        if($list[$i] != '..'){
      echo "<li><a href=\"index2.php?id=$list[$i]\">$list[$i]</a></li>\n";
        }
      }
      $i++;
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  
  <title>
  <?php
    print_title();
    ?>
  </title>
</head>
<body>
  <h1><a href="index2.php">WEB</a></h1>
  <ol>
    <?php
    print_list();
  ?>
  </ol>
  <a href="create.php">create</a>
  <h2>
    <?php 
      print_title();
    ?>
  </h2>
  <?php 
    print_description();
  ?>
</body>
</html>

