<?php
class Books extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Books_Model');
    }

    public function index()
    {
        $data['Books'] = $this->Books_Model->get_news();

        $data['titleHeader'] = 'Books Inventory';
        $this->load->view('books/index', $data); //in the index all the data shows

    }

    public function view($id = NULL)
    {
        $data['books_item'] = $this->Books_Model->get_news($id);

        if (empty($data['books_item'])) {
            show_404();
        }

        $data['title'] = $data['books_item']['title'];

        $this->load->view('books/view', $data); //in the view only the book id shows

    }


//    public function create()
//    {
////        load the form helper and form validation library => Rules for form validation are set!
//        $this->load->helper('form');
//        $this->load->library('form_validation');
//
//        $data['title'] = 'Create a news item';
//
////      The set_rules() method takes three arguments; the name of the input field,
////      the name to be used in error messages, and the rule.
////      In this case the title and text fields are required.
//        $this->form_validation->set_rules('title', 'Title', 'required');
//        $this->form_validation->set_rules('text', 'Text', 'required');
//
//
////      A condition that checks whether the form validation ran successfully.
////      If it did not, the form is displayed, if it was submitted and passed all the rules, the model is called.
////      After this, a view is loaded to display a success message.
////      Create a view at application/views/news/success.php and write a success message.
//        if ($this->form_validation->run() === FALSE) {
//            $this->load->view('templates/header', $data);
//            $this->load->view('news/create');
//            $this->load->view('templates/footer');
//
//        } else {
//            $this->news_model->set_news();
//            $this->load->view('news/success');
//        }
//    }
}