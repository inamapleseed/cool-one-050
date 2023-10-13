<?php
class ControllerExtensionModuleHometestimonial extends Controller {
    public function index() {

        $array = array(
            'oc' => $this,
            'heading_title' => 'Home Testimonial',
            'modulename' => 'hometestimonial',
            'fields' => array(
                array('type' => 'text', 'label' => 'Title', 'name' => 'title'),
            ),
        );

        $this->modulehelper->init($array);    
    }
}