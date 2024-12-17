<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datamodel extends CI_Model {

   function getEqi($postData=null){

     $response = array();

     ## Read value
     $draw = $postData['draw'];
     $start = $postData['start'];
     $rowperpage = $postData['length']; // Rows display per page
     $columnIndex = $postData['order'][0]['column']; // Column index
     $columnName = $postData['columns'][$columnIndex]['data']; // Column name
     $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
     $searchValue = $postData['search']['value']; // Search value

     ## Search 
     $searchQuery = "";
     if($searchValue != ''){
        $searchQuery = " (name like '%".$searchValue."%' or college like '%".$searchValue."%' or displine like'%".$searchValue."%' ) ";
     }

     ## Total number of records without filtering
     $this->db->select('count(*) as allcount');
     $records = $this->db->get('studentfi')->result();
     $totalRecords = $records[0]->allcount;

     ## Total number of record with filtering
     $this->db->select('count(*) as allcount');
     if($searchQuery != '')
        $this->db->where($searchQuery);
     $records = $this->db->get('studentfi')->result();
     $totalRecordwithFilter = $records[0]->allcount;

     ## Fetch records
     $this->db->select('*');
     if($searchQuery != '')
        $this->db-> where ($searchQuery);
     $this->db->order_by($columnName, $columnSortOrder);
     $this->db->limit($rowperpage, $start);
     $records = $this->db->get('studentfi')->result();

     $data = array();

     
 
     
     
     foreach($records as $record ){

        $data[] = array( 
           "name"=>$record->name,
           "displine"=>$record->displine,
           "degree"=>$record->degree,
           "college"=>$record->college,
             "txtFromDate"=>$record->txtFromDate,
             "txtTodate"=>$record->txtTodate,
           "group1"=>$record->group1,
            "gudide"=>$record->gudide
        ); 
     }

     ## Response
     $response = array(
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data
     );

     return $response; 
   }

   
  function getEqi1()
	{
	$this->db->select('*');
        $this->db->from('studentfi');
        $query=$this->db->get();
	return $query->result();
	} 
   
}