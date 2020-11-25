# Installation:

All directories and files should be downloaded into "ANY-DIRECTORY_NAME" and the following index.php file called to activate this <b>jb-squire3</b> Repository.


#### file to call index.php
&lt;?php
header('Location: ANY-DIRECTORY_NAME');


#### index.php definitions that require setting to your your environment

&lt;?php declare(strict_types=1);
// SHOULD BE SET IN PHP.INI
  // error_reporting(-1);
  // ini_set('display-errors', 'true');

defined('LOCALHOST')
?:
define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);

// BASEURL used for images and JavaScript files stored in /assets/css or assets/js folders
define('BASEURL',  LOCALHOST 
	? 'http://localhost/thisisatesttoseeifitworks.tk/public_html/'
	: 'https://thisisatesttoseeifitworks.tk/'
); 
define('APP', 'squire3/003-app/');
define('SYS', 'squire3/003-sys/');

// PLEASE NOTE THE "squire3" folder can be set above or below root
// give it a whirl and see if it works :)
