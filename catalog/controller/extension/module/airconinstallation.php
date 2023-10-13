<?php
class ControllerExtensionModuleAirconInstallation extends Controller {
	public function index() {
		// Handle airconinstallation fields
		$oc = $this;
		$language_id = $this->config->get('config_language_id');
		$modulename  = 'airconinstallation';
	    $this->load->library('modulehelper');
	    $Modulehelper = Modulehelper::get_instance($this->registry);

		$data['repeater'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeater' );
		$data['repeatertwo'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeatertwo' );
    $data['pricing_title'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'pricing_title' );
		$data['repeaterthree'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeaterthree' );
    $data['brands_title'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'brands_title' );
		$data['repeaterfour'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeaterfour' );
		// $data['repeaterfive'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeaterfive' );

    $this->document->addStyle("catalog/view/javascript/slick/slick.css");
		$this->document->addScript("catalog/view/javascript/slick/slick.min.js");

		return $this->load->view('extension/module/airconinstallation', $data);
	}
	public function migrate() {
		// Handle airconinstallation fields
		$oc = $this;
		$language_id = $this->config->get('config_language_id');
		$modulename  = 'airconinstallation';
	    $this->load->library('modulehelper');
	    $Modulehelper = Modulehelper::get_instance($this->registry);

		$data['repeater'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeater' );
		$data['repeatertwo'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeatertwo' );
    $data['pricing_title'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'pricing_title' );
		$data['repeaterthree'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeaterthree' );
    $data['brands_title'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'brands_title' );
		$data['repeaterfour'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeaterfour' );
		// $data['repeaterfive'] = $Modulehelper->get_field ( $oc, $modulename, $language_id, 'repeaterfive' );

		return $data;
	}

}