<?php
function print_title(){
  if(isset($_GET['id'])){
    echo htmlspecialchars($_GET['id']);
  }
  else {
    echo "Welcome";
  }
}

function print_description() {
  if(isset($_GET['id'])) {
    $basename = basename($_GET['id']);
    echo htmlspecialchars(file_get_contents("data/".$basename));
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
    $temp = htmlspecialchars($list[$i]);
    echo "<li><a href=\"index.php?id=$temp\">$temp</a></li>\n";
  }
}
?>
