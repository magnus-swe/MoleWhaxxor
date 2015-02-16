
<?php $title='MoleWhaxxor!'; include(__DIR__ . '/header.php'); ?>

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

</div>

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

</body>
</html>
