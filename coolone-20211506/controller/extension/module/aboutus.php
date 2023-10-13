<?php 
class ControllerExtensionModuleAboutUs extends controller {
	public function index() {
		$array = array(
            'oc' => $this,
            'heading_title' => 'About Us',
            'modulename' => 'aboutus',
            'fields' => array(
                array('type' => 'text', 'label' => 'About Us Title', 'name' => 'aboutus_title'),
                array('type' => 'repeater', 'label' => 'Content', 'name' => 'repeater', 'fields' => array(
                  array('type' => 'image', 'label' => 'Image', 'name' => 'image'),
                  array('type' => 'image', 'label' => 'Icon', 'name' => 'icon'),
                  array('type' => 'text', 'label' => 'Title', 'name' => 'title'),
                  array('type' => 'textarea', 'label' => 'Text Content', 'name' => 'text', 'ckeditor' =>true),)
                ),
                array('type' => 'text', 'label' => 'Specialize Title', 'name' => 'specialize_title'),
                array('type' => 'repeater', 'label' => 'Specialize Content', 'name' => 'repeatertwo', 'fields' => array(
                  array('type' => 'image', 'label' => 'Image', 'name' => 'image'),
                  array('type' => 'text', 'label' => 'Title', 'name' => 'title'),)
                ),
              ),
            );
        $this->modulehelper->init($array);
	}
}