<footer class="footer">
  <div class="container">
    <?php
    $year = date('Y');
    ?>
    <p class="text-muted">&copy;<?php echo $year; ?> <a href="http://www.theoryofwebolution.com/" target="_blank">Theory of Webolution</a></p>
  </div>
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script src="js/jquery-3.2.0.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Google code prettify -->
    <!--<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>-->
    <script src="code-prettify-master/loader/run_prettify.js"></script>

  </body>
</html>
<?php ob_end_flush(); ?>
