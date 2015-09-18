<?php
class Classifications_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_classifications()
		{
  
			$query = $this->db->get('classifications');
			return $query->row_array();
		}
}