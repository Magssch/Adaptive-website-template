<?php

define("TITLE", "Lorem Ipsum");

require "header.php";

$buttons = array(0, 1, 2, "About", "Contact");

$buttons[0] = array("Prosjekter",
                    "Lorem",
                    "Ipsum",
                    "Dolor",
                    "Sit");

$buttons[1] = array("Services",
                    "Lorem",
                    "Ipsum",
                    "Dolor",
                    "Sit");

$buttons[2] = array("Ideals",
                    "Lorem",
                    "Ipsum",
                    "Dolor",
                    "Sit");

echo'<div class="sidenav sn_big" id="sidebar">';

foreach ($buttons as $button) {
  echo'<a href="projects.php">';
  if(is_array($button)) {
    echo $button[0];
  } else {
    echo $button;
  }
  echo'</a>';
}

echo'
</div>

<div class="header h_big" id="header">
  <div class="logo" onclick="">
    '; echo TITLE; echo'
  </div>
  <div class="sh_divider">
  </div>
';


foreach ($buttons as $button) {

  if(is_array($button))
  {
    echo'<div class="sh_dropdown" onclick="">
         <div class="sh_dropdown_btn sh_btn_big">'.$button[0].'</div>
         <div class="sh_dropdownmenu">';

    foreach ($button as  $key => $link) {
      if($key < 1) continue;
      echo'<a href="projects.phps">'.$link.'</a>';
    }
    echo'</div>
    </div>';
  } else {
    echo'<div class="sh_button sh_btn_big" onclick="">
      '.$button.'
    </div>';
  }
}

echo'<div class="sh_text">';

$fun = array("Natural selection since 1996",
             "Dank free memes for satirical vegans",
             "Do you even <sup>shift</sup> bro?",
             "😂😋👌💯😩👌👌🔥💯🔥💯🔥💯",
             "Life is like a box of disappointments");

$r = rand(0, count($fun)-1);

$q = $fun[$r];

echo $q;
require "middle.php";

 ?>
