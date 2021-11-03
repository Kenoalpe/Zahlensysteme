<?php  

$eingabe = $_POST["eingabe"];
$von = $_POST["von"];
$nach = $_POST["nach"];

function umrechnen ($e,$v,$n){

	switch ($v) {
		case 'binar':
			switch ($n) {
				case 'dezimal':
					
					echo bindez($e);

					break;

				case 'hexadezimal':
					
					$dez1 = bindez($e);

					dezhex($dez1,16);

					break;
				
				case 'duodezimal':

					$dez2 = bindez($e);

					dezhex($dez2,12);

					break;

				default:
					echo "<- Bitte wählen sie das Zahlensystem aus";
					break;
			}
			break;

		case 'dezimal':
			
			switch ($n) {
				case 'binar':
					
					dezhex($e,2);

					break;
				
				case 'hexadezimal':
					
					dezhex($e,16);

					break;

				case 'duodezimal':
					
					dezhex($e,12);

					break;

				default:
					echo "<- Bitte wählen sie das Zahlensystem aus";
					break;
			}

			break;

		case 'duodezimal':
			switch ($n) {
				case 'binar':
					
				$dez5 = hexdez($e,12);

				dezhex($dez5,2);

					break;
				
				case 'dezimal':

				echo hexdez($e,12);
					
					break;

				case 'hexadezimal':

				$dez6 = hexdez($e,12);

				dezhex($dez6,16);
				
					break;

				default:

				echo "<- Bitte wählen sie das Zahlensystem aus";
					
					break;
			}
			break;

		case 'hexadezimal':

			switch ($n) {
				case 'binar':
					
					$dez3 = hexdez($e,16);

					dezhex($dez3,2);

					break;
				
				case 'dezimal':
					
					echo hexdez($e,16);

					break;

				case 'duodezimal':
					
					$dez4 = hexdez($e,16);

					dezhex($dez4,12);

					break;

				default:
					echo "<- Bitte wählen sie das Zahlensystem aus";
					break;
			}
			
			break;
	}

}

function hexdez($hex,$ind){

	$dezh = 0;

	$zahler2 = 0;

	$hex1= chunk_split("$hex",1," ");

	$arrayhex = explode(" ", $hex1);

	$laenge1 = count($arrayhex);

	$laenge1 = $laenge1-2;

	for ($i=$laenge1; $i >= 0; $i--) { 

		switch ($arrayhex[$i]) {

			case "a":
			case "A":
				$arrayhex[$i] = 10;
				break;

			case "b":
			case "B":
				$arrayhex[$i] = 11;
				break;

			case "c":
			case "C":
				$arrayhex[$i] = 12;
				break;

			case "d":
			case "D":
				$arrayhex[$i] = 13;
				break;

			case "e":
			case "E":
				$arrayhex[$i] = 14;
				break;

			case "f":
			case "F":
				$arrayhex[$i] = 15;
				break;
			
			default:
				$arrayhex[$i] = $arrayhex[$i];
				break;
		}

		$dezh = $dezh + $arrayhex[$i] * pow($ind, $zahler2);

		$zahler2++;

	}

	return $dezh;

}

function bindez($bin){

	$dez = 0;
	$zahler = 0;

	$bin1 = chunk_split("$bin",1," "); 

	$arraybin = explode(" ",$bin1); 

	$laenge = count($arraybin);

	$laenge = $laenge-2;

	for($i=$laenge;$i>=0;$i--){

		if($arraybin[$i] == 1){
			$dez = $dez + pow(2,$zahler);
		}

	$zahler++;

	}

	return $dez;

}

function dezhex($dez,$indikatior){

	$hex = array();
	$zahler = 0;

	while($dez > 1){

		$hex[$zahler]= $dez%$indikatior;
		$dez = $dez/$indikatior;

		$zahler++;

	}

	$zahler--;

	for ($i=$zahler; $i>=0; $i--){

		switch($hex[$i]){

			case 10:
			$hex[$i] = "A";
			break;
			case 11:
			$hex[$i] = "B";
			break;
			case 12:
			$hex[$i] = "C";
			break;
			case 13:
			$hex[$i] = "D";
			break;
			case 14:
			$hex[$i] = "E";
			break;
			case 15:
			$hex[$i] = "F";
			break;

		}
	echo "$hex[$i]";
	}

}

?>