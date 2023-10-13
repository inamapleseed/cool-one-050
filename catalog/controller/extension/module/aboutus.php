<?php
class ControllerExtensionModuleAboutUs extends Controller {
	public function index() {
		// Handle aboutus fields
		$oc = $this;
		$language_id = $this->config->get('config_language_id');
		$modulename  = 'aboutus';
	    $this->load->library('modulehelper');
	    $Modulehelper = Modulehelper::get_instance($this->registry);

		$data['repeater'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeater' );
    $data['aboutus_title'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'aboutus_title' );
    $data['specialize_title'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'specialize_title' );
    $data['repeatertwo'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeatertwo' );

		return $this->load->view('extension/module/aboutus', $data);
	}
	public function migrate() {
		// Handle aboutus fields
		$oc = $this;
		$language_id = $this->config->get('config_language_id');
		$modulename  = 'aboutus';
	    $this->load->library('modulehelper');
	    $Modulehelper = Modulehelper::get_instance($this->registry);

		$data['repeater'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeater' );
    $data['aboutus_title'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'aboutus_title' );
    $data['specialize_title'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'specialize_title' );
    $data['repeatertwo'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeatertwo' );

		return $data;
	}

}