<?php require_once dirname(__FILE__) .'/../config.php';
include _ROOT_PATH.'/app/security/check.php';?>

<!DOCTYPE HTML>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator Kredytowy</title>
</head>
<body>
<div>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>
<form class="pure-form pure-form-aligned" action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_amm">Kwota: </label>
	<input id="id_amm" type="text" name="amm" value="<?php out($amm) ?>" /><br />
	<label for="id_y">Ilość Lat: </label>
	<input id="id_y" type="text" name="y" value="<?php out($y); ?>" /><br />
	<label for="id_interest">Oprocentowanie: </label>
	<select name="interest">
        <option value="6">6%</option>
		<option value="8">8%</option>
		<option value="9">9%</option>
		<option value="10">10%</option>
		<option value="12">12%</option>
        <option value="15">15%</option>
        <option value="18">18%</option>
	</select><br />
	<input class="pure-button" type="submit" value="Oblicz" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($full)&&isset($monthly)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; min-width:300px; width:50%;">
<?php echo 'Pełna kwota do spłacenia: '.$full."<br>"; ?>
<?php echo 'Miesięczna rata: '.$monthly; ?>
</div>
<?php } ?>

</body>
</html>