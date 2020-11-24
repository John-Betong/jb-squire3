<?php declare(strict_types=1);

function action_content(array $data)
{
  # echo '<pre>'; print_r($data); echo '</pre>';

$IMG = 'https://thisisatesttoseeifitworks.tk/assets/imgs/ds-dirs.png';

echo $tmp = <<< ____EOT
<div class="alternating w88 mga p42 fjb">
				
  <h2 class="fsl"> 
  	How to create a new "Info Page" 
	  <b class="flr">  	
	  <a href="https://forums.cutcodedown.com/index.php?topic=362.msg1977#msg1977">
  	    Forum Explanation:
  	  </a>
  	</b>
  </h2>
<br>

<dl class="bg1 dl1 ">
  <dt> FILE Locations: </dt>
  <dd> 
  <dl class="dl1 bd1 bgs">
  	<dt> /user.ini.php 
      <sup> modified to add "Info" link 
        </sup> </dt>
    <dd> set - top [mainMenu], [content], [contact], [extras1], [extras2], [modalForms]  </dd>

      <dt> created info directory 
        <sup> added following two new files </sup> </dt>
      <dd>
        <dl>
        <dt> 1: /actions/static/pages/info/info.ini 
        <sup> new file 
        </sup> </dt>
        <dd> set - currentPage = "Info" and noExtras=TRUE   </dd>

        <dt> 2: /actions/static/pages/info.content.php 
        <sup> new file </sup> </dt>
        <dd> function action_content() {HTML CONTENT} </dd>
      </dl>  
    </dd>  

    <dt> /templates/default/vars.screen.css 
      <sup> existing CSS file </sup> </dt>
    <dd> CSS file contents </dd>

    <dt> /templates/default/layout.screen.css 
      <sup> existing CSS file </sup> </dt>
    <dd> CSS @import "tla.css"; and CSS elements </dd>

    <dt> /templates/default/common.template.php 
      <sup> layout functions </sup> </dt>
    <dd> Function template_header(\$data = []), function  template_footer(\$data = []) </dd>

  	<dt> https://thisisatesttoseeifitworks.tk/assets/imgs/ds-dirs.png </dt>
  	<dd class="w88 p42">
  	  <hr>
      <img class="p42" src="$IMG" width="374" height="822" alt="ds-dirs.png">
   </dd>
  </dl>
   </dd>
  </dl>

 </div><!-- class="alternating w88 mga p42" -->
____EOT;

}//
