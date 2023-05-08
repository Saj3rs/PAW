<?php /* Smarty version Smarty-3.1.17, created on 2023-05-08 14:09:05
         compiled from "B:\www\PAW\php_06\templates\side_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20346185846458e661752047-27751722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62fd76003772160d0c9aad858d1abc9f00fe9a23' => 
    array (
      0 => 'B:\\www\\PAW\\php_06\\templates\\side_menu.tpl',
      1 => 1683546913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20346185846458e661752047-27751722',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_6458e661752a44_96600653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6458e661752a44_96600653')) {function content_6458e661752a44_96600653($_smarty_tpl) {?>     <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
      
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a href="#Intro" class="pure-menu-heading">Introduction</a>

            <ul class="pure-menu-list">
               <!-- <li class="pure-menu-item"><a href="#Calc" class="pure-menu-link">Calculator</a></li>-->
                <li class="pure-menu-item"><a href="#CCalc" class="pure-menu-link">Credit Calculator</a></li>
                <li class="pure-menu-item"><a href="#Contact" class="pure-menu-link">Contact</a></li>

            </ul>
        </div>
    </div>
<?php }} ?>
