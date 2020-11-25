; <?php declare(strict_types=1); die(); // prevent direct calls just in case
; file: /user.ini.php 

; userSettings.ini.php
;	Squire 3.0 default configuration file

[mainMenu]
  home[text] = "Home"
  home[href] = ""
 
  # /actions/static/pages/
  faq[text] = "404"
  faq[href] = "aBunchOFGobbledegook"

  test[text] = "Test"
  test[href] = "static/test"

  info[text] = "<strong class="fgs"> Info </strong>"
  info[href] = "static/info"

  contact[text] = "Contact Us"
  contact[href] = "#contact"

[extras1]
  sample1[title]  = "Sample 1"
  sample1[static] = "sample1"
  sample2[title]  = "Sample 2"
  sample2[static] = "sample2"

[extras2]
  tallAdvert[title]  = "Advertisement"
  tallAdvert[static] = "advert"

[modalForms]
  contact['title']  = "Contact Us"
  contact['action'] = "contact"
  contact['method'] = "post"