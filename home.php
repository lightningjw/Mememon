<?php
  session_start();

 ?>
<html>
  <head>
    <title>Mememon</title>
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
    </script>
    <script src = "home.js">
    </script>
    <link href = "mememon.css" type = "text/css" rel = "stylesheet" />
    <link href = "home.css" type = "text/css" rel = "stylesheet" />
  </head>

  <body class = "background">
    <div class = "mainpage">


      <table>

        <?php

        for ($i=0; $i < 37; $i++) {

          echo "<tr>";

          for ($e=0; $e < 81; $e++) {
            if ($_SESSION['currentx'] == $e && $_SESSION['currenty'] == $i) {
              echo "<td class=\"ground redhat\"></td>";
            }
            else {
              echo "<td class=\"ground\"></td>";
            }
          }

          echo "</tr>";
        }



         ?>


      </table>

      <div id = "gamealerts">

        <form action="heal.php" method="post">
          <button id = "battle" class="hidden"> Heal </button>
        </form>

        <form action="redirect.php" method="post">
          <select name="location" class="none">
            <option class="hidden" value="10"></option>
          </select>
          <button id = "battle" class="hidden"> Exit Home </button>
        </form>


        <?php
          echo $_SESSION['gamechat'];
        ?>

      </div>

      <p> <button id = "signout" class = "title"> Sign Out </button> </p>


    </div>
  </body>
</html>
