<?php /* Smarty version Smarty-3.1.17, created on 2023-05-14 18:50:54
         compiled from "B:\www\PAW\php_07\app\views\LoginView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69537065064610cd90336c4-31213543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b596f577a648ffbd8ac14d11c89cf523915ef5b0' => 
    array (
      0 => 'B:\\www\\PAW\\php_07\\app\\views\\LoginView.tpl',
      1 => 1684082097,
      2 => 'file',
    ),
    '275d101d4d547919f3bb812dcf7f131881f09425' => 
    array (
      0 => 'B:\\www\\PAW\\php_07\\app\\views\\calc_view.tpl',
      1 => 1684083024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69537065064610cd90336c4-31213543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_64610cd9076622_72730273',
  'variables' => 
  array (
    'conf' => 0,
    'form' => 0,
    'mess' => 0,
    'err' => 0,
    'inf' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64610cd9076622_72730273')) {function content_64610cd9076622_72730273($_smarty_tpl) {?><!doctype html>
<html lang="pl">

<head>
  
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
>
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">	<link rel="stylesheet" href="<<?php ?>?php print(_APP_URL); ?<?php ?>>/css/style.css">	
<link rel="stylesheet" href="http://localhost:8080/PAW/php_06/css/style.css">
</head>


<body>
<div class="header" id="Intro" style="background-image:url('/PAW/php_06/css/bgd2.jpg')">
	<h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
</div>

<div style="background-image:url('/PAW/php_06/css/bgd.jpg')">
<div id="layout">

<!--include file="./templates/side_menu.tpl"}-->

<div class="content" id="CCalc">
    <h3>Kalkulator Kredytowy</h2>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
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

<?php if ($_smarty_tpl->tpl_vars['mess']->value->isError()) {?>
<div class="messages err">
	<ol>
	<?php  $_smarty_tpl->tpl_vars['err'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['err']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mess']->value->getErrors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['err']->key => $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php } ?>
	</ol>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['mess']->value->isInfo()) {?>
<div class="messages inf bottom-margin">
	<ol>
	<?php  $_smarty_tpl->tpl_vars['inf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mess']->value->getInfos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->key => $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->_loop = true;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php } ?>
	</ol>
</div>
<?php }?>


</div>
</div>
<!-- For some reasons include doesn't work
include file="./templates/bottom.tpl"}-->
<script src="http://localhost:8080/PAW/php_06/js/ui.js"></script>
</body>
</html>




<?php }} ?>
