<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
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
                header('location:'.base_url());
            }
            else{
				/**
				 * Jika Berhasil Upload
				 */
                $file = $this->upload->data("file_name");
				$this->session->set_flashdata('file', $file);
                header('location:'.base_url());
            }
        }else{
			/**
			 * Jika Tidak ada file
			 */
			//$error=$this->upload->display_errors();
            $this->session->set_flashdata('error', 'No File Selected');
            header('location:'.base_url());
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
