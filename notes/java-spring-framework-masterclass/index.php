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
  <li class="list-group-item"><a href="<?php echo $link; ?>installation-and-setup-1">Installation &amp; Setup - Part 1</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>introduction-to-java-ee">Introduction to Java EE</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>installation-and-setup-2">Installation &amp; Setup - Part 2</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>introducing-spring-framework">Introducing Spring Framework</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>introducing-spring-mvc">Introducing Spring MVC</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>bean-configuration">Bean Configuration</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>configuring-spring-with-annotations">Configuring Spring with Annotations</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>introducing-mysql">Introducing MySQL</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>working-with-spring-jdbc">Working with Spring JDBC</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>spring-mvc-in-depth-1">Spring MVC in Depth - Part 1 (Java Config, JNDI, Interceptors &amp; Handler Mapping)</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>spring-mvc-in-depth-2">Spring MVC in Depth - Part 2 (Request Mapping, Request Param &amp; Model Attributes)</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>intellij-spring-section">IntelliJ Spring Section</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>extra">Extra</a></li>
</ul>

<?php
}
?>
