<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Die Beschreibung im Suchergebnis einer Suchmaschine ca.140 Zeichen" />
		<meta name="keywords" content="HTML, Grundgerüst, Einstieg in HTML max ca. 10" />
		
		<title>Tolle Webseite</title>
	
		<style></style>
	
	</head>

	<body>
	
		<h2>mySql</h2>
		
		<?php
		
			$connection = 'localhost';
			$user       = 'root';
			$password   = '';
			$database   = 'northwind';
			
			$link = mysqli_connect($connection, $user, $password, $database);
			mysqli_set_charset($link, 'utf8');
			
			$anfrage = "
				SELECT 
				suppliers.CompanyName,
				products.ProductName
				FROM products
				JOIN suppliers ON suppliers.SupplierID = products.SupplierID			
			";
			$ergebnis = mysqli_query($link, $anfrage);
			
			$html = '<table border="1">';
			$html .= '<tr><td>Lieferfirma</td><td>Produkt</td></tr>';
			while( $datensatz = mysqli_fetch_assoc($ergebnis) ){
				$html .= '<tr>';
				$html .= '<td>'.$datensatz['CompanyName'].'</td>';
				$html .= '<td>'.$datensatz['ProductName'].'</td>';
				$html .= '</tr>';
			}
			$html .= '</table>';
			echo $html.'<br/><br/>';
			
			
			$anfrage = "
				SELECT
				products.ProductName,
				categories.CategoryName
				FROM products
				JOIN categories ON categories.CategoryID = products.CategoryID
			";
			$ergebnis = mysqli_query($link, $anfrage);
			
			$html = '<table border="1">';
			$html .= '<tr><td>Kategorie</td><td>Produkt</td></tr>';
			while( $datensatz = mysqli_fetch_assoc($ergebnis) ){
				$html .= '<tr>';
				$html .= '<td>'.$datensatz['CategoryName'].'</td>';
				$html .= '<td>'.$datensatz['ProductName'].'</td>';
				$html .= '</tr>';
			}
			$html .= '</table>';
			echo $html.'<br/><br/>';
			
			
			$anfrage = "
				SELECT
				DISTINCT employees.EmployeeID,
				employees.FirstName AS vorname,
				employees.LastName AS nachname,
				region.RegionDescription AS region
				FROM employees
				JOIN employeeterritories ON employeeterritories.EmployeeID = employees.EmployeeID
				JOIN territories ON territories.TerritoryID = employeeterritories.TerritoryID
				JOIN region ON region.RegionID = territories.RegionID				
			";
			$ergebnis = mysqli_query($link, $anfrage);
			
			$html = '<table border="1">';
			$html .= '<tr><td>Vorname</td><td>Nachname</td><td>Region</td></tr>';
			while( $datensatz = mysqli_fetch_assoc($ergebnis) ){
				$html .= '<tr>';
				$html .= '<td>'.$datensatz['vorname'].'</td>';
				$html .= '<td>'.$datensatz['nachname'].'</td>';
				$html .= '<td>'.$datensatz['region'].'</td>';
				$html .= '</tr>';
			}
			$html .= '</table>';
			echo $html.'<br/><br/>';			
			
			mysqli_close($link);
			
		
		?>
		
	
	</body>

</html>