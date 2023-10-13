<?php
class ControllerExtensionModuleServices extends Controller {
	public function index() {
		// Handle services fields
		$oc = $this;
		$language_id = $this->config->get('config_language_id');
		$modulename  = 'services';
	    $this->load->library('modulehelper');
	    $Modulehelper = Modulehelper::get_instance($this->registry);

		$data['repeater'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeater' );
    $data['pricing_title'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'pricing_title' );
    $data['pricing_text_upper'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'pricing_text_upper' );
    $data['pricing_text_bottom'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'pricing_text_bottom' );
    $data['repeatertwo'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeatertwo' );
    $data['repeaterthree'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeaterthree' );

		return $this->load->view('extension/module/services', $data);
	}
	public function migrate() {
		// Handle services fields
		$oc = $this;
		$language_id = $this->config->get('config_language_id');
		$modulename  = 'services';
	    $this->load->library('modulehelper');
	    $Modulehelper = Modulehelper::get_instance($this->registry);

		$data['repeater'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeater' );
    $data['pricing_title'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'pricing_title' );
    $data['pricing_text_upper'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'pricing_text_upper' );
    $data['pricing_text_bottom'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'pricing_text_bottom' );
    $data['repeatertwo'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeatertwo' );
    $data['repeaterthree'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeaterthree' );

		return $data;
	}

}