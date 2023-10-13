<?php 
class ControllerExtensionModuleAirconInstallation extends controller {
	public function index() {
		$array = array(
            'oc' => $this,
            'heading_title' => 'Aircon Installation',
            'modulename' => 'airconinstallation',
            'fields' => array(
                array('type' => 'repeater', 'label' => 'Upper Content', 'name' => 'repeater', 'fields' => array(
                  array('type' => 'image', 'label' => 'Image', 'name' => 'image'),
                  array('type' => 'text', 'label' => 'Title', 'name' => 'title'),
                  array('type' => 'textarea', 'label' => 'Text Content', 'name' => 'text', 'ckeditor' =>true),)
                ),
                array('type' => 'repeater', 'label' => 'Middle Content', 'name' => 'repeatertwo', 'fields' => array(
                  array('type' => 'image', 'label' => 'Icon', 'name' => 'icon'),
                  array('type' => 'text', 'label' => 'Title', 'name' => 'title'),
                  array('type' => 'textarea', 'label' => 'Text Content', 'name' => 'text', 'ckeditor' =>true),)
                ),
                array('type' => 'text', 'label' => 'Pricing Title', 'name' => 'pricing_title'),
                array('type' => 'repeater', 'label' => 'Pricing Content', 'name' => 'repeaterthree', 'fields' => array(
                    array('type' => 'text', 'label' => 'Title', 'name' => 'title'),
                    array('type' => 'textarea', 'label' => 'Text Content', 'name' => 'text', 'ckeditor' =>true),
                    )
                ),
                array('type' => 'text', 'label' => 'Brands Title', 'name' => 'brands_title'),
                array('type' => 'repeater', 'label' => 'Brands Content', 'name' => 'repeaterfour', 'fields' => array(
                      array('type' => 'text', 'label' => 'Title', 'name' => 'title'),
                      array('type' => 'image', 'label' => 'Image', 'name' => 'image'),
                  ),
                ),
                // array('type' => 'repeater', 'label' => 'Lower Content', 'name' => 'repeaterfive', 'fields' => array(
                //   array('type' => 'image', 'label' => 'Icon', 'name' => 'icon'),
                //   array('type' => 'text', 'label' => 'Title', 'name' => 'title'),
                //   array('type' => 'textarea', 'label' => 'Text Content', 'name' => 'text', 'ckeditor' =>true),)
                // ),
              ),
            );
        $this->modulehelper->init($array);
	}
}