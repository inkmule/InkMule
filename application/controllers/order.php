<?php if (!defined('BASEPATH')) die();
class Order extends Main_Controller
{
	public function index()
	{
		
	}
	
	function create()
	{
		
		//get shirt types and populate array for form
		$shirts = array();
		
		$this->db->order_by('vendor', 'model'); 
		$query = $this->db->get('shirts');
		foreach ($query->result() as $row)
		{
		    $this_shirt = array(
		    	'id' => $row->id,
				'vendor' => $row->vendor,
				'model' => $row->model,
				'shortdescription' => $row->shortdescription,
				'longdescription' => $row->longdescription
		    );
		
			array_push($shirts, $this_shirt);
			unset($this_shirt);
		}
		
		$this->view_data['shirt_types'] = $shirts;
	}
}