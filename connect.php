<?php
spl_autoload_register(function($class_name){
   include 'Classes/'.$class_name.'.php';
});

$mysqli = DataBase::getDB()->getConnection();

//var_dump($mysqli);