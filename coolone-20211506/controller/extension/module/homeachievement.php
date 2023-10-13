<?php 
class ControllerExtensionModuleHomeachievement extends controller {
	public function index() {
		$array = array(
            'oc' => $this,
            'heading_title' => 'Home Achievement',
            'modulename' => 'homeachievement',
            'fields' => array(
                array('type' => 'repeater', 'label' => 'Content', 'name' => 'repeater', 'fields' => 
                  array(
                    array('type' => 'image', 'label' => 'Image', 'name' => 'image'),
                    array('type' => 'text', 'label' => 'Title', 'name' => 'title'),
                  ),
                ),
              ),
            );
        $this->modulehelper->init($array);
	}
}