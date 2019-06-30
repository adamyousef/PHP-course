<!DOCTYPE html>
<html lang="de">

	<head>
	
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Tolle Webseite</title>
		
		<style>
			td img {width:30px;}
		</style>
		
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
	$html .= '<td>'.$xml->Match[0]->Team1->TeamName.'</td>';
	$html .= '<td><img src="'.$xml->Match[0]->Team1->TeamIconUrl.'" /></td>';
	$html .= '<td>:</td>';
	$html .= '<td><img src="'.$xml->Match[0]->Team2->TeamIconUrl.'" /></td>';
	$html .= '<td>'.$xml->Match[0]->Team2->TeamName.'</td>';
	$html .= '<td>'.$xml->Match[0]->MatchResults->MatchResult[1]->PointsTeam1.' : '.$xml->Match[0]->MatchResults->MatchResult[1]->PointsTeam2.'</td>';
	$html .= '</tr>';

	$html .= '<tr>';
	$html .= '<td>'.$xml->Match[1]->Team1->TeamName.'</td>';
	$html .= '<td><img src="'.$xml->Match[1]->Team1->TeamIconUrl.'" /></td>';
	$html .= '<td>:</td>';
	$html .= '<td><img src="'.$xml->Match[1]->Team2->TeamIconUrl.'" /></td>';
	$html .= '<td>'.$xml->Match[1]->Team2->TeamName.'</td>';
	$html .= '<td>'.$xml->Match[1]->MatchResults->MatchResult[1]->PointsTeam1.' : '.$xml->Match[0]->MatchResults->MatchResult[1]->PointsTeam2.'</td>';
	$html .= '</tr>';

	$html .= '</table>';
	
	echo $html;
	
	echo '<hr/>';
	
	$html = '<table border="1"';
	foreach($xml->Match as $value){
		$html .= '<tr>';
		$html .= '<td>'.$value->Team1->TeamName.'</td>';
		$html .= '<td><img src="'.$value->Team1->TeamIconUrl.'" /></td>';
		$html .= '<td>:</td>';
		$html .= '<td><img src="'.$value->Team2->TeamIconUrl.'" /></td>';
		$html .= '<td>'.$value->Team2->TeamName.'</td>';
		$html .= '<td>'.$value->MatchResults->MatchResult[1]->PointsTeam1.' : '.$value->MatchResults->MatchResult[1]->PointsTeam2.'</td>';
		$html .= '</tr>';
	}
	$html .= '</table>';
	echo $html;
	
	
	
?>		
		
		
		
	</body>
	 

</html>