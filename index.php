<?php
///////////////////////////////////////////////
// Semesterproject - ECIN                     //
// Fachbereich Medien FH-Kiel - 4. Semester  //
// Beschreibung : Hauotseite                 //
// Ersteller    : Sven Krumbeck              //
// Stand        : 22.05.19                   //
// Version      : 1.0                        //
///////////////////////////////////////////////

//Session Erstellen
session_start();

//Einbinden der Config Dateien
include './config/config.php';

echo "<head>\n";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/style.css\">\n";
echo "<meta charset=\"UTF-8\">\n";
echo "</head>\n";
echo "<div id=\"wrapper\">\n";
echo "    <header>\n";
          //Einbinden des Headers
          include './core/header.php';
echo "    </header>\n";
echo "    <div id=\"mehrspaltig\">\n";
echo "        <nav>\n";
              //Einbinden der Sitebar
              include './core/sidebar.php';
echo "        </nav>\n";
echo "        <article>";
              //Einbinden des Content Bereiches
              include './core/content.php';
echo "        </article>\n";
echo "        <aside>";
              include './core/sidebar2.php';
echo "        </aside>\n";
echo "    </div>\n";
echo "    <footer>\n";
          //Einbinden des Footers
          include './core/footer.php';
echo "    </footer>\n";
echo "</div>";


?>
