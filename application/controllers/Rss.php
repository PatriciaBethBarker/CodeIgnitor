
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Rss extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('rss_model');
        $this->config->set_item('banner', 'RSS Feed');
        $this->config->set_item('title', 'RSS Feed');
    }

	public function index()
	{
        //assigns xml object to data["stories"] array variable
        $data["stories"] = $this->rss_model->get_stories();
        //passes data to view template
      	$this->load->view('rss/index', $data);
	}
}
