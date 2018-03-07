<?php
class News extends CI_Controller {

// The __construct() method: it calls the constructor of its parent class (CI_Controller) and loads the model,
// so it can be used in all other methods in this controller.
// It also loads a collection of URL Helper functions, because we’ll use one of them in a view later.
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }


// There are two methods to view all news items and one for a specific news item.
// You can see that the $slug variable is passed to the model’s method in the second method.
// The model is using this slug to identify the news item to be returned.
// Now the data is retrieved by the controller through our model, but nothing is displayed yet.
// The next thing to do is passing this data to the views.
    public function index()
    {
        $data['news'] = $this->news_model->get_news();
    }

    public function view($slug = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($slug);
    }
}