{extends file="calc_view.tpl"}
{block name=meta}
<head>
  
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content={$page_description|default:"Opis domyślny"}>
	<title>{$page_title|default:"Tytuł domyślny"}</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">	<link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/style.css">	
<link rel="stylesheet" href="http://localhost:8080/PAW/php_06/css/style.css">
</head>
{/block}

{block name=head}
<body>
<div class="header" id="Intro" style="background-image:url('/PAW/php_06/css/bgd2.jpg')">
	<h1>{$page_title|default:"Tytuł domyślny"}</h1>
</div>
{/block}
    

{block name=noLogin}
<form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

{if $mess->isError()}
<div class="messages err">
	<ol>
	{foreach $mess->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
</div>
{/if}
{if $mess->isInfo()}
<div class="messages inf bottom-margin">
	<ol>
	{foreach $mess->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
</div>
{/if}

{/block}
