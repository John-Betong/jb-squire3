# JB-Squire3 Repository

### [**JB-Squire3 - Online Demo**](https://thisisatesttoseeifitworks.tk/jb-squire3/)
  
### [**Original CutCodeDown Source**](https://cutcodedown.com/for_others/squire3/)


### The above source is split into into the following folders (for easier maintenance) :

### Folder: /assets - (contains three sub-folders)
<ol><li>
	css</li>
	<li>js</li>
	<li>imgs</li>
  </ol>
<br><br>

### Folder:  ANY-DIRECTORY - (contains application and system folders)
>   003-APP
> <br>
>  003-SYS

<br>


## Installation:

> All directories and files should be downloaded into **ANY-DIRECTORY** and the following index.php file called to activate this <b>jb-squire3</b> Repository.
<br>

### File: /index.php - to call JB-Squire3

```
<?php
header('Location: ANY-DIRECTORY/index.php');
?>
```

#### File: ANY-DIRECTORY/index.php definitions that require setting to your environment
```
<?php declare(strict_types=1);

defined('LOCALHOST') || define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);

// BASEURL used for images and JavaScript files stored in /assets/css or assets/js folders
define( 'BASEURL',  LOCALHOST 
 ? 'http://localhost/thisisatesttoseeifitworks.tk/public_html/'
 : 'https://thisisatesttoseeifitworks.tk/'
);   

define('APP', 'ANY-DIRECTORY/003-app/');

define('SYS', 'ANY-DIRECTORY/003-sys/');
```

NB: **"ANY-DIRECTORY"** folder can be set above or below root

 
