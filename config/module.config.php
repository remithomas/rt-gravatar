<?php

namespace RtGravatar;

use Zend\Authentication\AuthenticationService;

return array(
    'controller_plugins' => array(
        'invokables' => array(
            'RtGravatar'    => 'RtGravatar\View\Helper\RtGravatar',
            'RtHasGravatar' => 'RtGravatar\View\Helper\RtHasGravatar',
            'Gravatar'      => 'Zend\View\Helper\Gravatar'
        )
    ),
    
        'service_manager' => array(
            'invokables' => array(
               'Zend\Authentication\AuthenticationService' => 'Zend\Authentication\AuthenticationService',
            ),
        ),
        'services' => array(
            // Keys are the service names
            // Values are objects
            'Auth' => new AuthenticationService(),
        ),
);