<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {
    function getVideo(){
        $this->db->join('tb_dosen a','a.idx=c.dosenid');
        $this->db->join('tb_mtk b','b.idx=c.mtkid');
        return $this->db->get('tb_video c')->result();
    }
    function getVideoByid($id){
        $this->db->where('c.idx', $id);
        $this->db->join('tb_dosen a','a.idx=c.dosenid');
        $this->db->join('tb_mtk b','b.idx=c.mtkid');
        return $this->db->get('tb_video c')->row();
    }
    function getDosen(){
        return $this->db->get('tb_dosen')->result();
    }
    function getMtk(){
        return $this->db->get('tb_mtk')->result();
    }
    function insertVideo($data){
        $this->db->insert('tb_video',$data);
        return $this->db->insert_id();
    }
}
