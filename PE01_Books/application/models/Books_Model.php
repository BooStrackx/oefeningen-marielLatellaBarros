<?php
class Books_Model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_books($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('books');
            return $query->result_array();
        }

        $query = $this->db->get_where('books', array('id' => $id));
        return $query->row_array();
    }


    //'Title' is the name of the column in the database table. It is case insensitive! So it doesn't matter how it is written!
    public function set_books()
    {
        $data = array(

            'Title' => $this->input->post('title'),
            'Author' => $this->input->post('author'),
            'Pages' => $this->input->post('pages'),
            'ReleaseDate' => $this->input->post('releaseDate'),

        );

        return $this->db->insert('books', $data);
    }

}