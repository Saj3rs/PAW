<!doctype html>
<html lang="pl">

{block name=meta}Meta data error{/block}
{block name=head}Head error{/block}
<div style="background-image:url('/PAW/php_04/css/bgd.jpg')">
<div id="layout">

{include file="../templates/side_menu.tpl"}

<div class="content" id="CCalc">
    <h3>Kalkulator Kredytowy</h2>
<form class="pure-form pure-form-stacked" action="http://localhost:8080/PAW/php_04/app/calc_1.php" method="post">
	<label for="id_amm">Kwota: </label>
	<input id="id_amm" type="text" name="amm" value="{$amm}" /><br />
	<label for="id_y">Ilość Lat: </label>
	<input id="id_y" type="text" name="ye" value="{$ye}" /><br />
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

<div class="messages">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($messages2)}
	{if count($messages2) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages2 as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($full)&&isset($monthly)}
	<h4>Wynik</h4>
	<p class="res">
            Pelna kwota:{$full}<br>
            Miesiecznie:{$monthly}
	</p>
{/if}

</div>



</div>
</div>
{include file="../templates/bottom.tpl"}
<script src="http://localhost:8080/PAW/php_04/js/ui.js"></script>
</body>
</html>




