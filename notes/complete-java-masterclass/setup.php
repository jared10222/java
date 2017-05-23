<h2><?php echo formatName($_GET['section']); ?></h2>
<hr />
<h3>How to install Java Development Kit (JDK) for Windows</h3>

<p><a href="http://java.oracle.com" target="_blank">Download Java</a></p>
<pre class="prettyprint">
# Go to Downloads
# Go to Java for Developers (Hover on downloads) (Maybe changed, look for Java Platform (JDK) 8u111/8u112)
# Select what version is right for my system (32 bit or 64 bit)
# Open the downloaded file
# Run the installation wizard, keep default settings
</pre>

<hr />
<h3>Configuring IntelliJ for Java on Windows</h3>
<pre class="prettyprint">
# Open IntelliJ IDEA
# Click on 'Configure'
# Click on 'Project Defaults'
# Click on 'Project Structure'
# Click on 'New' next to the SDK (Says &lt;No SDK&gt;)
# Select JDK by clicking it
# Navigate to the folder where the JDK was installed
# Program Files or Program Files(x86)/Java/jdk1.8.0_92
# Click on the 'Project Language Level'
# Set to SDK default(8 - Lambdas, type annotations etc)
# Click on 'OK'

# Click on 'Configure'
# Click on 'Settings'
# Click on 'Editor'
# Click on 'Appearance' and turn on 'Show line numbers'
# Click on 'Apply'

# Go to search menu on the top
# Search for 'import'
# Should see 'auto imports', add 'Optimize imports on the fly' and 'Add unambiguous imports on the fly'
# Click on 'Apply'
# Click on 'OK'

</pre>

<hr />
<h3>How to install the Java Development Kit (JDK) for a Mac</h3>

<p><a href="http://java.oracle.com" target="_blank">Download Java</a></p>

<pre class="prettyprint">
# Hover over 'Downloads'
# Click on Java SE
# Click on Java Platform (JDK) 8u121
# Accept License Agreement
# Select Mac OS X
# Open the downloaded file
# Run Installation Wizard
</pre>

<hr />
<h3>Download and install IntelliJ on a Mac</h3>
<p><a href="http://www.jetbrains.com" target="_blank">Download IntelliJ IDEA</a></p>
<pre class="prettyprint">
# Download IntelliJ IDEA from their website
# Drag IntelliJ IDEA CE to Applications folder (that installs it on the mac)
# In the applications folder double click on the community edition (IDEA CE)
# He uses the 'Darcula' color scheme
# start using intelliJ IDEA

</pre>

<hr />
<h3>Configuring IntelliJ for Java on Mac</h3>
<pre class="prettyprint">
# Open IntelliJ
# Click on Configure
# Click on Project Defaults
# Click on Project Structure
# Click on Project on the left hand side
# Set the SDK, Click on New and select JDK Library/Java/JavaVirtualMachines/jdk.1.8.0_77.jdk/Contents/Home
# Click on 'OK'

# Make sure SDK default is set to (8 - Lambdas, type annotations etc)
# Click on 'OK'

# Click on Configure
# Click on Preferences
# Go to 'Editor' then 'General' then 'Appearance' then click on 'Show line numbers'
# Click 'Apply'

# Click on 'Auto Import' add 'Optimize imports on the fly' and 'Add unambiguous imports on the fly'
# Click on 'Apply'
# Click on 'OK'

</pre>
