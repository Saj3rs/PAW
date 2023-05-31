{extends file="../calc_view.tpl"}
{block name=logout}
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}doLogout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
    </div>
{/block}
{block name=meta}
<head>
  
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content={$page_description|default:"Opis domyślny"}>
	<title>{$page_title|default:"Tytuł domyślny"}</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
<link rel="stylesheet" href="http://localhost:8080/PAW/php_07/css/style.css">
</head>
{/block}

{block name=head}
<body>
<div class="header" id="Intro" style="background-image:url('/PAW/php_07/css/bgd2.jpg')">
	<h1>{$page_title|default:"Tytuł domyślny"}</h1>
	<h1>{$page_header|default:"Tytuł domyślny"}</h1>
	<p>
            {$page_description|default:"Opis domyślny"}
        </p>  
</div>
{/block}
    
{block name=footer}
    <p>
            Poprawny footer
        </p>
{/block}