<?php 
class ControllerExtensionModuleContactus extends controller {
	public function index() {
		$array = array(
            'oc' => $this,
            'heading_title' => 'Contact Us Global',
            'modulename' => 'contactus',
            'fields' => array(
              ),
            );
        $this->modulehelper->init($array);
	}
}