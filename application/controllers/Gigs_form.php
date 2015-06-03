<?php
/**
* Gigs_form.php controller for Gigs at SCC
*
* Used to show how to do CRUD in CodeIgnitor
*
* @package ITC 260 Gig Central CodeIgnitor
* @subpackage Gigs_form
* @author Patricia Barker <pbarke01@seattlecentral.edu>
* @version 1.0 2015/05/24
* @link http://www.tcbcommercialproperties.com/sandbox/ci/Gigs_form
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Gigs_model.php
* @see index.php
* @todo none
*/

/**
 * Gigs_form controller
 *
 *
 * @see Gigs_form_model.php
 * @todo none
 */
class Gigs_form extends CI_Controller
{//begin controller
        
   /**
  * Loads default data into object
  *
  *
  * @param none
  * @return void
  * @todo none
  */       
        public function __construct()
        {//begin constructor
        
                parent::__construct();
                
                $this->load->model('gigs_form_model');
                
                $this->config->set_item('banner', 'Global News Banner');
        
        }#end constructor       
        
        public function index()
        {//begin function index
                $data['query'] = $this->gigs_form_model->get_gigs_form();//check this
                
                $data['title']= 'Gigs';
              
                $this->load->view('gigs_form/index', data);  
        }#end function index
        
}#end Gigs class/controller