<?php /* Smarty version Smarty-3.1.17, created on 2023-04-12 18:15:11
         compiled from "B:\www\PAW\php_04\templates\side_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15458527396436d701ca0991-88638242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed02a5e0b9a9552d4c4dfd688033043e5a1a877a' => 
    array (
      0 => 'B:\\www\\PAW\\php_04\\templates\\side_menu.tpl',
      1 => 1681315795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15458527396436d701ca0991-88638242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_6436d701ca12f3_77962627',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6436d701ca12f3_77962627')) {function content_6436d701ca12f3_77962627($_smarty_tpl) {?>     <!-- Menu toggle -->
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
