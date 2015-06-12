<?php
/**
* Gig_model.php   model for a generic Customer
*
* Used to show how to do CRUD in CodeIgnitor
*
* @package ITC 260 CodeIgnitor - Gig Central
* @subpackage CONTROLLER
* @author Patricia Barker <patriciabethbarker@gmail.com>
* @version 2.0 2015/06/10
* @link http://www.tcbcommercialproperties.com/sandbox/codeignitor/ 
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see controllers/Gig.php
* @see views/gigs/add.php
* @see add.php
* @todo none  
*/

/**
 * Gigs_form model for our Gig Central Project
 *
 * @see Gigs_form
 * @todo none
 */
class Gig_model extends CI_Model {
        
         /**
         * Loads default data into Object
         *
         * @param none
         * @param void
         * @todo none
         */
        public function __construct()
        {
                $this->load->database();
        }#end constructor
       
       //public function get_customers()
       public function get_gigs()
       {
        //return "Hello from the Gigs_form model!";
        //return $this->db->get('test_Customers'); //check this
        return $this->db->get('test_Gigs'); //check this
       }#end get_gigs_form()
       
       public function add_gig()
       {
        $data = array(
            'title' => $this->input->post('title'),
            'CompanyName' => $this->input->post('CompanyName'),
            'CompanyAddress' => $this->input->post('CompanyAddress'),
            'City' => $this->input->post('City'),
            'CompanyState' => $this->input->post('CompanyState'),
            'ZipCode' => $this->input->post('ZipCode'),
            'CompanyPhone' => $this->input->post('CompanyPhone'),            
            'CompanyWebsite' => $this->input->post('CompanyWebsite'),
            'FirstName' => $this->input->post('FirstName'),                
            'LastName' => $this->input->post('LastName'),                
            'Email' => $this->input->post('Email'),
            'Phone' => $this->input->post('Phone'),              
            'GigQualify' => $this->input->post('GigQualify'),              
            'EmploymentType' => $this->input->post('EmploymentType'),              
            'GigOutline' => $this->input->post('GigOutline'),
            'SpInstructions' => $this->input->post('SpInstructions'),              
            'PayRate' => $this->input->post('PayRate'),              
            'GigPosted' => $this->input->post('GigPosted'),              
            'LastUpdated' => $this->input->post('LastUpdated'),              
            'text' => $this->input->post('text')
        );
                var_dump($data); die;
                
        return $this->db->insert('gigs', $data);
       }

}#end of the Gig_model