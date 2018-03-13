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
        $data['books'] = $this->Books_Model->get_books();

        $data['titleHeader'] = 'Books Inventory';
        $this->load->view('books/index', $data); //in the index all the data shows

    }

    public function view($id = NULL)
    {
        $data['books_item'] = $this->Books_Model->get_books($id);

        $data['titleHeader'] = 'Books Inventory';

        if (empty($data['books_item'])) {
            show_404();
        }

        $data['Title'] = $data['books_item']['Title'];

        $this->load->view('books/view', $data); //in the view only the book id shows

    }


    public function create()
    {
////        load the form helper and form validation library => Rules for form validation are set!
        $this->load->helper('form');
        $this->load->library('form_validation');
//
//        //TODO: createHeader is not passed to create.php
        $data['titleHeader'] = 'Create a books item';
//
//      The set_rules() method takes three arguments; the name of the input field,
//      the name to be used in error messages, and the rule.
//      In this case the title and text fields are required.
        $this->form_validation->set_rules('title', 'book title', 'required');
        $this->form_validation->set_rules('author', 'book author', 'required');
        $this->form_validation->set_rules('pages', 'amount of pages', 'required');
        $this->form_validation->set_rules('releaseDate', 'print month-year', 'required');


//      A condition that checks whether the form validation ran successfully.
//      If it did not, the form is displayed, if it was submitted and passed all the rules, the model is called.
//      After this, a view is loaded to display a success message.
//      Create a view at application/views/books/successMessage.php and write a success message.
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('books/create');

        } else {
            $this->Books_Model->set_books();
            $this->load->view('books/successMessage');
        }
    }
}