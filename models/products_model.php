=<?php
class Products_model extends CI_Model {
    

    function __construct()
    {        
        parent::__construct();
    }
    
	
	public function ambil_produk($a, $b)
	{
		$this->db->order_by('ProductName', 'ASC');
		$data = $this->db->get('products', $a, $b);
		return $data->result();
	}

}
