<?php

/**
 * @author Remi THOMAS 
 */

namespace RtGravatar\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\View\Helper\Gravatar;
use Zend\ServiceManager\ServiceManager;

use Zend\Authentication\AuthenticationService;

class RtHasGravatar extends AbstractHelper
{

    /**
     * User email has Gravatar
     * @param string $email
     * @return boolean 
     */
    public function __invoke($email = "me")
    {
        if($email == "me"){
            if($this->view->ZfcUserIdentity() == false){
                return false;
            }else{
                $email = $this->view->ZfcUserIdentity()->getEmail();
                if(is_null($email) || $email == ""){
                    return false;
                }
            }
        }
        
        return $this->validateGravatar($email);
    }
    
    /**
     * Validate if has gravatar
     * @param string $email
     * @return boolean 
     */
    protected function validateGravatar($email) {
	// Craft a potential url and test its headers
	$hash = md5($email);
	$uri = 'http://www.gravatar.com/avatar/' . $hash . '?d=404';
	$headers = @get_headers($uri);
	if (!preg_match("|200|", $headers[0])) {
		$has_valid_avatar = FALSE;
	} else {
		$has_valid_avatar = TRUE;
	}
	return $has_valid_avatar;
    }
}
?>
