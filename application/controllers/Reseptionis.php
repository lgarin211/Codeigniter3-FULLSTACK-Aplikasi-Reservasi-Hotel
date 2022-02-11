<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reseptionis extends CI_Controller {

	public function index()
	{
		$this->load->view('master/login');
	}
    public function Dataput()
    {
        var_dump($_SERVER['HTTP_REFERER']);die;
    }

    public function call()
    {
        $view=$_GET['v'];
        $t=$_GET['t'];
        if (!empty($_POST)) {
            foreach ($_POST as $key => $value) {
                $this->db->like($key,$value);
            }
        }
        $t = $this->db->get($t)->result();
        // var_dump($t);die;
        $this->load->view('restion/'.$view,['data'=>$t]);

    }   

    public function payed()
    {   
        var_dump($_GET['id']);
        $this->db->set($_GET['f'], $_GET['v']);
        $this->db->where('id_pesanan', $_GET['id']);
        $this->db->update('pemesanan'); 
        

        // $this->db->set('PayEND', 1);
        // $this->db->where('id', $_GET['id']);
        // $this->db->update('pemesanan'); 

        redirect($_SERVER['HTTP_REFERER']);
        
    }
    public function DataTrack()
    {

        if (!empty($_GET['ref'])) {
            $car=$_GET['ref'];
            $this->db->where('RefPB', $car);
            $this->db->select('*');
            $this->db->from('pemesanan');
            $this->db->join('Tipe_room', 'Tipe_room.id = pemesanan.id_kamar');
            $yourbooked = $this->db->get()->result();
            $data['book']=$yourbooked;
            $data['id']=$car;
            // var_dump($data);die;
            $this->load->view('restion/ref',['data'=>$data]);
        }else{
            $this->load->view('restion/find');
        }  
    }
}
