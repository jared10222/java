<?php
$page_title = "Java Notes";
$body_class = "index";
require_once("includes/header.php");
?>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Java Notes</h1>
      </div><!--end page header -->
      <h3>Usage</h3>
      <p>Put code snippets in
      <code class="prettyprint">&lt;pre class="prettyprint">...&lt;/pre></code>
      or
      <code class="prettyprint">&lt;code class="prettyprint">...&lt;/code></code></p>

<pre class="prettyprint lang-java">
&lt;pre class="prettyprint">
public class callingMethodsInSameClass
{
  public static void main(String[] args){
    printOne();
    printTwo();
    printThree();
  }

  public static void printOne(){
    System.out.println("Hello World");
  }

  public static void printTwo(){
    printOne();
    printOne();
  }
}
&lt;/pre>
</pre>

<h3>How do I specify the language of my code?</h3>
<pre class="prettyprint">
&lt;pre class="prettyprint lang-html">
  The lang-* class specifies the language file extensions.
  File extensions supported by default include:
    "bsh", "c", "cc", "cpp", "cs", "csh", "cyc", "cv", "htm", "html", "java",
    "js", "m", "mxml", "perl", "pl", "pm", "py", "rb", "sh", "xhtml", "xml",
    "xsl".
&lt;/pre>
</pre>

    </div><!-- end page content -->


<?php
require_once("includes/footer.php");
?>
