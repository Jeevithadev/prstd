<?php 
	class User_model1 extends CI_Model{
		public function store($data){
			$this->db->insert('user',$data);
			return true;
		}
		public function getUser($email){
			return $this->db->where('email',$email)->get('user')->row();
		}

		public function changeUserPassword($id,$new_password){
			$this->db->set('password',$new_password)->where('username',$id)->update('user_login');
		
		}

		public function oldPasswordMatches($id, $old_password){
			$query = $this->db->where('username',$id)->where('password',$old_password)->get('user_login');
			if($query->num_rows()>0){
				return true;
			}
			return false;
		}
	}


?>
