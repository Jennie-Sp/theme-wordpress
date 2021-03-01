<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
</head>

<body>

<header class="bg-info header border-bottom p-3">
    <div class="container d-flex flex-column flex-md-row align-items-center">
        <h5 class="mr-md-auto"><a class="navbar-brand text-white" href="http://h98291ho.beget.tech/"><?php bloginfo('name'); ?></a></h5>

        <nav class="main-navigation">
            <? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
        </nav>

        <div class="border-left d-flex">
            <a class="text-white text-decoration-none nav-link" href="#">Sign up</a>
            <a class="text-white text-decoration-none nav-link" href="#">Log In</a>
        </div>
        
    </div>
</header>


