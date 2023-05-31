<?php
/* Smarty version 4.3.0, created on 2023-05-31 14:20:27
  from 'B:\www\PAW\php_07\app\views\templates\side_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64773b8bf0c770_48690346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '665c15ffa780e8822be65e9f956a7ff718606378' => 
    array (
      0 => 'B:\\www\\PAW\\php_07\\app\\views\\templates\\side_menu.tpl',
      1 => 1684222186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64773b8bf0c770_48690346 (Smarty_Internal_Template $_smarty_tpl) {
?>     <!-- Menu toggle -->
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
<?php }
}
