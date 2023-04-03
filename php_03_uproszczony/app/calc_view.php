<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>
<?php //side menu
include _ROOT_PATH.'/templates/side_menu.php';
?>
<div id="Calc" class="content">
<h3>Prosty kalkulator</h2>

<form class="pure-form pure-form-stacked " action="<?php print(_APP_ROOT);?>/app/calc.php" method="post">
	<fieldset>
		<label for="x">Pierwsza liczba</label>
		<input id="x" type="text" placeholder="wartość x" name="x" value="<?php out($form['x']); ?>">

		<label for="op">Operacja</label>
		<select id="op" name="op">
			<option value="plus">(+) dodaj</option>
			<option value="minus">(-) odejmij </option>
			<option value="times">(*) pomnóż</option>
			<option value="div">(/) podziel</option>
		</select>
					
		<label for="y">Druga liczba</label>
		<input id="y" type="text" placeholder="wartość y" name="y" value="<?php out($form['y']); ?>">

	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages ">

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
	echo '<h4>Wystąpiły błędy: </h4>';
	echo '<ol class="err">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php
//wyświeltenie listy informacji, jeśli istnieją
if (isset($infos)) {
	if (count ( $infos ) > 0) {
	echo '<h4>Informacje: </h4>';
	echo '<ol class="inf">';
		foreach ( $infos as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
	<h4>Wynik</h4>
	<p class="res">
<?php print($result); ?>
	</p>
<?php } ?>


</div>
</div>
<div class="content" id="CCalc">
    <h3>Kalkulator Kredytowy</h2>
<form class="pure-form pure-form-stacked" action="<?php print(_APP_URL);?>/app/calc_1.php" method="post">
	<label for="id_amm">Kwota: </label>
	<input id="id_amm" type="text" name="amm" value="<?php out($amm) ?>" /><br />
	<label for="id_y">Ilość Lat: </label>
	<input id="id_y" type="text" name="ye" value="<?php out($ye); ?>" /><br />
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
if (isset($messages2)) {
	if (count ( $messages2 ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages2 as $key => $msg2 ) {
			echo '<li>'.$msg2.'</li>';
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

</div>
<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>