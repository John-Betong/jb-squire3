# JB-Squire3 Repository
### Original Source from: https://cutcodedown.com/for_others/squire3/

### This repository split the above source into the following folders (for easier maintenance) :

<br>
### Online Demo:
<br>
https://thisisatesttoseeifitworks.tk/jb-squire3/

<dl>
<dt> /assets/ </dt>
<dd> contains three sub-folders "css", "js" and "imgs" </dd>
<dt> ANY-DIRECTORY - may be positioned anywhere on domain-name </dt>
<dd> 
	contains two sub-folders 
	<ol>
	  <li> 003-app - jb-squire3 project application files </li>
	  <li> 003-sys - jb-squire3 project system files </li>
    </ol>
</dd>
<dd> &nbsp; </dd>	
</dl>


## Installation:

All directories and files should be downloaded into "ANY-DIRECTORY" and the following index.php file called to activate this <b>jb-squire3</b> Repository.
<br>

#### file: to call ANY-DIRECTORY/index.php
&lt;?php
<br>
header('Location: ANY-DIRECTORY');
<br>

#### file: ANY-DIRECTORY/index.php definitions that require setting to your environment

&lt;?php declare(strict_types=1);

defined('LOCALHOST')
||
define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);
<br>

// BASEURL used for images and JavaScript files stored in /assets/css or assets/js folders
define('BASEURL',  LOCALHOST 
<br>
	? 'http://localhost/thisisatesttoseeifitworks.tk/public_html/'
<br>	
	: 'https://thisisatesttoseeifitworks.tk/'
<br>	
); 
<br><br>
define('APP', 'ANY-DIRECTORY/003-app/');
<br>
define('SYS', 'ANY-DIRECTORY/003-sys/');
<br><br>
// PLEASE NOTE THE "ANY-DIRECTORY" folder can be set above or below root
<br><br>
// give it a whirl and see if it works :)
<br><br><br><br>
// DO NOT MODIFY ANYTHING BELOW
