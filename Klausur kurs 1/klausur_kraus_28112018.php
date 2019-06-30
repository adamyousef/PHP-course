<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Klausur 28.11.2018 - Flugplanung</title>
    <style>
	body {
			font-family:calibri, Verdana, Arial, sans-serif;
			font-size:100%;
	}
	h1,h2,h3,h4 {color:#0f7b9a}
	table tr td {border:1px solid #000}
    </style>
  </head>
  <body>
    <h2> </h2>
    <?php			//existenz prüfung
      $file = 'klausur_kraus_28112018.xml';		

      if(file_exists($file)) {
        $xml = simplexml_load_file($file);
      } else {
        exit('Datei existiert nicht.');
      }

      $abflug = '';

      foreach($xml->abflug->flug as $value) {
        $abflug .= "<tr><td>$value->flug_nummer</td>"; //tabelle auf 
        $abflug .= "<td>$value->ziel</td>";
		$abflug .= "<td>$value->geplant</td>";
		$abflug .= "<td>$value->erwartet</td>";
		$abflug .= "<td>$value->gate</td>";
		$abflug .= "<td>$value->check_in</td>";
		$abflug .= "<td>$value->bemerkung</td></tr>";   //tabelle zu
      }
	  
	  $ankunft = ''; 
      foreach($xml->ankunft->flug as $value) {
        $ankunft .= "<tr><td>$value->flug_nummer</td>"; //tabelle auf 
        $ankunft .= "<td>$value->herkunft</td>";
		$ankunft .= "<td>$value->geplant</td>";
		$ankunft .= "<td>$value->erwartet</td>";
		$ankunft .= "<td>$value->ausgang</td>";
		$ankunft .= "<td>$value->bemerkung</td></tr>";   //tabelle zu
      }	 
	 

	  
	  
     ?>
	 <h2> Abflug </h2>
     <table> 			<!-- formlose tabelle für überschriften -->
		<tr>
			<th>Flug-Nr.</th> 
			<th>Nach</th>
			<th>Geplant</th>
			<th>Erwartet</th>
			<th>Gate</th>
			<th>Check-In</th>
			<th>Bemerkung</th>
		</tr>
       <?php echo $abflug; ?>		<!-- aufruf -->
     </table>
	  <h2> Ankunft </h2>
	 <table> 			<!-- formlose tabelle für überschriften -->
		<tr>
			<th>Flug-Nr.</th> 
			<th>aus</th>
			<th>Geplant</th>
			<th>Erwartet</th>
			<th>Ausgang</th>
			<th>Bemerkung</th>
		</tr>
       <?php echo $ankunft; ?>		<!-- aufruf -->
     </table> 
	 
	 
	 
  </body>
</html>
