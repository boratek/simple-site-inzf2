<?php
return array(
	 'controllers' => array(
         'invokables' => array(
             'Admin\Controller\Index' => 'Admin\Controller\IndexController',
         ),
     ),
     'router' => array(
         'routes' => array(
             'admin' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/admin[/][:action][/:name]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'name'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                     ),
                     'defaults' => array(
                         'controller' => 'Admin\Controller\Index',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'admin' => __DIR__ . '/../view',
         ),
     ),
);
