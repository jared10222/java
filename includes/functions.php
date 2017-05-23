<?php
function checkLinks($body_class, $page){
  if($body_class == $page){
    echo " active ";
  }else{
    return false;
  }
}

function redirect($page = "index.php"){
  Header("Location: $page");
}


?>
