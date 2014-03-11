<?php
return array(
	'controllers' => array(
         'invokables' => array(
             'HelloWorld\Controller\Index' => 'HelloWorld\Controller\IndexController',
         ),
     ),
     'router' => array(
         'routes' => array(
             'hello-world' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/hello-world[/][:action][/:name]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'name'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                     ),
                     'defaults' => array(
                         'controller' => 'HelloWorld\Controller\Index',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'hello-world' => __DIR__ . '/../view',
         ),
     ),
);
