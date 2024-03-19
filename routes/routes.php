<?php
$this->addRoute('home', 'HomeController@index');
$this->addRoute('product','ProductController@index');

function __construct()
    {
        require_once PATH_SITE.'/routes/routes.php';
        
    }
    $this->addRoute('product', 'ProductController@index');
?>