<?php 
class ControllerExtensionModuleHomeservices extends controller {
	public function index() {
		$array = array(
            'oc' => $this,
            'heading_title' => 'Home Services',
            'modulename' => 'homeservices',
            'fields' => array(
                array('type' => 'text', 'label' => 'Services Title', 'name' => 'services_title'),
                array('type' => 'repeater', 'label' => 'Content', 'name' => 'repeater', 'fields' => 
                  array(
                    array('type' => 'image', 'label' => 'Image', 'name' => 'image'),
                    array('type' => 'text', 'label' => 'Title', 'name' => 'title'),
                    array('type' => 'text', 'label' => 'Link', 'name' => 'link'),
                  ),
                ),
              ),
            );
        $this->modulehelper->init($array);
	}
}