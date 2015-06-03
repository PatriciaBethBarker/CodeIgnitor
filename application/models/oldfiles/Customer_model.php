<?php
/**
* Customer_model.php   model for a generic Customer
*
* Used to show how to do CRUD in CodeIgnitor
*
* @package ITC 260 CodeIgnitor
* @subpackage CONTROLLER
* @author Patricia Barker <pbarke01@seattlecentral.edu>
* @version 1.0 2015/05/05
* @link http://www.tcbcommercialproperties.com/sandbox/index.html
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Customer.php
* @see index.php
* @todo none
*/

/**
 * Customer model for our CRUD demo
 *
 * @see Customer
 * @todo none
 */
class Customer_model extends CI_Model {
        
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
       
       public function get_customers()
       {
        //return "Hello from the Customer model!";
        return $this->db->get('test_customers');
       }#end get_customers()
       
        /* public function get_news($slug = FALSE)
        *{
        *     if ($slug === FALSE)
        *      {
        *        $query = $this->db->get('news');
        *       return $query->result_array();
        *   }
        *
        *        $query = $this->db->get_where('news', array('slug' => $slug));
        *        return $query->row_array();
        *     }#end get news
        */
       
        /* public function set_news()
        *{
        *    $this->load->helper('url');
        *
        *    $slug = url_title($this->input->post('title'), 'dash', TRUE);
        *
        *    $data = array(
        *        'title' => $this->input->post('title'),
        *        'slug' => $slug,
        *        'text' => $this->input->post('text')
        *    );
        *
        *    return $this->db->insert('news', $data);
        *}
        */
        
        /*
        * public function get_rss($request)
        *{
        *   $request= 'http://rss.news.yahoo.com/rss/software';
        *    $response = file_get_contents($request);
        *    return simplexml_load_string($response);
        }*/
}
#end of the Customer_model