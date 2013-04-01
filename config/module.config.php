<?php

namespace RtGravatar;

return array(
    'view_helpers' => array(
        'invokables' => array(
            'RtGravatar'    => 'RtGravatar\View\Helper\RtGravatar',
            'RtHasGravatar' => 'RtGravatar\View\Helper\RtHasGravatar',
            'Gravatar'      => 'Zend\View\Helper\Gravatar'
        )
    ),
    'translator' => array(
        'translation_file_patterns' => array(
            array(
                'type'     => 'phparray',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.php',
                //'text_domain' => __NAMESPACE__,
            ),
        ),
  ),
);