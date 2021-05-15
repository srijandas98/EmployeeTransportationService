<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details_Model extends CI_Model
{
	function fetch_degree() 
	{
		$this->db->order_by('degree_name', 'ASC');
		$query = $this->db->get('degree');
		//print_r($query->result());
		return $query->result();
	}

	function fetch_type($degree_id)
	{
		$this->db->where('type_degree_id',$degree_id);
		$this->db->order_by('type_name','ASC');
		$query = $this->db->get('type');
		//print_r($query->result());
		$output = '<option value ="">Select Your Field';
		foreach ($query->result() as $row)
		{
			$output .= '<option value ="'.$row->type_id.'">'.$row->type_name.'</option>';		
		}
		return $output;	
	}

	function fetch_leaf($type_id)
	{
		$this->db->where('leaf_type_id',$type_id);
		$this->db->order_by('leaf_name','ASC');
		$query = $this->db->get('leaf');
		$output = '<option value ="">Select Your Field</option>';
		foreach ($query->result() as $row)
		{
			$output .= '<option value ="'.$row->leaf_id.'">'.$row->leaf_name.'</option>';		
		}
		return $output;	

	}
	function update_education($leaf_id)
	{
		$this->db->where('account_no',$this->session->userdata('acc_no'));
        $new_query = $this->db->get('basic_details');

		$this->db->where('leaf_id',$leaf_id);
		$query = $this->db->get('leaf');

		if($new_query->num_rows() > 0)
		{
			foreach ($new_query->result() as $row1)
			{
				if($query->num_rows() > 0)
      			{
        			foreach($query->result() as $row2)
        			{
        				$data = [
                      'HighestQualification' => $row2->leaf_name,
                      'leaf_score' => $row2->value
                    ];
	                    $this->db->where('account_no',$this->session->userdata('acc_no'));
	                    $this->db->update('basic_details',$data);
	                	return 'Database Updated Successfully';
        			}
				}
			}
		}	
		else
		{
			if($query->num_rows() > 0)
      		{
        		foreach($query->result() as $row)
        		{
	        		$data = array(
	        		'account_no' => $this->session->userdata('acc_no'),
	        		'HighestQualification' => $row->leaf_name,
	        		'leaf_score' => $row->value
	        		);
	        		$this->db->insert('basic_details', $data);
        		}
        		return $row->value;
        	}
        	else
        	{
        		return 'Please Enter Your Complete Educational Details';
        	}	

		}	
	}
} 
?>