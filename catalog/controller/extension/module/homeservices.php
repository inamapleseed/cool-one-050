<?php
class ControllerExtensionModuleHomeservices extends Controller {
	public function index() {
		// Handle homeservices fields
		$oc = $this;
		$language_id = $this->config->get('config_language_id');
		$modulename  = 'homeservices';
	    $this->load->library('modulehelper');
	    $Modulehelper = Modulehelper::get_instance($this->registry);

    $data['services_title'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'services_title' );
		$data['repeater'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeater' );

		return $this->load->view('extension/module/homeservices', $data);
	}
	public function migrate() {
		// Handle homeservices fields
		$oc = $this;
		$language_id = $this->config->get('config_language_id');
		$modulename  = 'homeservices';
	    $this->load->library('modulehelper');
	    $Modulehelper = Modulehelper::get_instance($this->registry);

    $data['services_title'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'services_title' );
		$data['repeater'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeater' );

		return $data;
	}

}