<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
    {
        parent::__construct();   
        $this->load->model('Products_model','datamodel');     
    }
	   
	
	public function index($id='')
	{
		 $jml = $this->db->get('products');
		
		//pengaturan pagination
		 $config['base_url'] = base_url().'backend/products/index';
		 $config['total_rows'] = $jml->num_rows();
		 $config['per_page'] = '15';
		 $config['first_page'] = 'Awal';
		 $config['last_page'] = 'Akhir';
		 $config['next_page'] = '&laquo;';
		 $config['prev_page'] = '&raquo;';
		 $config['last_link'] = 'Awal';
		 $config['first_link'] = 'Akhir';
		 $config['uri_segment'] = 4;
		 
		 
		
		
		//inisialisasi config
		 $this->pagination->initialize($config);
		 
		 $data['title']='List Of Products';	
		
		//buat pagination
		 $data['halaman'] = $this->pagination->create_links();
		 
		 //membuat nomor
		  $data['no'] = $id;
		
		//tamplikan data
		 $data['array_produk'] = $this->datamodel->ambil_produk($config['per_page'], $id);
		
		 $this->mytemplate->loadBackend('products',$data);
	}
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
