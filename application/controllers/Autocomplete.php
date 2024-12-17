<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autocomplete extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('CollegeModel'); 
    }

    public function fetchCollege() {
        $query = $this->input->post('query');
        if ($query) {
            $result = $this->CollegeModel->searchCollege($query);  
            $output = '<option value="">Select College</option>';  
            if ($result->num_rows() > 0) {
                foreach ($result->result() as $row) {
                    $output .= '<option value="' . $row->cname . '">' . $row->cname . '</option>';
                }
            } else {
                $output .= '<option value="" disabled>No College Found</option>';
            }
            echo $output;
        }
    }
}
