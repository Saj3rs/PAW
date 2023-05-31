<?php
/* Smarty version 4.3.0, created on 2023-05-31 14:20:27
  from 'B:\www\PAW\php_07\app\views\templates\top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64773b8bee8e00_32187046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '366789ff2d1bf622a41472b02d4b8cf0ad8f5ab3' => 
    array (
      0 => 'B:\\www\\PAW\\php_07\\app\\views\\templates\\top.tpl',
      1 => 1685532578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64773b8bee8e00_32187046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67970775764773b8bede7d9_11158298', 'logout');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61693108164773b8bee1eb9_03983212', 'meta');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31818991164773b8bee7356_00602305', 'head');
?>

    
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8966238964773b8bee89d6_51765732', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../calc_view.tpl");
}
/* {block 'logout'} */
class Block_67970775764773b8bede7d9_11158298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'logout' => 
  array (
    0 => 'Block_67970775764773b8bede7d9_11158298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
doLogout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
    </div>
<?php
}
}
/* {/block 'logout'} */
/* {block 'meta'} */
class Block_61693108164773b8bee1eb9_03983212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_61693108164773b8bee1eb9_03983212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<head>
  
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content=<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
>
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
<link rel="stylesheet" href="http://localhost:8080/PAW/php_07/css/style.css">
</head>
<?php
}
}
/* {/block 'meta'} */
/* {block 'head'} */
class Block_31818991164773b8bee7356_00602305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_31818991164773b8bee7356_00602305',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<body>
<div class="header" id="Intro" style="background-image:url('/PAW/php_07/css/bgd2.jpg')">
	<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<p>
            <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>

        </p>  
</div>
<?php
}
}
/* {/block 'head'} */
/* {block 'footer'} */
class Block_8966238964773b8bee89d6_51765732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8966238964773b8bee89d6_51765732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>
            Poprawny footer
        </p>
<?php
}
}
/* {/block 'footer'} */
}
