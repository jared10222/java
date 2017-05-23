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
  <li class="list-group-item"><a href="<?php echo $link; ?>simple-software-setup">Simple Software Setup</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>maven-project-creation-and-key-concepts">Maven Project Creation and Key Concepts</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>maven-in-eclipse">Maven in Eclipse</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>maven-web-application">Maven Web Application</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>multi-module-project-creation">Multi Module Project Creation</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>organizing-the-multi-module-project">Organizing the Multi Module Project</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>wrap-up">Wrap Up</a></li>
</ul>

<?php
}
?>
