<?php
// News.php controller
class News extends CI_Controller {

        public function __construct()
        { //everything here is global to the controller all methods and all functions
                parent::__construct();
                $this->load->model('news_model');
                $this->config->set_item('banner','Global News Banner');
        }#end constructor

        public function index($slug = NULL)  //take data through index, pass thru model create switch statement
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'News archive';
                $this->load->view('news/index', $data);
                
        }#end index

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
                {
                        show_404();
                }

                $data['title'] = $data['news_item']['title'];
                $this->load->view('news/view', $data); //so here we need to make changesd to the view foler
        }#end view
        
        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a news item';

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('text', 'text', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('news/create');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->news_model->set_news();
                $this->load->view('news/success');
            }
        }    
}