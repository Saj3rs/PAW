<!doctype html>
<html lang="pl">

{block name=meta}Meta data error{/block}
{block name=head}Head error{/block}
<div style="background-image:url('/PAW/php_06/css/bgd.jpg')">
<div id="layout">

{include file="../templates/side_menu.tpl"}

<div class="content" id="CCalc">
    <h3>Kalkulator Kredytowy</h2>
<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
	<label for="id_amm">Kwota: </label>
	<input id="id_amm" type="text" name="amm" value="{$form->amm}" /><br />
	<label for="id_y">Ilość Lat: </label>
	<input id="id_y" type="text" name="ye" value="{$form->ye}" /><br />
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
{if $mess->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $mess->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $mess->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $mess->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}



{if isset($result->full)&&isset($result->monthly)}
	<h4>Wynik</h4>
	<p class="result">
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




