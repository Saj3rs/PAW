<div id="Calc" class="content">
<h3>Prosty kalkulator</h2>

<form class="pure-form pure-form-stacked " action="{$root_path}/app/calc.php" method="post">
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