<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_model extends MY_Model
{
    public $surat_id;
    public $kepada;
    public $nomor;
    public $tanggal;
    public $keterangan;
    public $username;

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
            $this->username 	= $post["username"];    
        }

        $return_surat_id    = $this->surat_id;
		$this->kepada 	    = $post["kepada"];
		$this->tanggal 	    = $post["tanggal"];
        $this->nomor 	    = $post["nomor"];
        $this->keterangan   = trim($post["keterangan"]);
        
        if ($is_new == true) {
            log_message('Debug', "New surat");
			return $this->db->insert($this->_table, $this);
		} else {
            log_message('Debug', "Update surat");
			return $this->db->update($this->_table, $this, array('surat_id' => $id));
		}
    }

    
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("surat_id" => $id));
    }    
}