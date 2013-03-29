<?php

namespace RtGravatar;

use Zend\EventManager\Event;

class Module
{
    /**
     * onBootstrap
     * @param MvcEvent $e
     */
    public function onBootstrap(Event $e){
        
    }
    
    public function getControllerConfig()
    {
        return array();
    }
    
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
    
}
