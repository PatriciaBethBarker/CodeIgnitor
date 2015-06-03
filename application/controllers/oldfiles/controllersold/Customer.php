<?php
/**
* Customer.php controller for a generic Customer
*
* Used to show how to do CRUD in CodeIgnitor
*
* @package ITC 260 CodeIgnitor
* @subpackage CONTROLLER
* @author Patricia Barker <pbarke01@seattlecentral.edu>
* @version 1.0 2015/04/30
* @link http://www.tcbcommercialproperties.com/sandbox/index.html
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Customer_model.php
* @see index.php
* @todo none
*/

/**
 * Customer controller for our CRUD demo
 *
 * @see Customer_model
 * @todo none
 */
 
class Customer extends CI_Controller {
        
        /**
         * Loads default data into Object
         *
         * @param none
         * @param void
         * @todo none
         */
        public function __construct()
        {  //everything here is global to all methods in the controller
                parent::__construct();
                
                $this->load->model('customer_model');
                /*  reusing the file and connecting to Customer file
                $this->load->model('rss_model');
                $this->load->model('news_model');
                */
                $this->config->set_item('banner', 'Global News Banner');

        }
 
         /**
        * Customer controller for our CRUD demo
        *
        * Added in v3 - Result object
        *
        * @param none
        * @param void
        * @todo none
        */  
        public function index()
        {
                $data['query'] = $this->customer_model->get_customers();
                
                //var_dump($data);
                //die;
            
              // $data['news'] =$this->news_model->get_news();
              //  $data['xml'] = $this->rss_model->get_rss();
             //   $data['title'] = 'RSS Feed';
             //   $this->load->view('rss/index', $data);
             
                $data['title'] = 'Customer';
                $this->load->view('customer/index', $data);
        }#end of index
          
}#end of Customer class/controller()
