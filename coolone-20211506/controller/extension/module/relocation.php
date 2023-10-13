<?php 
class ControllerExtensionModuleRelocation extends controller {
	public function index() {
		$array = array(
            'oc' => $this,
            'heading_title' => 'Relocation',
            'modulename' => 'relocation',
            'fields' => array(
                array('type' => 'repeater', 'label' => 'Content', 'name' => 'repeater', 'fields' => array(
                  array('type' => 'image', 'label' => 'Image', 'name' => 'image'),
                  array('type' => 'text', 'label' => 'Title', 'name' => 'title'),
                  array('type' => 'textarea', 'label' => 'Text Content', 'name' => 'text', 'ckeditor' =>true),)
                ),
                  array('type' => 'text', 'label' => 'Pricing Title', 'name' => 'pricing_title'),
                  array('type' => 'textarea', 'label' => 'Pricing Text Upper', 'name' => 'pricing_text_upper' , 'ckeditor' =>true),
                  array('type' => 'repeater', 'label' => 'Pricing Content', 'name' => 'repeatertwo', 'fields' => array(
                    array('type' => 'text', 'label' => 'Title', 'name' => 'title'),
                    array('type' => 'textarea', 'label' => 'Text Content', 'name' => 'text', 'ckeditor' =>true),)
                ),
                  array('type' => 'textarea', 'label' => 'Pricing Text Bottom', 'name' => 'pricing_text_bottom', 'ckeditor' =>true),
                  array('type' => 'repeater', 'label' => 'Lower Content', 'name' => 'repeaterthree', 'fields' => array(
                  array('type' => 'image', 'label' => 'Icon', 'name' => 'icon'),
                  array('type' => 'text', 'label' => 'Title', 'name' => 'title'),
                  array('type' => 'textarea', 'label' => 'Text Content', 'name' => 'text', 'ckeditor' =>true),)
                ),
              ),
            );
        $this->modulehelper->init($array);
	}
}