<?php

/**
 * Authorize.PathAuthorize 
 *
 * @copyright 	Copyright (c) Locality Solutions Ltd
 * @link 		http://github.com/localitysolutions/cakephp-authorize
 * @package		Authorize.Controller.Component.Auth
 * @version 	0.1
 */

App::uses('BaseAuthorize', 'Controller/Component/Auth');

/**
 * Authorize.PathAuthorize Class
 *
 * @author 		James Tancock <james@localitysolutions.co.uk>
 */

class PathAuthorize extends BaseAuthorize {

	/**
	 * Authorize a user using the Acl component.
	 *
	 * @access public
	 * @param array $user
	 * @param CakeRequest $request
	 * @return bool
	 */

	public function authorize($user, CakeRequest $request) {
		$Acl = $this->_Collection->load('Acl');
		$user = array($this->settings['userModel'] => $user);

		if (count($request->params['pass']) > 0) {
			$acoNode = $this->action($request) . '/' . $request->params['pass'][0];
		}
		else {
			$acoNode = $this->action($request);
		}

		return $this->Acl->check($user, $acoNode);
	}
}

?>