<?php
/**
* Gig.php controller for Gigs at SCC
*
* Used to show how to do CRUD in CodeIgnitor
*
* @package ITC 260 Gig Central CodeIgnitor
* @subpackage Gigs_form
* @author Patricia Barker <pbarke01@seattlecentral.edu>
* @version 1.0 2015/05/24
* @link http://www.tcbcommercialproperties.com/sandbox/ci/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Gig_model.php
* @see form.php
* @see index.php
* @todo none
*/

/**
 * Gigs_form controller
 *
 *
 * @see Gig_model.php
 * @todo none
 */
class Gig extends CI_Controller
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

                $this->load->model('gig_model');

                $this->config->set_item('banner', 'Global News Banner');

        }#end constructor

        public function index()
        {//begin function index
                //$data['query'] = $this->gig_model->get_customers();//check this
                $data['query'] = $this->gig_model->get_gigs();//check this
                $data['title']= 'Gig';

                $this->load->view('gigs/index', data);
        }#end function index

        public function add()
        {//create form to add gigs
                $this->load->helper('form');
		$this->config->set_item('title', 'Gig');
		$this->load->view('gigs/add'); //rename view folder gigs/add  add.php is the view
        }#end function addForm()

}#end Gigs class/controller
