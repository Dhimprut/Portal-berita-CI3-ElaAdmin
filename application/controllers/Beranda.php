<?php defined('BASEPATH') OR exit ('No direct script access allowed');
    class Beranda extends CI_Controller {
        public function __construct() 
        {
        parent::__construct ();
        $this->load->model ('M_Artikel');
        $this->load->model ('M_Gallery');
        $this->load->model ('M_Kategori');
        }
        public function index()
	{
		$data['artikel']=$this->M_Artikel->view_artikel();
		$data['kategori']=$this->M_Kategori->view_kategori();
		$data['konten']="view_beranda";
		$this->load->view('template_front',$data);
	}

        public function artikel()

        {
            $data['artikel']= $this->M_Artikel->view_artikel();
            $data['konten']= "view_artikel_front";
            $this->load->view('template_front', $data);
        }

        public function gallery()

        {
            $data['gallery']= $this->M_Gallery->view_gallery();
            $data['konten']= "view_gallery_front";
            $this->load->view('template_front', $data);
        }

        public function view_kategori_front($id)
	{

		$data['artikel']=$this->M_Artikel->kategori($id);
		$data['kategori']=$this->M_Kategori->view_kategori();
		$data['konten']="view_kategori_front";
		$this->load->view('template_front2',$data);
	}
	// Halaman Artikel depan
	public function view_artikel_front()
	{

		$data['artikel']=$this->M_Artikel->view_artikel();
		$data['kategori']=$this->M_Kategori->view_kategori();
		$data['konten']="view_artikel_front";
		$this->load->view('template_front2',$data);
	}

        public function login()

        {
            $data['gallery']= $this->M_Gallery->view_gallery();
            $data['konten']= "view_gallery_front";
            $this->load->view('template_front', $data);
        }

        public function logout()

        {
            
            $this->session->sess_destroy();
            redirect("beranda");
        }


    }
?>