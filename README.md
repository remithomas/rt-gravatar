rt-gravatar
============

ZF2 helper extends Zend\View\Helper\Gravatar

How to install ?
============
### Using composer.json

```
{
    "name": "zendframework/skeleton-application",
    "description": "Skeleton Application for ZF2",
    "license": "BSD-3-Clause",
    "keywords": [
        "framework",
        "zf2"
    ],
    "minimum-stability": "dev",
    "homepage": "http://framework.zend.com/",
    "require": {
        "php": ">=5.3.3",
        "zendframework/zendframework": "dev-master",
        "remithomas/rt-gravatar": "dev-master"
    }
}
```

### Activate the module :

application.config.php
```
<?php
return array(
    'modules' => array(
        'Application',
        'RtGravatar',
    )
);
?>
```

### Only activated in one module
If you need to use this plugin **only in one module**. Just copy this code and add it into your own module config (module.config.php)
```
<?php
return array(
    ...
    'view_helpers' => array(
        'invokables' => array(
            'RtGravatar'    => 'RtGravatar\View\Helper\RtGravatar',
            'RtHasGravatar' => 'RtGravatar\View\Helper\RtHasGravatar'
        )
    ),
    ...
```
### Activated for all the application
If you need to use this plugin **in all your application**. Just copy the file [rt-gravatar.global.php.dist](https://github.com/remithomas/rt-gravatar/blob/master/config/rt-gravatar.global.php.dist) (/vendor/remithomas/rt-gravatar/config/) and paste it into the folder **/config/autoload/**

How to use ?
============

### Standart use
```
<?php 
$options = array("img_size"=>150);
$attribs = array();
echo $this->RtGravatar("me@example.com",$options,$attribs,true); 
?>
```

### User has a gravatar ?
```
<?php 
var_dump ($this->RtHasGravatar("me@example.com"); 
?>
```

### User (connected or me) has a gravatar ?
```
<?php 
var_dump ($this->RtHasGravatar("me"); 
// or
var_dump ($this->RtHasGravatar(); 
?>
```

### User can go to the edition
```
<?php 
$options = array("img_size"=>150);
$attribs = array();
echo $this->RtGravatar("me",$options,$attribs,true); 
?>
```
