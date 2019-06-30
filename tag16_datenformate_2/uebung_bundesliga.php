<!DOCTYPE html>
<html lang="de">

	<head>
	
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Tolle Webseite</title>
		
	</head>
	
	<body>
		
		<h2>Bundesliga</h2>
		
		
<?php
	
	$options = [
		'http'=> [
			'method' => "GET",
			'header' => "Accept-language: de\r\n".
						"Accept:application/xml"
		]
	];

	$context = stream_context_create($options);
	
	$text = file_get_contents("http://www.openligadb.de/api/getmatchdata/bl1/2016/8", false, $context);
	$xml = simplexml_load_string($text);

	
	echo '<h3>'.$xml->Match[0]->Goals->Goal[0]->GoalGetterName.'</h3>';
	
	 //$xml->Match[0]->Team1....
	 //$xml->Match[0]->MatchResults[]....


	
	$html = '<table border="1">';
	
	$html .= '<tr>';
	$html .= '<td>Hamburger SV</td>';
	$html .= '<td>BILD</td>';
	$html .= '<td>:</td>';
	$html .= '<td>BILD</td>';
	$html .= '<td>Eintracht Frankfurt</td>';
	$html .= '<td>0 : 3</td>';
	$html .= '</tr>';

	$html .= '<tr>';
	$html .= '<td>Bayer 04 Leverkusen</td>';
	$html .= '<td>BILD</td>';
	$html .= '<td>:</td>';
	$html .= '<td>BILD</td>';
	$html .= '<td>TSG 1899 Hoffenheim</td>';
	$html .= '<td>0 : 3</td>';
	$html .= '</tr>';

	$html .= '</table>';
	
	echo $html;
	
?>		
		
		
		
	</body>
	 

</html>