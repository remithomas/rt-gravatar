<?php

namespace RtGravatar\View\Helper;

use Zend\View\Helper\AbstractHelper;

class RtGravatar extends AbstractHelper
{
    
    public function __invoke($email = "me", $options = array(), $attribs = array(), $edit = false)
    {
        
        // init
        $editAction = "";
        $connected = $this->view->zfcUserIdentity();
        
        if($email == "me" && $connected){
            $email = $this->view->ZfcUserIdentity()->getEmail();
            if(is_null($email) || $email == ""){
                $email = "";
            }
        }
        
        // image
        $gravatar = $this->view->Gravatar($email, $options, $attribs);
        
        // edit
        if($edit && $connected){
            $changeMe = $this->view->translate("change me");
            $size = (isset($options['img_size']) ? $options['img_size'] : 80);
            $editAction = "<span id='editgravatar' style='background:#FFF;color:#000;position:absolute;display:none;font-size:".round($size/8)."px;text-align:center;width:".$size."px;text-decoration:none;padding:4px 0px;-webkit-transition-duration: 0.21799999475479126s;-webkit-transition-property: background-color;-webkit-transition-timing-function: cubic-bezier(0.42, 0, 0.58, 1);opacity:0.6;filter:alpha(opacity=60);filter:progid:DXImageTransform.Microsoft.Alpha(opacity=60);-ms-filter:\"alpha(opacity=60)\";-moz-opacity:0.6;-khtml-opacity:0.6;'>".$changeMe."</span>";
            return "<a href='http://gravatar.com' onmouseout='javascript:document.getElementById(\"editgravatar\").style.display=\"none\";' onmouseover='javascript:document.getElementById(\"editgravatar\").style.display=\"block\";'>".$editAction."".$gravatar."</a>";
        }else{
            return $gravatar;
        }
    }
}
?>
