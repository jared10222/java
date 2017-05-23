<?php
if(isset($_GET['section']) && !empty($_GET['section'])){
  //check that file exists before I try to include it
  $file_name = "notes/" . $_GET['name'] . "/" . $_GET['section'] . ".php";
  if(file_exists($file_name)){
    require_once($file_name);
  }else{
    echo "<div class='bg-danger'>";
    echo "<h3 class='text-danger text-center'>File: " . $file_name . " does not exist!</h3>";
    echo "</div>";
  }
}else{
?>

<ul class="list-group">
  <li class="list-group-item"><a href="<?php echo $link; ?>intro">Introduction</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>spring-basics">Spring Basics</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>more-spring-basics">More Spring Basics</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>hands-on-examples-from-git">Hands-on Examples From Git</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>spring-modules">Spring Modules</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>java-ee-basics">Java EE Basics</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>spring-mvc-introduction">Spring MVC Introduction</a></li>
</ul>

<?php
}
?>
