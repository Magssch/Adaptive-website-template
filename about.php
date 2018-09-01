<?php require "main.php"; ?>

<?php

if($_GET['p'] == "webpage")

{

?>

<div class="bg_img about1">
  <div class="caption">
    <span class="border">Nettside</span>
  </div>
</div>
<div class="mid_top"></div>
<div class="mid">
  <p>Nettsiden er et lite prosjekt jeg har jobbet med på siden i løpet av ferier. Jeg drev en god del med webutvikling for rundt 9 år siden og har i siden det oppdatert meg på blant annet CSS3 og har derfor ekseperimentert mye med dette på nettsiden.</p>
  <p>Siden benytter også litt php, for eksempel for å synkronisere lenkene i "sidebaren" på mobilen med headeren på pc.</p>
</div>
<div class="mid_bot"></div>
<div class="bg_img about2">
  <!--  <div class="caption">
      <span class="border">Transcendental Cymatic Luminaries</span>
    </div>-->

  <span class="cite">Hadrian's Wall - England</span>
</div>
<div class="mid_top"></div>
<div class="mid">
<p>Siden kan skaleres dynamisk til alle skjermstørrelser og er utviklet spesifikt med hensyn til dette. Målet mitt har vært at man kan ta bokstavelig talt en hvilken som helst skjermstørrelse, både stor og liten og alt i mellom, og kunne vise nettsiden fra sin beste side uten å måtte gå til noen "mobilspesifik" nettside eller lignende.</p>
<p>Mye av denne tilpassingen gjøes vha. CSS3 og media-queries, men jeg har i tillegg måttet benytte en del jQuery for funksjoner som ikke kan gjøres direkte i CSS. På siden "Kontakt meg" kan du også se en god del Javascript og CSS3 bli brukt for å skape en fancy presentasjon av kontaktinfo og lenker til sosiale media.
</p>
<p>Videre har jeg valgt å fylle på med enda litt mer fylltekst/tullelatin, for å få plass til flere bilder.</p>
</div>
<div class="mid_bot"></div>
<div class="bg_img about3">
<!--  <div class="caption">
    <span class="border">Symmetry</span>
  </div>-->
  <span class="cite">Charles Bridge - Praha</span>
</div>
<div class="mid_top"></div>
<div class="mid">
<p>Cras finibus tempor lectus, vel consequat magna viverra interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non eros mollis, scelerisque tellus eu, ultricies ex. In vitae elit nunc. In efficitur efficitur tellus eu volutpat. Nam posuere suscipit felis, sit amet tempus diam sagittis sed. Duis porta, tortor nec dignissim imperdiet, sem velit suscipit lacus, at sollicitudin nisi lacus in lectus. Ut erat leo, imperdiet id lacinia vitae, pulvinar et purus. Maecenas eu ultrices ex. Aliquam elit massa, lacinia a fermentum sed, tempus vitae sem. Nam sit amet mauris egestas, lobortis diam eget, feugiat tellus.
</p>
<p>Vestibulum ante mi, condimentum at ex sed, gravida vehicula metus. Nunc congue sem quis massa blandit ultrices. Fusce suscipit diam ante, sed viverra ligula volutpat sit amet. Nunc eget finibus lorem, faucibus sollicitudin purus. Quisque ullamcorper in nulla et malesuada. Nullam imperdiet ligula ac arcu feugiat, non elementum dolor finibus. Vestibulum vulputate, eros sit amet sodales pulvinar, enim ligula dapibus felis, vel lacinia est tellus ut eros. Mauris sodales eros eu varius porttitor. Vivamus vel fermentum est. Duis ullamcorper fermentum tellus vitae tincidunt. Cras ultricies justo sed diam scelerisque dignissim. Vestibulum dignissim lobortis sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
</p>
<p>Praesent porta sem a neque facilisis vehicula. Phasellus lacinia at mi id euismod. Nam eu semper libero. Morbi mi est, elementum in dignissim vel, sodales quis velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus sed tincidunt enim. Vestibulum sit amet ante tortor. Fusce id erat augue. Cras non ipsum tristique, sodales orci non, aliquam justo. Morbi ut suscipit nisi. Quisque placerat quis urna quis iaculis.
</p>
<p>Quisque vehicula sodales orci elementum ullamcorper. Praesent eu pharetra mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id nibh molestie, tristique dui ac, efficitur sapien. Nullam at nulla et tellus auctor accumsan. Curabitur fringilla, justo in hendrerit facilisis, metus massa consequat magna, vitae vestibulum urna mi a sem. Pellentesque maximus eu lectus eget luctus. Praesent fringilla et mauris nec varius.
</p>
</div>
<div class="mid_bot"></div>

<?php

} elseif($_GET['p'] == "teknostart") {

  ?>

  <div class="bg_img wih1">
    <div class="caption">
      <span class="border">Teknostart 2017</span>
    </div>
    <span class="cite">"Winter is here"</span>
  </div>
  <div class="mid_top"></div>
  <div class="mid">
  <p>Sammen med to andre medelever, Sindre Sivertsen og Hans Kristian Sande, var jeg med og lagde prosjektet som ble stemt frem til 1. plass under kåring av prosjekter på Teknostart i 2017.</p>
  <p>Teknostart er et oppstartsprosjekt som alle nye studenter på ingeniørlinjene på NTNU går gjennom, og datateknologi har som en del av dette et prosjekt hvor man lager et dataspill i Scratch.</p>
  <p>Spillet ble laget i løpet av noen timer underveis i fadderperioden, og vant kåringen på slutten med god margin.<br/> <br/></p>
  <p><center>Link til spillet: <a href="https://scratch.mit.edu/projects/171837319/" target="_blank">Winter is here</a> (kan spilles i nettleser, men krever Flash)

  <br/><br/><img src="img/winterishere2.jpg" style="width: 100%;" /></center></p>
  <p>Målet i spillet, som er basert på TV-serien Game of Thrones, er å overleve lengst mulig. Man styrer karakteren Jon Snow og skal forhindre fiendene fra å ta seg opp langs muren, i tillegg til at man må passe på døren på bunnen. Jon Snow får også god hjelp av mange andre kjente fjes fra TV-serien, du kjenner kanskje igjen noen av de ovenfor?</p>

    </div>
  <div class="mid_bot"></div>
  <!--<div class="bg_img wih2"></div>-->
  <?php

} elseif($_GET['p'] == "old") {

    ?>

    <div class="bg_img old1">
      <div class="caption">
        <span class="border">Eldre prosjekter</span>
      </div>
      <span class="cite">Mal for et spillnettsted</span>
    </div>
    <div class="mid_top"></div>
    <div class="mid">
      <p>Som selvlært 12-åring begynte jeg å få interesse for og programmere nettsider fra en tidlig alder. Her har jeg lastet opp et av disse eldre prosjektene, laget en gang mellom 2011-2012.</p>
      <p> Denne ble laget på oppdrag av en venn som drev en server for et nettspill. Den er bevisst designet med et simpelt design som skal minne om 90-tallet og "hacker"-miljø.</p>
      <p><center><a href="nettsidemal/index.html" target="_blank">Link til HTML-malen</a><br/><br/>(Fungerer muligens ikke i alle nettlesere, den er <i>veldig</i> rotete kodet)
    </div>
    <div class="mid_bot"></div>
    <!--<div class="bg_img wih2"></div>-->
    <?php
}


 ?>
<?php require "footer.php"; ?>
