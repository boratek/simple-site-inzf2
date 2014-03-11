<?php
return array(
     'controllers' => array(
         'invokables' => array(
             'User\Controller\Index' => 'User\Controller\IndexController',
         ),
     ),
     'router' => array(
         'routes' => array(
             'user' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/user[/][:action][/:name]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'name'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                     ),
                     'defaults' => array(
                         'controller' => 'User\Controller\Index',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'user' => __DIR__ . '/../view',
         ),
     ),
 );

