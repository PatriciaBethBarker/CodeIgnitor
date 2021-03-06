<?php
/**
 * Customer_model.php
 * controller for a generic Customer
 * used to show how to do CRUD in CodeIgniter
 *
 * @package ITC260
 * @subpackage Customer
 * @author Patricia Beth Barker  <patriciabethbarker@gmail.com>
 * @version 1.0 2015/5/14
 * @link http://www.tcbcommercialproperties.com/sandbox/ci/ 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see Customer.php
 * @see index.php
 * @todo none
 */
/**
 * Customer model for our CRUD demo
 *
 * @see Customer.php
 * @todo none
 */
class Customer_model extends CI_Model {
    /**
         * Loads default data into object
         *
         * @param none
         * @return void
         * @todo none
         */
    public function __construct()
    {
            $this->load->database();
    }//end constructor method
    
    public function get_customer($customer = false) {
        if ($customer) {
                return "Hello " . $customer . " from the customer_model";
        }
        return $this->db->get('test_Customers');
    }//end get_customer method
    
    /*
    public function get_news($slug = FALSE)
     {
        if ($slug === FALSE)
             {
                $query = $this->db->get('news');
                return $query->result_array();
             }
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
     }
     */
}//END Customer_model