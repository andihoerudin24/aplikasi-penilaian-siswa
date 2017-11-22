<?php
class Model_siswa extends CI_Model{
    
    
    
    function tampilkan_siswa(){
        
    //ambildata dari table siswa
    return $this->db->get('tbl_siswa');
     }
    
     function tambah_Data(){
               $nim  =$this->input->post('nim');
               $nama  =$this->input->post('nama_siswa');
               $alamat  =$this->input->post('alamat');
         $data=array(
             'nim'=>$nim,
             'nama'=>$nama,
             'alamat'=>$alamat
             );
         $this->db->insert('tbl_siswa',$data);
         
     }
     
     function edit(){
         $data=array
             ('nim' =>  $this->input->post('nim'),
              'nama'=>  $this->input->post('nama_siswa'),
              'alamat'=>  $this->input->post('alamat'),
             );
             $this->db->where('id_siswa',  $this->input->post('id'));
             $this->db->update('tbl_siswa',$data);
         
     }
    
    
    
}



?>