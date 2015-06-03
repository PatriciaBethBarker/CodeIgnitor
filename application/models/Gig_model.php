<?php
/**
* Gig_model.php   model for a generic Customer
*
* Used to show how to do CRUD in CodeIgnitor
*
* @package ITC 260 CodeIgnitor - Gig Central
* @subpackage CONTROLLER
* @author Patricia Barker <pbarke01@seattlecentral.edu>
* @version 1.0 2015/05/26
* @link http://www.tcbcommercialproperties.com/sandbox/ci/ ??
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see controllers/Gig.php
* @see views/gig/index.php
* @see index.php
* @todo none  ??
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
       
       public function get_gigs_form()
       {
        //return "Hello from the Gigs_form model!";
        return $this->db->get('test_customers'); //check this
       }#end get_gigs_form()
       

}#end of the Gig_model