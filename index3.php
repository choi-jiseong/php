<?php 
  function print_title() {
    if(isset($_GET['id'])){
      echo $_GET['id'];
    }else{
      echo "WELCOME";
    }
  }

  function print_list() {
    $list = scandir('data');
      $i = 0;
      while($i < count($list)){
        if($list[$i] != '.'){
          if($list[$i] != '..'){
            echo "<li><a href=\"index3.php?id=$list[$i]\">$list[$i]</a></li>";
          }
        }
        $i++;
      }
  }

  function print_description() {
    if(isset($_GET['id'])){
      echo file_get_contents('data/'.$_GET['id']);
    }else{
      echo "HELLO PHP";
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
  <h1><a href="index3.php">WEB</a></h1>
  <ol>
    <?php 
      print_list();
    ?>
  </ol>
  <a href="create2.php">create</a>
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