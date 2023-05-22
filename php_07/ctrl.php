<?php
require_once 'init.php';


//1. pobierz nazwę akcji


//2. wykonanie akcji

getRouter()->setDefaultRoute('calcShow'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('dologin'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('calcShow',    'Calc',  ['user','admin']);
getRouter()->addRoute('start',       'Calc',  ['user','admin']);
getRouter()->addRoute('dologin',       'Login');
getRouter()->addRoute('dologout',      'Login', ['user','admin']);

getRouter()->go();

