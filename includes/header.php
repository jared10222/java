<?php
ob_start();
require_once("includes/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php if(isset($page_title) && !empty($page_title)){ echo $page_title; } ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="<?php if(isset($body_class) && !empty($body_class)){ echo $body_class; }; ?>">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Java Notes</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php checkLinks($body_class, "index"); ?>"><a href="/">Home</a></li>
            <li class="<?php checkLinks($body_class, "links"); ?>"><a href="links.php">Links</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Java <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Core Java</li>
                <li class="<?php checkLinks($body_class, "core-java-volume-1"); ?>"><a href="notes.php?name=core-java-volume-1">Core Java Volume 1</a></li>
                <li class="<?php checkLinks($body_class, "core-java-volume-2"); ?>"><a href="notes.php?name=core-java-volume-2">Core Java Volume 2</a></li>
                <li class="<?php checkLinks($body_class, "design-patterns-in-java"); ?>"><a href="notes.php?name=design-patterns-in-java">Design Patterns in Java</a></li>
                <li class="<?php checkLinks($body_class, "effective-java"); ?>"><a href="notes.php?name=effective-java">Effective Java</a></li>
                <li class="<?php checkLinks($body_class, "design-patterns-elements-of-reusable-object-oriented-software"); ?>"><a href="notes.php?name=design-patterns-elements-of-reusable-object-oriented-software">Design Patterns, Elements of Reusable Object-Oriented Software</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Android</li>
                <li class="<?php checkLinks($body_class, "android-programming-the-big-nerd-ranch-guide"); ?>"><a href="notes.php?name=android-programming-the-big-nerd-ranch-guide">Android Programming - The Big Nerd Ranch Guide</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Java for Web</li>
                <li class="<?php checkLinks($body_class, "professional-java-for-web-applications"); ?>"><a href="notes.php?name=professional-java-for-web-applications">Professional Java For Web Applications</a></li>
                <li class="<?php checkLinks($body_class, "java-web-services-up-and-running"); ?>"><a href="notes.php?name=java-web-services-up-and-running">Java Web Services Up and Running</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">JavaFX</li>
                <li class="<?php checkLinks($body_class, "learn-javafx-8-building-user-experience-and-interfaces"); ?>"><a href="notes.php?name=learn-javafx-8-building-user-experience-and-interfaces">Learn JavaFX 8 Building User Experience and Interfaces with Java 8</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Java Networking</li>
                <li class="<?php checkLinks($body_class, "java-8-in-action"); ?>"><a href="notes.php?name=java-8-in-action">Java 8 In Action. Lambdas, Streams, and Functional-Style Programming</a></li>
                <li class="<?php checkLinks($body_class, "java-network-programming"); ?>"><a href="notes.php?name=java-network-programming">Java Network Programming</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Concurrency</li>
                  <li class="<?php checkLinks($body_class, "mastering-concurrency-programming-with-java-8"); ?>"><a href="notes.php?name=mastering-concurrency-programming-with-java-8">Mastering Concurrency Programming with Java 8</a></li>
              </ul><!--end dropdown-menu-->
            </li><!--end dropdown-->




            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Computer Science <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="<?php checkLinks($body_class, "computer-science-illuminated"); ?>"><a href="notes.php?name=computer-science-illuminated">Computer Science Illuminated</a></li>
                <li class="<?php checkLinks($body_class, "computing-handbook-computer-science-and-software-engineering"); ?>"><a href="notes.php?name=computing-handbook-computer-science-and-software-engineering">Computing Handbook - Computer Science &amp; Software Engineering</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Computer Programming</li>
                <li class="<?php checkLinks($body_class, "the-art-of-computer-programming-volume-one"); ?>"><a href="notes.php?name=the-art-of-computer-programming-volume-one">The Art of Computer Programming Volume 1</a></li>
                <li class="<?php checkLinks($body_class, "the-art-of-computer-programming-volume-two"); ?>"><a href="notes.php?name=the-art-of-computer-programming-volume-two">The Art of Computer Programming Volume 2</a></li>
                <li class="<?php checkLinks($body_class, "the-art-of-computer-programming-volume-three"); ?>"><a href="notes.php?name=the-art-of-computer-programming-volume-three">The Art of Computer Programming Volume 3</a></li>
                <li class="<?php checkLinks($body_class, "structure-and-interpretation-of-computer-programs"); ?>"><a href="notes.php?name=structure-and-interpretation-of-computer-programs">Structure and Interpretation of Computer Programs</a></li>
                <li class="<?php checkLinks($body_class, "the-clean-coder"); ?>"><a href="notes.php?name=the-clean-coder">The Clean Coder - A Code of Conduct for Professional Programmers</a></li>
                <li class="<?php checkLinks($body_class, ""); ?>"><a href="notes.php?name="></a></li>
              </ul>
            </li>


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Random <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="<?php checkLinks($body_class, "functional-programming-for-java-developers"); ?>"><a href="notes.php?name=functional-programming-for-java-developers">Functional Programming for Java Developers</a></li>
                <li class="<?php checkLinks($body_class, "object-oriented-software-engineering"); ?>"><a href="notes.php?name=object-oriented-software-engineering">Object-Oriented Software Engineering Using UML, Patterns and Java</a></li>
                <li class="<?php checkLinks($body_class, "pragmatic-unit-testing-in-java-8-with-junit"); ?>"><a href="notes.php?name=pragmatic-unit-testing-in-java-8-with-junit">Pragmatic Unit Testing in Java 8 With Junit</a></li>
                <li class="<?php checkLinks($body_class, "java-test-driven-development"); ?>"><a href="notes.php?name=java-test-driven-development">Java Test-Driven Development</a></li>
                <li class="<?php checkLinks($body_class, "data-structures-and-algorithms-in-java"); ?>"><a href="notes.php?name=data-structures-and-algorithms-in-java">Data Structures and Algorithms in Java</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Mathematics</li>
                  <li class="<?php checkLinks($body_class, "mathematical-logic-for-computer-science"); ?>"><a href="notes.php?name=mathematical-logic-for-computer-science">Mathematical Logic For Computer Science</a></li>
                  <li class="<?php checkLinks($body_class, "discrete-mathematics-with-applications"); ?>"><a href="notes.php?name=discrete-mathematics-with-applications">Discrete Mathematics with Applications</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Scrum</li>
                  <li class="<?php checkLinks($body_class, "scrum-the-art-of-doing-twice-the-work-in-half-the-time"); ?>"><a href="notes.php?name=scrum-the-art-of-doing-twice-the-work-in-half-the-time">Scrum - The Art of Doing Twice the Work in Half the Time</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">GIT</li>
                  <li class="<?php checkLinks($body_class, "version-control-with-git"); ?>"><a href="notes.php?name=version-control-with-git">Version Control with GIT</a></li>
              </ul>
            </li>



            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Certs <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Java</li>
                <li class="<?php checkLinks($body_class, "oca-oracle-certified-associate-java-se-8"); ?>"><a href="notes.php?name=oca-oracle-certified-associate-java-se-8">OCA Oracle Certified Associate Java SE 8</a></li>
                <li class="<?php checkLinks($body_class, "ocp-oracle-certified-professional-java-se-8"); ?>"><a href="notes.php?name=ocp-oracle-certified-professional-java-se-8">OCP Oracle Certified Professional Java SE 8 Programmer</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Database Administration</li>
                <li class="<?php checkLinks($body_class, "oca-oracle-database-12c-sql-fundamentals-1-exam-guide"); ?>"><a href="notes.php?name=oca-oracle-database-12c-sql-fundamentals-1-exam-guide">OCA Oracle Database 12c SQL Fundamentals 1 Exam Guide</a></li>
                <li class="<?php checkLinks($body_class, "oca-oracle-database-12c-administrator"); ?>"><a href="notes.php?name=oca-oracle-database-12c-administrator">OCA Oracle Database 12c Administrator</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Udemy <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="<?php checkLinks($body_class, "java-by-example"); ?>"><a href="notes.php?name=java-by-example"><span class="glyphicon glyphicon-ok-circle text-success" aria-hidden="true"></span> Java By Example</a></li>
                <li class="<?php checkLinks($body_class, "complete-java-masterclass"); ?>"><a href="notes.php?name=complete-java-masterclass">Complete Java Masterclass</a></li>
                <li class="<?php checkLinks($body_class, "java-spring-framework-masterclass"); ?>"><a href="notes.php?name=java-spring-framework-masterclass">Java Spring Framework Masterclass</a></li>
                <li class="<?php checkLinks($body_class, "spring-framework-tutorial-for-beginners"); ?>"><a href="notes.php?name=spring-framework-tutorial-for-beginners">Spring Framework Tutorial For Beginners</a></li>
                <li class="<?php checkLinks($body_class, "java-multithreading"); ?>"><a href="notes.php?name=java-multithreading">Java Multithreading</a></li>
                <li class="<?php checkLinks($body_class, "java-design-patterns"); ?>"><a href="notes.php?name=java-design-patterns">Java Design Patterns and Architecture</a></li>
                <li class="<?php checkLinks($body_class, "crash-course-into-javafx"); ?>"><a href="notes.php?name=crash-course-into-javafx">Crash Course Into JavaFx</a></li>
                <li class="<?php checkLinks($body_class, "the-complete-android-n-developer-course"); ?>"><a href="notes.php?name=the-complete-android-n-developer-course">The Complete Android N Developer Course</a></li>
                <li class="<?php checkLinks($body_class, "maven-crash-course"); ?>"><a href="notes.php?name=maven-crash-course">Maven Crash Course</a></li>
                <li class="<?php checkLinks($body_class, "jsp-servlets-and-jdbc-for-beginners"); ?>"><a href="notes.php?name=jsp-servlets-and-jdbc-for-beginners">JSP, Servlets and JDBC for beginners</a></li>
                <li class="<?php checkLinks($body_class, "the-complete-scrum-developer-sdc-certification-training"); ?>"><a href="notes.php?name=the-complete-scrum-developer-sdc-certification-training">The Complete Scrum Developer SDC&trade; Certification Training</a></li>
                <li class="<?php checkLinks($body_class, "oracle-database-12c-sql-fundamentals"); ?>"><a href="notes.php?name=oracle-database-12c-sql-fundamentals">Oracle Database 12c SQL Fundamentals</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Other Videos</li>
                <li class="<?php checkLinks($body_class, "master-object-oriented-design-in-java"); ?>"><a href="notes.php?name=master-object-oriented-design-in-java">Master Object Oriented Design in Java</a></li>
                <li class="<?php checkLinks($body_class, "the-complete-java-servlets-and-jsps-developer-course"); ?>"><a href="notes.php?name=the-complete-java-servlets-and-jsps-developer-course">The Complete Java Servlets and JSPs Developer Course</a></li>
                <li class="<?php checkLinks($body_class, "javafx-tutorial-for-beginners"); ?>"><a href="notes.php?name=javafx-tutorial-for-beginners">JavaFX Tutorial For Beginners</a></li>
                <li class="<?php checkLinks($body_class, "addison-wesley-professional-javafx-programming-live-lessons"); ?>"><a href="notes.php?name=addison-wesley-professional-javafx-programming-live-lessons">Addison-Wesley Professional JavaFX Programming LiveLessons</a></li>
                <li class="<?php checkLinks($body_class, "introduction-to-computer-science-harvard"); ?>"><a href="notes.php?name=introduction-to-computer-science-harvard">Introduction to Computer Science | Harvard</a></li>

                <li class="<?php checkLinks($body_class, ""); ?>"><a href="notes.php?name="></a></li>
                <li class="<?php checkLinks($body_class, ""); ?>"><a href="notes.php?name="></a></li>

              </ul>
            </li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
