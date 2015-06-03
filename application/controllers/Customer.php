<?php

/**
* Customer.php controller for a generic Customer
*
* Used to show how to do CRUD in CodeIgniter
*
* @package Gig Central
* @subpackage Customer
* @author 
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
        $this->config->set_item('title', 'Customers');
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
        //passes data to view template
      	$this->load->view('customer/index');
	}
}
