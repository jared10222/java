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
  <li class="list-group-item"><a href="<?php echo $link; ?>week-0">Week 0</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>week-1">Week 1</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>week-2">Week 2</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>week-3">Week 3</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>week-4">Week 4</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>week-5">Week 5</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>week-6">Week 6</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>week-7">Week 7</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>week-8">Week 8</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>week-9">Week 9</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>week-10">Week 10</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>week-11">Week 11</a></li>
</ul>

<?php
}
?>
