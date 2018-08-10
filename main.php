<?php

define("TITLE", "Magnus Schjølberg");

require "header.php";

// Start header & sidenav links
$buttons = array(

// Define header link labels without dropdown menu.
// First entry is main link.
              array("Prosjekter",
                    "Denne nettsiden",
                    "Winter is Here",
                    "TBD",
                    "TBD"),

// Define header link labels without dropdown menu
              "Min CV", "Kontakt meg"
);

$links = array(

// Define header links without dropdown menu.
// First entry is main link.
              array("#",
                    "about.php?p=webpage",
                    "about.php?p=teknostart",
                    "#",
                    "#"),

// Define header links without dropdown menu
              "cv.php", "contact.php"
);

// end define header links

echo'<div class="sidenav sn_big" id="sidebar">';

$i = 0;
foreach ($buttons as $button) {
  if(is_array($links[$i])) {
    echo'<a href="' . $links[$i][0] . '">';
    echo $button[0];
    echo '</a>';

    foreach($links[$i] as $key => $sublink) {
      if($key <= 0) continue;
      echo'<a href="' . $sublink . '" style="font-size: 0.6em; padding-left:48px">- ';
      echo $button[$key];
      echo '</a>';
    }

  } else {
    echo'<a href="' . $links[$i] . '">';
  /*}/*
  if(is_array($button)) {
    echo $button[0];
    foreach($links[$i] as $sublink) {

    }
  } else {*/
    echo $button;
//  }
  echo'</a>';
  }
  $i++;
}

echo'
</div>


<div class="content">


<div class="header h_big" id="header">
  <div class="logo" style="';
//  if(TITLE.length > 12) echo 'font-size: 30px;';
  echo '" onclick="location.href = \'index.php\'">
    '; echo TITLE; echo'
  </div>
  <div class="sh_divider">
  </div>
';

$i=0;
foreach ($buttons as $button) {

  if(is_array($button))
  {
    echo'<div class="sh_dropdown">
         <div class="sh_dropdown_btn sh_btn_big">'.$button[0].'</div>
         <div class="sh_dropdownmenu">';
    $j=1;
    foreach ($button as  $key => $link) {
      if($key < 1) continue;
      //echo $links[$i][$j];
      echo'<a href="' . $links[$i][$j] . '">'.$link.'</a>';
      $j++;
    }
    echo'</div>
    </div>';
  } else {
    echo'<div class="sh_button sh_btn_big" onclick="location.href = \'' . $links[$i] . '\'">
      '.$button.'
    </div>';
  }
$i++;
}

echo'<div class="sh_text">';

// etc.
$fun = array("God stemning siden 1996",
             "Skrevet i HTML, CSS3, JQuery og PHP",
             "Atom > Eclipse");

$r = rand(0, count($fun)-1);

$q = $fun[$r];

echo $q;

echo '</div>
<div class="sh_menu" id="menu">
  <div class="menubar m_big" id="bar1"></div>
  <div class="menubar m_big" id="bar2"></div>
  <div class="menubar m_big" id="bar3"></div>
</div>
</div>';

 ?>
