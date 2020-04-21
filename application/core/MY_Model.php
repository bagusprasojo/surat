<?php
class MY_Model extends CI_Model {

    protected $_table = "";
    protected $_field_nomor_transaksi = "no_transaksi";
    
    function __construct()
    {
        parent::__construct();
    }

    function GetNextNumber(){
        $format = "0000000000";
        $sql = "select max(" . $this->_field_nomor_transaksi . ") as nomor from " . $this->_table;
        $query = $this->db->query($sql)->row();

        if ($query->nomor == 0){
            $query->nomor = 1;
        } else {
            $query->nomor = $query->nomor + 1;
        }
        $nextn_nomor = $format . $query->nomor;
        $nextn_nomor = substr($nextn_nomor,-10);
        return $nextn_nomor;
    }

    

}