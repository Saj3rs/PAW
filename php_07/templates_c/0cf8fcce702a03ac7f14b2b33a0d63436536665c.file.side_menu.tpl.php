<?php /* Smarty version Smarty-3.1.17, created on 2023-05-22 14:06:35
         compiled from "B:\www\PAW\php_07\app\views\templates\side_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:473810435646b5acb1d03b1-03847640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cf8fcce702a03ac7f14b2b33a0d63436536665c' => 
    array (
      0 => 'B:\\www\\PAW\\php_07\\app\\views\\templates\\side_menu.tpl',
      1 => 1684222186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '473810435646b5acb1d03b1-03847640',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_646b5acb1d0cf8_06344118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_646b5acb1d0cf8_06344118')) {function content_646b5acb1d0cf8_06344118($_smarty_tpl) {?>     <!-- Menu toggle -->
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
