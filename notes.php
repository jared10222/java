<?php
function getNotes(){
  //check that name is set in get and that its not empty
  if(isset($_GET['name']) && !empty($_GET['name'])){
    return true;
  }else{
    return false;
  }
}

function formatName($name){
  //format the name variable
  $formatted_name = preg_replace("/-/", " ", $name);
  $formatted_name = ucwords($formatted_name);
  return $formatted_name;
}

if(getNotes()){
  $main_link = "notes.php?name=" . $_GET['name'];;
  $link = "notes.php?name=" . $_GET['name'] . "&section=";
  $course_index = "notes/" . $_GET['name'] . "/index.php";
  $name = formatName($_GET['name']);

  $page_title = $name . " | JavaScript Notes";
  $body_class = $_GET['name'];
  require_once("includes/header.php");

}else{
  redirect();
}



?>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1><a href="<?php echo $main_link; ?>"><?php echo $name; ?></a></h1>
      </div><!--end page header -->

      <?php
      //check that course_index exists
      if(file_exists($course_index)){
        require_once($course_index);
      }else{
        echo "<div class='bg-danger'>";
        echo "<h3 class='text-danger text-center'>The file: " . $course_index . " does not exist!</h3>";
        echo "</div>";
      }

      ?>


    </div><!-- end page content -->


<?php
require_once("includes/footer.php");
?>
