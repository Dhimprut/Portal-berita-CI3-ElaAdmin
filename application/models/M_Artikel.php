<?php defined('BASEPATH') OR exit('No direct script acces allowed');
class M_Artikel extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function kategori ($id)
	{
		return $this->db->query("SELECT * FROM tbl_artikel AS ta JOIN tbl_kategori AS tk ON ta.`id_kategori` = tk.`id_kategori` WHERE ta.id_kategori=$id")->result();
	}


    public function view_artikel()
    {
        
    return $this->db->query("SELECT * FROM tbl_artikel AS ta JOIN tbl_kategori AS tk ON ta. id_kategori = tk. id_kategori ")->result();
    
    }
    public function proses_tambah()
    {
        $data=array(
            "nama_artikel"=>$this->input->post('nama_artikel'),
            "id_kategori"=>$this->input->post('id_kategori'),
            "isi_artikel"=>$this->input->post('isi_artikel'),
        );
        $this->db->insert("tbl_artikel",$data);
    }
    public function edit_artikel($id)
    {
        $this->db->where("id_artikel",$id);
        return $this->db->get("tbl_artikel")->row();
    }
    public function proses_edit($id)
    {
        $data=array(
            "nama_artikel"=>$this->input->post('nama_artikel'), 
            "id_kategori"=>$this->input->post('id_kategori'),
            "isi_artikel"=>$this->input->post('isi_artikel'),
        );
        $this->db->where("id_artikel",$id);
        return $this->db->update("tbl_artikel",$data);
    }
    public function hapus_artikel($id)
    {
        $this->db->where("id_artikel",$id);
        return $this->db->delete("tbl_artikel");
   
}
}
?>

    