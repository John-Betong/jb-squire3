# Installation:

All directories and files should be downloaded into "ANY-DIRECTORY_NAME" and the following index.php file called to activate this <b>jb-squire3</b> Repository.


#### file: to call ANY-DIRECTORY/index.php
&lt;?php
s
header('Location: ANY-DIRECTORY');
<br>
<br>

#### file: ANY-DIRECTORY/index.php definitions that require setting to your environment

&lt;?php declare(strict_types=1);

defined('LOCALHOST')
||
define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);
<br>

// BASEURL used for images and JavaScript files stored in /assets/css or assets/js folders
define('BASEURL',  LOCALHOST 
	? 'http://localhost/thisisatesttoseeifitworks.tk/public_html/'
	: 'https://thisisatesttoseeifitworks.tk/'
); 
<br>
define('APP', 'ANY-DIRECTORY/003-app/');
<br>
define('SYS', 'ANY-DIRECTORY/003-sys/');
<br>
// PLEASE NOTE THE "squire3" folder can be set above or below root
<br><br>
// give it a whirl and see if it works :)
