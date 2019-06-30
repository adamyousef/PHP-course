<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Bundesliga Tabelle</title>
    <style>
      table {background:#eee}
      table tr td {border:1px solid #000}
      table tr:nth-child(2) td:nth-child(1),
      table tr:nth-child(3) td:nth-child(1),
      table tr:nth-child(4) td:nth-child(1),
      table tr:nth-child(5) td:nth-child(1) {
        background:#009000;
      }
      table tr:nth-child(6) td:nth-child(1) {
        background:#31b0d5;
      }
      table tr:nth-child(7) td:nth-child(1) {
        background:#85d0e7;
      }
      table tr:nth-child(17) td:nth-child(1) {
        background:#f0ad4e;
      }
      table tr:nth-child(18) td:nth-child(1),
      table tr:nth-child(19) td:nth-child(1) {
        background:#d9534f;
      }
    </style>
  </head>
  <body>
    <h2>Bundesliga Tabelle - Spieltag 12</h2>
    <?php
      $file = 'bundesliga1.xml';

      if(file_exists($file)) {
        $xml = simplexml_load_file($file);
      } else {
        exit('Konnte Datei nicht öffnen.');
      }

      $table = '';
      foreach($xml as $value) {
          $table .= "<tr><td>$value->platz</td>";
          $table .= "<td>$value->tendenz</td>";
          $table .= "<td>$value->name</td>";
          $table .= "<td>$value->gespielt</td>";
          $table .= "<td>$value->punkte</td>";
          $table .= "<td>$value->siege</td>";
          $table .= "<td>$value->unentschieden</td>";
          $table .= "<td>$value->niederlagen</td>";
          $table .= "<td>$value->tore:$value->gegentore</td>";
          $table .= "<td>$value->differenz</td></tr>";
      }
     ?>
     <table>
       <tr>
         <th></th>
         <th></th>
         <th></th>
         <th>Spiele</th>
         <th>Punkte</th>
         <th>Siege</th>
         <th>Unentschieden</th>
         <th>Niederlagen</th>
         <th>Tore</th>
         <th>Differenz</th>
        </tr>
       <?php echo $table; ?>
     </table>
  </body>
</html>
