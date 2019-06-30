<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Bundesliga Tabelle</title>
    <style>
      table {background:#eee;}
      table tr td, table tr th {border:1px solid #000;}
	  .img {width:30px;}
    </style>
  </head>
  <body>
    <h2>Bundesliga Tabelle - Spieltag 12</h2>
    <?php
      $file = 'bundesliga2.xml';

      if(file_exists($file)) {
        $xml = simplexml_load_file($file);
      } else {
        exit('Konnte Datei nicht öffnen.');
      }

      $table = '';
      foreach($xml as $value) {
          $table .= "<tr><td style=\"background:#{$value->platz['farbe']};\">$value->platz</td>";
          $table .= "<td><img class=\"img\" src=\"images/$value->tendenz\" /></td>";
          $table .= "<td><img src=\"images/$value->logo\" /></td>";
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
