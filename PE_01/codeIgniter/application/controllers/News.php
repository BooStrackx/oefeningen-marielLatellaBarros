<?php
class News extends CI_Controller
{

//  The __construct() method: it calls the constructor of its parent class (CI_Controller) and loads the model,
//  so it can be used in all other methods in this controller.
//  It also loads a collection of URL Helper functions, because we’ll use one of them in a view later.
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }


//  There are two methods to view all news items and one for a specific news item.
//  You can see that the $slug variable is passed to the model’s method in the second method.
//  The model is using this slug to identify the news item to be returned.
//  Now the data is retrieved by the controller through our model, but nothing is displayed yet.
//  The next thing to do is passing this data to the views.
    public function index()
    {
        $data['news'] = $this->news_model->get_news();

        $data['title'] = 'News archive';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }
//  The code above gets all news records from the model and assigns it to a variable.
//  The value for the title is also assigned to the $data['title'] element and all data is passed to the views.


//  Instead of calling the get_news() method without a parameter, the $slug variable is passed,
//  so it will return the specific news item.
//  The only things left to do is create the corresponding view at application/views/news/view.php.
    public function view($slug = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item']))
        {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }

//  Two things here, check whether the form was submitted and whether the submitted data passed the validation rules
//  (by using the "form validation library")
    public function create()
    {
//        load the form helper and form validation library => Rules for form validation are set!
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';

//      The set_rules() method takes three arguments; the name of the input field,
//      the name to be used in error messages, and the rule.
//      In this case the title and text fields are required.
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');


//      A condition that checks whether the form validation ran successfully.
//      If it did not, the form is displayed, if it was submitted and passed all the rules, the model is called.
//      After this, a view is loaded to display a success message.
//      Create a view at application/views/news/success.php and write a success message.
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