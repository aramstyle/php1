<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  }
  else {
    echo "Welcome";
  }
}

function print_description() {
  if(isset($_GET['id'])) {
    echo file_get_contents("data/".$_GET['id']);
  }
  else {
    echo "Hello~!!";
  }
}

function print_list() {
  $list = scandir('./data');
  //$list = array_diff($list, [".",".."]);
  for($i=0;$i<count($list);$i++) {
    if($list[$i] == '.') continue;
    if($list[$i] == '..') continue;
    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php print_title(); ?></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php print_list(); ?>
    </ol>
    <a href="create.php">Create</a>
    <h2>
      <?php print_title(); ?>
    </h2>

    <?php print_description(); ?>

  </body>
</html>
