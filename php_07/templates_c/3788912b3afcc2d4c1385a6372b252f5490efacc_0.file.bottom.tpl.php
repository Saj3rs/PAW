<?php
/* Smarty version 4.3.0, created on 2023-05-31 14:20:27
  from 'B:\www\PAW\php_07\app\views\templates\bottom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64773b8bf16193_09260867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3788912b3afcc2d4c1385a6372b252f5490efacc' => 
    array (
      0 => 'B:\\www\\PAW\\php_07\\app\\views\\templates\\bottom.tpl',
      1 => 1684222186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64773b8bf16193_09260867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer"id="Contact">
	<p>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196960982564773b8bf15cd3_48004066', 'footer');
?>

	</p>
	<p>
            Składający bloczki: Damian Figura PAW1
        </p>
</div>
<?php }
/* {block 'footer'} */
class Block_196960982564773b8bf15cd3_48004066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_196960982564773b8bf15cd3_48004066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki - correct include wrong extend <?php
}
}
/* {/block 'footer'} */
}
