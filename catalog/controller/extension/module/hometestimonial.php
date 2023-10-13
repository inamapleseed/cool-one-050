<?php

class ControllerExtensionModuleHometestimonial extends Controller {
	public function index($setting) {
		$oc = $this;
		$language_id = $this->config->get('config_language_id');
		$modulename = 'hometestimonial';

		// $this->document->addScript('catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js');
		// $this->document->addStyle('catalog/view/javascript/jquery/magnific/magnific-popup.css');

		$this->load->library('modulehelper');
		$Modulehelper = Modulehelper::get_instance($this->registry);
		$data = array(
			'title' => $Modulehelper->get_field ( $oc, $modulename, $language_id, 'title' ),
		);

		$this->load->model('extension/module/testimonial');
		$data['testimonials'] = $this->model_extension_module_testimonial->getReviews();

    $this->document->addStyle("catalog/view/javascript/slick/slick.css");
		$this->document->addScript("catalog/view/javascript/slick/slick.min.js");

		return $this->load->view('extension/module/hometestimonial', $data);
	}
}