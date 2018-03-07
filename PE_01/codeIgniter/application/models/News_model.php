<!--This code looks similar to the controller code that was used earlier.
It creates a new model by extending CI_Model and loads the database library.
This will make the database class available through the $this->db object.-->
<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }


//With this code you can perform two different queries. You can get all news records, or get a news item by its slug.
// You might have noticed that the $slug variable wasn’t sanitized before running the query;
// Query Builder does this for you.
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }


//  Inserts new items into the database
    public function set_news()
    {
        $this->load->helper('url');

//      This function - provided by the URL helper - strips down the string you pass it,
//      replacing all spaces by dashes (-) and makes sure everything is in lowercase characters.
//      This leaves you with a nice slug, perfect for creating URIs.
        $slug = url_title($this->input->post('title'), 'dash', TRUE);


//      Prepare the record that is going to be inserted later, inside the $data array.
//      Each element corresponds with a column in the database table created earlier.
//      You might notice a new method here, namely the post() method from the input library.
//      This method makes sure the data is sanitized, protecting you from nasty attacks from others.
//      The input library is loaded by default. At last, you insert our $data array into our database.
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }
    // Don't forget to update routings!!!
    // Make sure your file contains the following. This makes sure CodeIgniter sees ‘create’ as a method
    // instead of a news item’s slug.

}