<?php
/* Smarty version 4.3.0, created on 2023-05-31 14:20:27
  from 'B:\www\PAW\php_07\app\views\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64773b8bf04aa6_12716844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eec5ffe63d1cefe0dafa4ce1a76c2dd3c3f6a81d' => 
    array (
      0 => 'B:\\www\\PAW\\php_07\\app\\views\\calc_view.tpl',
      1 => 1685535484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./templates/side_menu.tpl' => 1,
    'file:./templates/bottom.tpl' => 1,
  ),
),false)) {
function content_64773b8bf04aa6_12716844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214483763364773b8bef64f9_45997772', 'meta');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63438190364773b8bef6b01_53831870', 'head');
?>

<div style="background-image:url('/PAW/php_07/css/bgd.jpg')">
<div id="layout">

<?php $_smarty_tpl->_subTemplateRender("file:./templates/side_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content" id="CCalc">
    <h3>Kalkulator Kredytowy</h2><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22184950964773b8bef9712_38013134', 'noLogin');
?>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:./templates/bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="http://localhost:8080/PAW/php_07/js/ui.js"><?php echo '</script'; ?>
>
</body>
</html>




<?php }
/* {block 'meta'} */
class Block_214483763364773b8bef64f9_45997772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_214483763364773b8bef64f9_45997772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Meta data error<?php
}
}
/* {/block 'meta'} */
/* {block 'head'} */
class Block_63438190364773b8bef6b01_53831870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_63438190364773b8bef6b01_53831870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Head error<?php
}
}
/* {/block 'head'} */
/* {block 'logout'} */
class Block_139401199764773b8bef9a26_40942692 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'logout'} */
/* {block 'noLogin'} */
class Block_22184950964773b8bef9712_38013134 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'noLogin' => 
  array (
    0 => 'Block_22184950964773b8bef9712_38013134',
  ),
  'logout' => 
  array (
    0 => 'Block_139401199764773b8bef9a26_40942692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    	

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139401199764773b8bef9a26_40942692', 'logout', $this->tplIndex);
?>

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
start" method="post">
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
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mess']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['mess']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mess']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>



<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->full)) && (isset($_smarty_tpl->tpl_vars['res']->value->monthly))) {?>
	<h4>Wynik</h4>
	<p class="result">
            Pelna kwota:<?php echo $_smarty_tpl->tpl_vars['res']->value->full;?>
<br>
            Miesiecznie:<?php echo $_smarty_tpl->tpl_vars['res']->value->monthly;?>

	</p>
<?php }?>

</div>


<?php
}
}
/* {/block 'noLogin'} */
}
