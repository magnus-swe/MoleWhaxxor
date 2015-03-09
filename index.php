
<?php $title='MoleWhaxxor!'; include(__DIR__ . '/header.php'); ?>

<h1>MoleWhaxxor Game</h1>

<div id='flash'>

 <table id="scoretable">
  <!-- Table data -->
  <tr class="statusandscoretr">
    <td class="scoretd">  <label id="score">Score: 0</label> </td>
    <td class="infotd">   <label id="info">Whack the Moles! and set new highscores! </label> </td>
    <td class="statustd"> <label id="status">Loading WhaxxorMoles Game...</label> </td>
  </tr>
 </table>

 <table id="moletable">
  <!-- Data for row1 column 1-3 -->
  <tr class="moletr">
    <td class="moletd"> <img class="center" id="col1row1" alt="Mole" src="img/mole.png" style="visibility: hidden;"> </td>
    <td class="moletd"> <img class="center" id="col2row1" alt="Mole" src="img/mole.png" style="visibility: hidden;"> </td>
    <td class="moletd"> <img class="center" id="col3row1" alt="Mole" src="img/mole.png" style="visibility: hidden;"> </td>
  </tr>

  <!-- Data for row2 column 1-3 -->
  <tr class="moletr">
    <td class="moletd"> <img class="center" id="col1row2" alt="Mole" src="img/mole.png" style="visibility: hidden;"> </td>

    <!-- Image and restart button. Both are hidden -->
    <td class="moletd">
      <img class="restartbutton" id="col2row2" alt="Mole" src="img/mole.png" style="visibility: hidden;">
      <input class="center" id="restart" type="image" alt="Restart" src="img/mole_restart.png" style="visibility: hidden;">
    </td>

    <td class="moletd"> <img class="center" id="col3row2" alt="Mole" src="img/mole.png" style="visibility: hidden;"> </td>
  </tr>

  <!-- Data for row3 column 1-3 -->
  <tr class="moletr">
    <td class="moletd"> <img class="center" id="col1row3" alt="Mole" src="img/mole.png" style="visibility: hidden;"> </td>
    <td class="moletd"> <img class="center" id="col2row3" alt="Mole" src="img/mole.png" style="visibility: hidden;"> </td>
    <td class="moletd"> <img class="center" id="col3row3" alt="Mole" src="img/mole.png" style="visibility: hidden;"> </td>
  </tr>
 </table>

</div> <!-- Flash end -->

 <!-- A footer -->
 <table id="footertable">
  <!-- Table data -->
  <tr>
    <td> <label id="authorid">Game author: Magnus Loef. Copyright (C) All rights reserved. Game sounds and the mole images are copyright to their respective owners.</label> </td>
  </tr>
 </table>


<!-- Load moleclicked sound -->
<audio class="clickSound" preload="none">
   <source src="sound/moleclicked.mp3" type="audio/mp3">
</audio>

<!-- Load the game music -->
<audio class="gameMusic" controls preload="none" loop>
   <source src="sound/gamemusic1.mp3" type="audio/mp3">
</audio>

<!-- Load end game music -->
<audio class="endGameMusic" controls preload="none" loop>
   <source src="sound/gamemusic2.mp3" type="audio/mp3">
</audio>


<!-- Information about the game -->
<div id="information">

  <div id="idea">
    <h2><b>Programidè</b></h2>
    <p>
      Spelet MoleWhaxxor går ut på att klubba mullvadar som dyker upp ur 6 olika hål på ett randomiserat sätt.
      Spelaren använder musen och klickar på mullvadarna för att få poäng.
      Ju fler mullvadar spelaren klubbar desto fortare poppar de upp och spelet blir svårare och svårare.
      För varje mullvad som klubbas får spelaren 1 poäng.
      När antalet klubbade mullvadar är 20 så får spelaren 10 bonuspoäng och popup-hastigheten för
      mullvadarna halveras. Om man missar 5 mullvadar så avslutas spelet och en omstartsknapp syns.
      Man får ett minuspoäng för varje missad mullvad.
      I spelet finns spelmusik som spelas när spelet är igång och en annan musik hörs när spelet avslutas.
      Spelet kan spelas av de flesta personer i alla åldrar.
    </p>
  </div>

  <div id="install">
    <h2><b>Installation</b></h2>
       På <a href="https://github.com/magnus-swe/MoleWhaxxor.git" target="_blank">Github</a> finns hela kodprojektet.
       <ol class="install_info">
         <li>Klona projektet eller ladda ner det till din webbserver.</li>
         <li>Följ stegen i README.md på Github.</li>
       </ol>
  </div>

  <div id="future">
    <h2><b>Framtida uppdateringar</b></h2>
      <ol class="future">
        <li>Flera mullvadar åt gången.</li>
        <li>En riktig klubba att klubba med.</li>
        <li>Fler bonusnivåer.</li>
        <li>Bättre ljud vid klubbning.</li>
      </ol>
  </div>

  <div id="configure">
    <h2><b>Konfigurera</b></h2>
    <p>
      Spelet har ett konfigurations- alternativ vilket sätter initial spelhastighet.
      Det kan ställas in genom att ändra högst upp i filen main.js där det står molePopupSpeed.
      Det är bara att ladda hem projektet från Github och lägga upp det på sin webbsida.
      Alla filer som behövs finns med i projektet och spelet är inställt på medelhastigheten.
    </p>
  </div>

</div> <!-- Information end -->


<div id="competitor_header">
  <br>
  <h2><b>Liknande Produkter</b></h2>
</div>

<div id="competitor_info">

  <div class="competitors"><h2><a href="http://www.addictinggames.com/action-games/whackamole.jsp" target="_blank">GameBrew Whack-a-mole</a></h2>
  <p>
     GameBrew Entertainments Whack-A-Mole är ett flashbaserat WhackaMole spel.
     Detta spel är bra gjort men har lite väl mycket ljud för min smak.
     De lägger ut flera mullvadar åt gången så det borde jag lägga till i mitt spel i nästa uppdatering.
  </p>
  </div>

  <div class="competitors"><h2><a href="http://www.ictgames.com/whackAMole/" target="_blank">ICT Games Whack-A-mole</a></h2>
  <p>
    ICT Games Whack-A-Mole spel är ett flashbaserat spel som har ett unikt tema.
    Man ska klubba mullvadar med poäng på i ordningsföljd, först 1, sen 2 och så vidare.
    Det verkar vara riktat till barn som vill lära sig siffror och räkna.
    Spelet känns välgjort men kräver flash för att spelas vilket jag tycker verkar onödigt.
    Här har mitt spel en god chans att nå ut till fler personer som vill spela ett vanligt whack-a-mole spel.
  </p>
  </div>

  <div class="competitors"><h2><a href="http://www.funnygames.se/spel/whack_a_mole_3.html" target="_blank">FunnyGames Whack-a-mole</a></h2>
  <p>
    Även detta spel är gjort i flash. Det har fin grafik och bra ljud men känns aningen segt när man klubbar mullvadarna.
    Spelet är mycket välgjort men har nackdelen att det är gjort i flash och hade varit bättre om klubbningen varit snabbare.
    Samtliga av dessa spel använder flash vilket gör att deras spel inte kan bli lika snabba som mitt spel.
  </p>
  </div>

</div>

</body>
</html>
