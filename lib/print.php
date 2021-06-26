<?php
function print_title() {
  if (isset($_GET['id'])){  // isset 값이 있다면 true반환 없다면 false 반환
    echo htmlspecialchars($_GET['id']);
  } else {
    echo "Welcome";
  }
}
  function print_description() {
    if(isset($_GET['id'])){
      // echo $_GET['id'];
    $basename = basename('data/'.$_GET['id']);
      echo htmlspecialchars(file_get_contents("data/"$basename));
    }else {
      echo "Hello, PHP";
    }
  }

  function print_list() {
    $list = scandir('data'); // 첫번째 값은 현재 폴더(.), 두번 째 값은 현재 폴더의 부모 폴더(..)
    $i = 0;
    while($i < count($list)) {
      $title= htmlspecialchars($list[$i]);
      if($list[$i] != '.') {
        if($list[$i] != '..'){
      echo "<li><a href=\"index2.php?id=$title\">$title</a></li>\n";
        }
      }
      $i++;
    }
  }

?>