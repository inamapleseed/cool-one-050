<?php
class ControllerExtensionModuleHomeachievement extends Controller {
	public function index() {
		// Handle homeachievement fields
		$oc = $this;
		$language_id = $this->config->get('config_language_id');
		$modulename  = 'homeachievement';
	    $this->load->library('modulehelper');
	    $Modulehelper = Modulehelper::get_instance($this->registry);

		$data['repeater'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeater' );

		return $this->load->view('extension/module/homeachievement', $data);
	}
	public function migrate() {
		// Handle homeachievement fields
		$oc = $this;
		$language_id = $this->config->get('config_language_id');
		$modulename  = 'homeachievement';
	    $this->load->library('modulehelper');
	    $Modulehelper = Modulehelper::get_instance($this->registry);

		$data['repeater'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeater' );

		return $data;
	}

}