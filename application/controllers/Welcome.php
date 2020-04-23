<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct(){
        parent ::__construct();
        
        $this->load->model('welcome_model');
    }
	public function index()
	{
        $data=array(
            'header'    => "List Video",
            'video' => $this->welcome_model->getVideo()
        );
        $data["kontent"]=$this->load->view("content/view_list_video",$data, true);
		$this->load->view('welcome_message',$data);
	}
	function tambah(){
        $data=array(
            'header'    => "List Video",
            'dosen'     => $this->welcome_model->getDosen(),
            'mtk'       => $this->welcome_model->getMtk()
        );
        $data["kontent"]=$this->load->view("content/view_tambah",$data, true);
		$this->load->view('welcome_message',$data);
    }
    function detail($id){
        $data=array(
            'header'    => "Priview Video",
            'row'   => $this->welcome_model->getVideoByid($id)
        );
        $data["kontent"]=$this->load->view("content/view_detail",$data, true);
		$this->load->view('welcome_message',$data);
    }
	function upload()
    {

		$file="FILE_" .date('dmY') ."_" .$_FILES['userfile']['name'];
		
        $this->_file_upload('./upload',$file,'mp4|avi|3gp');
        if($_FILES['userfile']['name']!=""){
			echo $_FILES['userfile']['name'];
            if (!$this->upload->do_upload()){
				/**
				 * Jika Gagal Upload
				 */
                $error=$this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                header('location:'.base_url() ."welcome/tambah");
            }
            else{
				/**
				 * Jika Berhasil Upload
				 */
                $file = $this->upload->data("file_name");
                $data=array(
                    'dosenid'   => $this->input->post('dosen'),
                    'mtkid'     => $this->input->post('mtk'),
                    'keterangan'=> $this->input->post('keterangan'),
                    'namafile'  => $file
                );
                $insertid=$this->welcome_model->insertVideo($data);
				$this->session->set_flashdata('file', $file);
                header('location:'.base_url() ."welcome/detail/".$insertid);
            }
        }else{
			/**
			 * Jika Tidak ada file
			 */
			//$error=$this->upload->display_errors();
            $this->session->set_flashdata('error', 'No File Selected');
            header('location:'.base_url() ."welcome/tambah");
		}
	}
	
	public function _file_upload($path,$filename,$filetype){
        $config['upload_path']          = $path;
        $config['allowed_types']        = $filetype;
        $config['max_size']             = 10000;
        $config['max_width']            = 1200;
        $config['max_height']           = 800;
        $config['overwrite']        = true;
        $config['file_name']            = $filename;
        $this->load->library('upload', $config);
    }

}
