<?php

class Siswa extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_siswa');
    }

    function index() {
        //tampilkan nama siswa
        $data['record'] = $this->Model_siswa->tampilkan_siswa();
        $this->load->view('Tampil_siswa', $data);
    }
    
    function tambah_data(){
        if (isset($_POST['submit'])) {
            $this->Model_siswa->tambah_Data();
            redirect('siswa');
        }else {
            $this->load->view('Siswa/tambah_data');
        }
    }
    
    function Edit(){
        if (isset($_POST['submit'])) {
           $this->Model_siswa->edit();
           redirect('Siswa');
        }
        else{
        $id=$this->uri->segment(3);
        $data['tampil']=  $this->db->get_where('tbl_siswa',array('id_siswa'=>$id))->row_array();
        $this->load->view('Siswa/Edit_Data',$data);    
        }
        
    }
    
    function hapus(){
        $id=  $this->uri->segment(3);
        $this->db->where('id_siswa',$id);
        $this->db->delete('tbl_siswa');
    
        redirect('siswa');    
    }
    
    
    
    

}

?>