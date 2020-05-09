<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_model extends MY_Model
{
    public $surat_id;
    public $kepada;
    public $nomor;
    public $tanggal;
    public $keterangan;
    public $username;
    public $photo1;
    public $photo2;
    public $photo3;
    public $photo4;
    public $photo5;


    public function __construct()
    {
        parent::__construct();
        $this->_table ="surat";
    }

    public function rules()
    {
        return [
            ['field' => 'nomor',
            'label' => 'Nomor',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required'],

            ['field' => 'kepada',
            'label' => 'Kepada',
            'rules' => 'required'],
            
            ['field' => 'tanggal',
            'label' => 'Tanggal',
            'rules' => 'required']
        ];
    }

    private function _uploadImage($nomor_image)
    {
        $config['upload_path']          = './photo/surat/';
        $config['allowed_types']        = 'png';
        $config['file_name']            = $this->surat_id . "_" . $nomor_image;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        
        $this->load->library('upload', $config);
        
        
        $this->upload->initialize($config);
        if ($this->upload->do_upload('photo' . $nomor_image)) {
            $nama_file = $this->upload->data("file_name");
            unset($this->upload);

            return $nama_file;
        }
        
        return "no_images.png";
    }

    private function _deleteImage($id)
    {
        $product = $this->getById($id);
        if ($product->image != "default.jpg") {
            $filename = explode(".", $product->image)[0];
            return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
        }
    }

	private function generateSQL($number,$offset, $first_date, $second_date, $filter_like = null){
		$sql = "select * from " . $this->_table . " where 1 =  1";
        if (!empty($filter_like)) {
			$sql = $sql . " and (nomor like '%" . $filter_like . "' or kepada like '" . $filter_like ."' or keterangan like '". $filter_like . "')";
		}
		
		return $sql;
	}
    
	function data($number,$offset, $first_date, $second_date, $filter_like = null){
        $sql = $this->generateSQL($number,$offset, $first_date, $second_date, $filter_like = null);        
        return $query = $this->db->query($sql)->result();		
	}
 
	function jumlah_data($first_date, $second_date,$no_transaksilike = null ){  
        $sql = $this->generateSQL(1,10000, $first_date, $second_date, $filter_like = null);
		return $this->db->query($sql)->num_rows();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["surat_id" => $id])->row();
    }

   
    public function save(&$return_surat_id)
    {
        $post = $this->input->post();
        $id = $post["surat_id"];
        
		if ($id ==""){
            $this->surat_id = uniqid();
            $this->username = $_SESSION['user_logged']->username;
			$is_new = true;
		} else {
            $is_new = false;
            $this->surat_id   = $id;
            $this->username   = $post["username"];    
        }

        $return_surat_id    = $this->surat_id;
		$this->kepada 	    = $post["kepada"];
		$this->tanggal 	    = $post["tanggal"];
        $this->nomor 	    = $post["nomor"];
        $this->keterangan   = trim($post["keterangan"]);

        $this->photo1       = $post["hphoto_1"];
        if ($this->photo1 == ""){
            $this->photo1 = "no_images.png";
        }

        $this->photo2       = $post["hphoto_2"];
        if ($this->photo2 == ""){
            $this->photo2 = "no_images.png";
        }

        $this->photo3       = $post["hphoto_3"];
        if ($this->photo3 == ""){
            $this->photo3 = "no_images.png";
        }

        $this->photo4       = $post["hphoto_4"];
        if ($this->photo4 == ""){
            $this->photo4 = "no_images.png";
        }

        $this->photo5       = $post["hphoto_5"];
        if ($this->photo5 == ""){
            $this->photo5 = "no_images.png";
        }

        for ($i=1; $i <= 5; $i++) { 
            $nama_komponen_image = "photo" . $i; 
            if (!empty($_FILES[$nama_komponen_image]['name']))
            {
                switch ($i) {
                    case 1:
                        $this->photo1 = $this->_uploadImage($i);
                        break;
                    
                    case 2:
                        $this->photo2 = $this->_uploadImage($i);
                        break;

                    case 3:
                        $this->photo3 = $this->_uploadImage($i);
                        break;

                    case 4:
                        $this->photo4 = $this->_uploadImage($i);
                        break;

                    case 5:
                        $this->photo5 = $this->_uploadImage($i);
                        break;
                }
                
            }
        }
        
        if ($is_new == true) {
            log_message('Debug', "New surat");

            
            
			return $this->db->insert($this->_table, $this);
		} else {
            log_message('Debug', "Update surat");
			return $this->db->update($this->_table, $this, array('surat_id' => $id));
		}
    }

    public function hapusphoto($id, $nomor){
        $data = [
            "photo" . $nomor => 'no_images.png',
        ];

        $this->db->where('surat_id', $id);
        return $this->db->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("surat_id" => $id));
    }    
}