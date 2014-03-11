<?php
return array(
     'controllers' => array(
         'invokables' => array(
             'Chat\Controller\Index' => 'Chat\Controller\IndexController',
         ),
     ),
     'router' => array(
         'routes' => array(
             'chat' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/chat[/][:action][/:name]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'name'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                     ),
                     'defaults' => array(
                         'controller' => 'Chat\Controller\Index',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'chat' => __DIR__ . '/../view',
         ),
     ),
);
