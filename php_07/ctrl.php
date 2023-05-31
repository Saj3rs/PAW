<?php
require_once 'init.php';


//1. pobierz nazwę akcji


//2. wykonanie akcji

getRouter()->setDefaultRoute('calcShow'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('doLogin'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('calcShow',    'Calc',  ['user','admin']);
getRouter()->addRoute('start',       'Calc',  ['user','admin']);
getRouter()->addRoute('doLogin',       'Login');
getRouter()->addRoute('doLogout',      'Login', ['user','admin']);

getRouter()->go();

