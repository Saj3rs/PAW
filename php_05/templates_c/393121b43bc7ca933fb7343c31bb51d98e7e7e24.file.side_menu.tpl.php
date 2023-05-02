<?php /* Smarty version Smarty-3.1.17, created on 2023-05-02 13:59:04
         compiled from "B:\www\PAW\php_05\templates\side_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15209205156450fb0855f561-06548987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '393121b43bc7ca933fb7343c31bb51d98e7e7e24' => 
    array (
      0 => 'B:\\www\\PAW\\php_05\\templates\\side_menu.tpl',
      1 => 1683023407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15209205156450fb0855f561-06548987',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_6450fb0855ffb5_41749647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6450fb0855ffb5_41749647')) {function content_6450fb0855ffb5_41749647($_smarty_tpl) {?>     <!-- Menu toggle -->
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
