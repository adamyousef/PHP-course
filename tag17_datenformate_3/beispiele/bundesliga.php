<!DOCTYPE html>
<html lang="de">

	<head>
	
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Tolle Webseite</title>
		
	</head>
	
	<body>
		
		<h1 align="center">Bundesliga</h1>
		
		
<?php
	
	$options = [
		'http'=> [
			'method' => "GET",
			'header' => "Accept-language: de\r\n".
						"Accept:application/xml"
		]
	];

	$context = stream_context_create($options);
	$jahr=2018;
	$mon=8;
	
	$html='<h1 align="center">'.$jahr.'/'.$mon.'</h1>';
		
	$text = file_get_contents("http://www.openligadb.de/api/getmatchdata/bl1/$jahr/$mon", false, $context);
	$xml = simplexml_load_string($text);

	
		//echo '<h3>'.$xml->Match[0]->Goals->Goal[1]->GoalGetterName.'</h3>';
		//echo '<h3>'.$xml->Match[0]->MatchResults->MatchResult[1]->PointsTeam2.'</h3>';

	$html.='<table border="1" align="center">';
	foreach($xml->Match as $key=>$value)
	{
		$html .= '<tr align="center">';
		$html .= '<td>'.$value->Team1->TeamName.'</td>';
		$html .= '<td><img src="'.$value->Team1->TeamIconUrl.'" alt="" height="25" width="25"></td>';
		$html .= '<td>'.$value->MatchResults->MatchResult[1]->PointsTeam1.':'.$value->MatchResults->MatchResult[1]->PointsTeam2.'</td>';
		$html .= '<td><img src="'.$value->Team2->TeamIconUrl.'" alt="" height="25" width="25"></td>';
		$html .= '<td>'.$value->Team2->TeamName.'</td>';
		$html .= '</tr>';
	}
		$html .= '</table>'; 
		echo $html;
	
?>		
		
		
		
	</body>
	 

</html>