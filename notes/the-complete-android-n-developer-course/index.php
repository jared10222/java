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
  <li class="list-group-item"><a href="<?php echo $link; ?>introduction-to-android-studio">Introduction To Android Studio</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>java-deep-dive">Java Deep Dive</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>media-images-videos-and-sound">Media: Images, Video and Sound</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>advanced-android-features">Advanced Android Features</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>maps-and-geolocation">Maps &amp; Geolocation</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>permanent-data-storage">Permanent Data Storage</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>instagram-clone">Instagram Clone</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>uber-clone">Uber Clone</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>flappy-bird-clone">Flappy Bird Clone</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>the-extras">The Extras</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>android-wear-mini-course">Android Wear Mini-Course</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>submitting-your-app-to-google-play">Submitting Your App To Google Play</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>setting-up-a-marketing-website">Setting Up A Marketing Website</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>twitter-clone">Twitter Clone</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>whats-app-clone">WhatsApp Clone</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>where-do-you-go-from-here">Where do you go from here?</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>pre-introduction-app-marketing-for-your-app">Pre-Introduction - App Marketing For Your App!</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>introduction-to-your-success">Introduction To Your Success</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>lets-get-the-show-on-the-road">Let's Get The Show On The Road</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>expert-app-store-optimization">Expert App Store Optimization (ASO) Search Engine Strategies</a></li>
  <li class="list-group-item"><a href="<?php echo $link; ?>top-expert-marketing-strategies-1">Top Expert Marketing Strategies For Your App Part 1</a></li>
</ul>

<?php
}
?>
