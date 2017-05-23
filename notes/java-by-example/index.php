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
  <li class="list-group-item"><a href="<?php echo $link; ?>install-jdk">Install JDK and set up IDE</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>language-fundamentals">Language Fundamentals and Data Types</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>conditional-operators">Conditional Operators</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>control-flow">Control Flow</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>arrays-and-strings">Arrays and Strings</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>objects-and-classes">Objects and Classes</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>recursion">Recursion</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>file-io">File I/O</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>concurrency">Concurrency</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>collection-framework">Collection Framework</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>exceptions">Exceptions</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>regex">Regular Expressions</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>gui-development">Gui Development</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>look-and-feel">Look and Feel</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>stop-watch">Project 01 Stop Watch</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>loan-payment">Project 02 Loan Payment Calculator</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>savings">Project 03 Savings Calculator</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>world-clock">Project 04 World Clock</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>text-app">Project 05 Text Application</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>refund">Project 06 Refund Request Form</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>h-tree">Project 07 H Tree</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>sierpinski-triangle">Project 08 Sierpinski Triangle</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>sierpinski-carpet">Project 09 Sierpinski Carpet</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>mini-tennis">Project 10 Mini Tennis</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>tic-tac-toe">Project 11 Tic Tac Toe</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>notepad">Project 12 Notepad Application</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>tower-of-hanoi">Project 13 Tower of Hanoi</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>calculator">Project 14 Calculator</a></li>
</ul>

<?php
}
?>
