<?php /* Smarty version Smarty-3.1.17, created on 2023-05-14 18:50:52
         compiled from "B:\www\PAW\php_07\app\views\templates\top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151369448564611000a38965-42236137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c7f648b5709c3500f92631903ddd9589e21bcfe' => 
    array (
      0 => 'B:\\www\\PAW\\php_07\\app\\views\\templates\\top.tpl',
      1 => 1684083050,
      2 => 'file',
    ),
    '275d101d4d547919f3bb812dcf7f131881f09425' => 
    array (
      0 => 'B:\\www\\PAW\\php_07\\app\\views\\calc_view.tpl',
      1 => 1684083024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151369448564611000a38965-42236137',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_64611000a7c3e0_05323512',
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
<?php if ($_valid && !is_callable('content_64611000a7c3e0_05323512')) {function content_64611000a7c3e0_05323512($_smarty_tpl) {?><!doctype html>
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
	<h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_header']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
	<p>
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>

        </p>  
</div>

<div style="background-image:url('/PAW/php_06/css/bgd.jpg')">
<div id="layout">

<!--include file="./templates/side_menu.tpl"}-->

<div class="content" id="CCalc">
    <h3>Kalkulator Kredytowy</h2>
    
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
    </div>

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
	<label for="id_amm">Kwota: </label>
	<input id="id_amm" type="text" name="amm" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amm;?>
" /><br />
	<label for="id_y">Ilość Lat: </label>
	<input id="id_y" type="text" name="ye" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ye;?>
" /><br />
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


<?php if ($_smarty_tpl->tpl_vars['mess']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php  $_smarty_tpl->tpl_vars['err'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['err']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mess']->value->getErrors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['err']->key => $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->_loop = true;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php } ?>
	</ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['mess']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php  $_smarty_tpl->tpl_vars['inf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mess']->value->getInfos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->key => $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->_loop = true;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php } ?>
	</ol>
<?php }?>



<?php if (isset($_smarty_tpl->tpl_vars['res']->value->full)&&isset($_smarty_tpl->tpl_vars['res']->value->monthly)) {?>
	<h4>Wynik</h4>
	<p class="result">
            Pelna kwota:<?php echo $_smarty_tpl->tpl_vars['res']->value->full;?>
<br>
            Miesiecznie:<?php echo $_smarty_tpl->tpl_vars['res']->value->monthly;?>

	</p>
<?php }?>

</div>



</div>
</div>
<!-- For some reasons include doesn't work
include file="./templates/bottom.tpl"}-->
<script src="http://localhost:8080/PAW/php_06/js/ui.js"></script>
</body>
</html>




<?php }} ?>
