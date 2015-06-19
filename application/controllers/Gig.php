<?php
/**
* Gig.php controller for Gigs at SCC
*
* Used to show how to do CRUD in CodeIgnitor
*
* @package ITC 260 Gig Central CodeIgnitor
* @subpackage Gigs_form
* @author Patricia Barker <patriciabethbarker@gmail.com>
* @version 2.2 2015/06/12
* @link http://www.tcbcommercialproperties.com/sandbox/codeignitor/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Gig_model.php
* @see view/gigs/add.php
* @see view/gigs/view.php
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

                $this->load->view('gigs/index', $data);
        }#end function index

        
        public function view($id = NULL) {
                        //echo ("can you see this");
                        
                        $data['gigs'] = $this->gig_model->get_gigs($id);
                        
                        
                        
                        
                        

                        
               // this is where it breaks on June 18 at 6PM   $data['title']= $data['Gig']['title'];
               
               
               
               
               
               
               
                $this->load->view('gigs/view', $data);        
        }#end function view
        


        //public function view($id = NULL)//change to id parameter
        //{//begin function view
        //
        //$data['gigs'] = $this->gig_model->get_gigs($id);//check this
        //
        //if (empty($data['gig']))
        //{
        //        show_404();
        //}
        //
        //$data['title']= $data['Gig']['title'];
        //$this->load->view('gigs/view', $data);
        //}#end function view







        public function add()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');
        
                $data['title'] = 'Add a new gig';
        
                $this->form_validation->set_rules('CompanyName', 'Company Name', 'required');
                $this->form_validation->set_rules('Email', 'Email', 'required');
        
        if ($this->form_validation->run() === FALSE)
        {//create form to add gigs
   
                $this->load->view('gigs/add', $data); //rename view folder gigs/add  add.php is the view
        }
        else
        {//this processes
 
                $this->gig_model->add_gig();
                $this->load->view('templates/header', $data);
                $this->load->view('gigs/view');
                $this->load->view('templates/footer');
        }   

        }#end function addForm()






}#end Gigs class/controller
