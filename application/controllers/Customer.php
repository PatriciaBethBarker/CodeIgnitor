<?php

/**
* Customer.php controller for a generic Customer
*
* Used to show how to do CRUD in CodeIgniter
*
* @package Gig Central
* @subpackage Customer
* @author Patricia Barker patriciabethbarker@gmail.com
* @version 1.0 2015/04/30
* @link @link http://www.tcbcommercialproperties.com/sandbox/ci/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Customer_model.php
* @see index.php
* @todo none
*/

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Customer controller for our CRUD demo
*
* @see Customer_model
* @todo none
*/
class Customer extends CI_Controller {

    /**
    * Loads default data into object
    *
    * @param none
    * @return void
    * @todo none
    */
    public function __construct()
    {
        parent::__construct();
	
	$this->load->model('customer_model');
	$this->config->set_item('banner', 'Global Customer banner');
    }

    /**
     * Shows initial Customer database data
     *
     * @param none
     * @return void
     * @todo none
     */
	public function index()
	{
	$data["customer"] = $this->customer_model->get_customer();
	//set title for page
	$this->config->set_item('title', 'Customers');
        //passes data to view template
      	$this->load->view('customer/index', $data);
	}
	
	public function view($customer = null) {
	    if ($customer == null) {
		show_404();
	    }
	    $data["customer"] = $this->customer_model->get_customer($customerName);
	    $this->config->set_item('title', 'Customers'); //load default into object
	    //pass data to views template
	    $this->load->view('customer/index', $data);
	}
}
