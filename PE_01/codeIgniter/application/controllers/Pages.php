<!--http://example.com/[controller-class]/[controller-method]/[arguments]-->
<!--You have created a class named Pages, with a view method that accepts one argument named $page. -->
<!--The Pages class is extending the CI_Controller class.-->
<!--The controller is what will become the center of every request to your web application. -->
<!--Like any php class, you refer to it within your controllers as $this. -->
<!--Referring to $this is how you will load libraries, views, and generally command the framework.-->
<?php
class Pages extends CI_Controller {

    public function view($page = 'home')
    {
//        In order to load those pages, you’ll have to check whether the requested page actually exists:
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404(); //built-in CodeIgniter function
        }


        $data['title'] = ucfirst($page); // Capitalize the first letter "home" => "Home" ==> $title: Home

//        load the views in the order they should be displayed
//        Each value in the $data array is assigned to a variable with the name of its key.
//        So the value of $data['title'] in the controller is equivalent to $title in the view.
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);

    }
}