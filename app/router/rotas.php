<?php
return [
    'POST' => [
      '/login' => 'Login@autenticar',
      '/contact' => 'Contact@store',
      '/user/[0-9]+' => 'User@update',
      '/user/store' => 'User@store',
      '/user/image/update' => "UserImage@store",
      '/password/user/[0-9]+' => 'Password@update',
      // '/categorias/incluir' => 'Categorias@incluir',
      // '/categorias/[0-9]+' => 'Categorias@show'
     
    ],
    'GET' => [
    //   '/' => 'Home@index',
      '/' => 'Login@index',
      '/users' => 'Users@index',
      '/contact' => 'Contact@index',
      '/user/create' => 'User@create',
      '/user/edit/profile' => 'User@edit',
      '/user/[0-9]+' => 'User@show',
      '/menu' => 'Menu@index',
      '/menu/[0-9]+' => 'Menu@show',
      '/login' => 'Login@index',
      '/logout' => 'Login@destroy',
      '/sair' => 'Sair@index',
      '/categorias' => 'Categorias@index',
      '/categorias/incluir_se' => 'Categorias@incluir_se',
      '/categorias/editar_se/[0-9]+' => 'Categorias@show_se'
      
      
    ]
  ];

