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


}