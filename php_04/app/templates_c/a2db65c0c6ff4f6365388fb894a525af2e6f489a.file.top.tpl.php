<?php /* Smarty version Smarty-3.1.17, created on 2023-04-12 18:20:24
         compiled from "B:\www\PAW\php_04\templates\top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10737675426436d780b96c82-67028345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2db65c0c6ff4f6365388fb894a525af2e6f489a' => 
    array (
      0 => 'B:\\www\\PAW\\php_04\\templates\\top.tpl',
      1 => 1681315401,
      2 => 'file',
    ),
    'fe30d2d1a109a9fe850e59e3f4aea64a40dadd52' => 
    array (
      0 => 'B:\\www\\PAW\\php_04\\app\\calc_view.tpl',
      1 => 1681316424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10737675426436d780b96c82-67028345',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_6436d780bdba73_67957271',
  'variables' => 
  array (
    'amm' => 0,
    'ye' => 0,
    'messages2' => 0,
    'msg' => 0,
    'full' => 0,
    'monthly' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6436d780bdba73_67957271')) {function content_6436d780bdba73_67957271($_smarty_tpl) {?><!doctype html>
<html lang="pl">


<head>
  
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
>
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">	<link rel="stylesheet" href="<<?php ?>?php print(_APP_URL); ?<?php ?>>/css/style.css">	
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">
</head>


<body>
<div class="header" id="Intro" style="background-image:url('/PAW/php_04/css/bgd2.jpg')">
	<h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
	<h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_header']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
	<p>
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>

        </p>  
</div>

<div style="background-image:url('/PAW/php_04/css/bgd.jpg')">
<div id="layout">

<?php echo $_smarty_tpl->getSubTemplate ("../templates/side_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content" id="CCalc">
    <h3>Kalkulator Kredytowy</h2>
<form class="pure-form pure-form-stacked" action="<<?php ?>?php print(_APP_ROOT); ?<?php ?>>/app/calc_1.php" method="post">
	<label for="id_amm">Kwota: </label>
	<input id="id_amm" type="text" name="amm" value="<?php echo $_smarty_tpl->tpl_vars['amm']->value;?>
" /><br />
	<label for="id_y">Ilość Lat: </label>
	<input id="id_y" type="text" name="ye" value="<?php echo $_smarty_tpl->tpl_vars['ye']->value;?>
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


<?php if (isset($_smarty_tpl->tpl_vars['messages2']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages2']->value)>0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php } ?>
		</ol>
	<?php }?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['full']->value)&&isset($_smarty_tpl->tpl_vars['monthly']->value)) {?>
	<h4>Wynik</h4>
	<p class="res">
            Pelna kwota:<?php echo $_smarty_tpl->tpl_vars['full']->value;?>
<br>
            Miesiecznie:<?php echo $_smarty_tpl->tpl_vars['monthly']->value;?>

	</p>
<?php }?>

</div>



</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../templates/bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="http://localhost:8080/PAW/php_04/js/ui.js"></script>
</body>
</html>




<?php }} ?>
