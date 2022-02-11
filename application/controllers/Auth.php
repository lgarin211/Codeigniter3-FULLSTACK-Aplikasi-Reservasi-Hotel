<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function __construct()
        {
                parent::__construct();
                $this->CekLogin();
        }

    public function CekLogin($value='')
    {
    	if (empty($_GET['out'])) {
	    	if (!empty($_SESSION['user'])) {
	    		$this->Leving();
	    	}else{
	    		// redirect('/Auth/login');
	    	}
    	}
    }
    public function Logout()
    {
    	session_destroy();
    	redirect('/');
    }
    public function Register()
    {
		$this->load->view('Auth/register');
    }

    public function addusers()
    {

    	$data=$_POST;
    	$data += array(
        'level' => 'tamu'
		);

    	// var_dump($data);die;
    	$this->db->insert('users', $data);
    	
    	redirect('/Auth/login');

	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login()
	{
		$this->load->view('Auth/login');
	}

	public function cekusers()
	{
		// var_dump($_POST);
		$username=$_POST['username'];
		$password=$_POST['password'];

		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$login=$this->db->get('users')->result();
		if (empty($login)) {
			redirect('/Auth/login');
		}
		$_SESSION['user']=$login[0];
		$this->Leving();
	}

	public function Leving()
	{
		// var_dump($_SESSION);
		if ($_SESSION['user']->level=="tamu") {
			redirect('/Tamu/TipeKamar');
		}
		if ($_SESSION['user']->level=="resepsionis") {
			redirect('/Reseptionis/DataTrack');
		}
		if ($_SESSION['user']->level=="admin") {
			redirect('/');
		}
	}
}
