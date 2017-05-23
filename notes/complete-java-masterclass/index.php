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
  <li class="list-group-item"><a href="<?php echo $link; ?>setup">Setup</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>first-steps">First Steps</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>variables-datatypes-and-operators">Variables, Datatypes and Operators</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>expressions-statements-codeblocks-methods">Java Tutorial: Expressions, Statements, Code blocks, Methods and more</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>control-flow-statements">Control Flow Statements</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>classes-constructors-and-inheritance">OOP Part 1 - Classes, Constructors and Inheritance</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>composition-encapsulation-and-polymorphism">OOP Part 2 - Composition, Encapsulation, and Polymorphism</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>arrays-java-inbuilt-lists-autoboxing">Arrays, Java inbuilt Lists, Autoboxing and Unboxing</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>inner-and-abstract-classes-and-interfaces">Inner and Abstract Classes &amp; Interfaces</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>java-generics">Java Generics</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>naming-conventions-and-packages-static-and-final-keywords">Naming Conventions and Packages, static and final Keywords</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>java-collections">Java Collections</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>javafx">JavaFX</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>basic-io">Basic Input &amp; Output including java.util</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>concurrency-in-java">Concurrency in Java</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>lambda-expressions">Lambda Expressions</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>regex">Regular Expressions</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>debugging-and-unit-testing">Debuggin and Unit Testing</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>databases">Databases</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>java-networking-programming">Java Networking Programming</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>extras">Extras</a></li>
</ul>

<?php
}
?>
