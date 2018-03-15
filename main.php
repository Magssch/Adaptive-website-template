<?php

define("TITLE", "Lorem Ipsum");

require "header.php";

// Start header & sidenav links
$buttons = array(

// Define header link labels without dropdown menu.
// First entry is main link.
              array("Prosjekter",
                    "Lorem",
                    "Ipsum",
                    "Dolor",
                    "Sit"),
              array("Services",
                    "Lorem",
                    "Ipsum",
                    "Dolor",
                    "Sit"),
              array("Ideals",
                    "Lorem",
                    "Ipsum",
                    "Dolor",
                    "Sit"),

// Define header link labels without dropdown menu
              "About", "Contact"
);

$links = array(

// Define header links without dropdown menu.
// First entry is main link.
              array("#",
                    "#",
                    "#",
                    "#",
                    "#"),
              array("#",
                    "#",
                    "#",
                    "#",
                    "#"),
              array("#",
                    "#",
                    "#",
                    "#",
                    #"),

// Define header links without dropdown menu
              "#", "#"
);

// end define header links

echo'<div class="sidenav sn_big" id="sidebar">';

$i = 0;
foreach ($buttons as $button) {
  echo'<a href="' + $links[i] + '">';
  if(is_array($button)) {
    echo $button[0];
  } else {
    echo $button;
  }
  echo'</a>';
  i++;
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

i = 0;
foreach ($buttons as $button) {

  if(is_array($button))
  {
    echo'<div class="sh_dropdown" onclick="">
         <div class="sh_dropdown_btn sh_btn_big">'.$button[0].'</div>
         <div class="sh_dropdownmenu">';

    foreach ($button as  $key => $link) {
      if($key < 1) continue;
      echo'<a href="' + $links[i] + '">'.$link.'</a>';
    }
    echo'</div>
    </div>';
  } else {
    echo'<div class="sh_button sh_btn_big" onclick="">
      '.$button.'
    </div>';
  }
  i++;
}

echo'<div class="sh_text">';

// etc.
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
