<?php
class Books_Model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('books');
            return $query->result_array();
        }

        $query = $this->db->get_where('books', array('id' => $id));
        return $query->row_array();
    }


//  Inserts new items into the database
    public function set_books()
    {
        $data = array(

            'title' => $this->input->post('Title'),
            'author' => $this->input->post('Author'),
            'pages' => $this->input->post('Pages'),
            'releaseDate' => $this->input->post('ReleaseDate'),

        );

        return $this->db->insert('books', $data);
    }

}