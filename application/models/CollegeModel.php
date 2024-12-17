<?php
class CollegeModel extends CI_Model {

    public function searchCollege($query) {
        $this->db->select('cname');
        $this->db->from('college_master');
        $this->db->like('cname', $query);
        $this->db->order_by('cname', 'ASC');
        $query = $this->db->get();
        return $query;
    }
}
