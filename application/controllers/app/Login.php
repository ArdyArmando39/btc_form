<?php
class Login extends CI_Controller {

	function __construct() {
		date_default_timezone_set('Asia/Jakarta');
		parent::__construct();
	}

	function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->session->unset_userdata('pwdexpire_username');
		$this->session->unset_userdata('pwdexpire_userrole');
		// get user session name
		$nik = $this->session->userdata('session_hola_nik');		//null if not login
		$data['session_hola_nik'] = $nik;
		$data['current_page'] = "";
		if(!empty($nik))
		{
			$this->session->set_flashdata('successlogin', 'welcome');
			redirect('app/home');
		} else {
			$this->load->view('app/login_template');
		}
	}
// Ldap login - ------------------------------
	function check_login(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$password = md5($pass);
		$result = $this->Madminuser->check_ldap($username,$password);
		if($result==1){
			$userinfo = $this->Madminuser->get_info($username);
			foreach($userinfo as $data){
				$nama = $data->nama;
				$username = $data->username;
			}
			$time = time();
			$usersession = array(
				'session_hola_nik' => $username,
				'session_hola_name' => $nama,
			);
			$this->session->set_userdata($usersession);
			redirect('app/home');

		} else {
			$this->session->set_flashdata('eror', 'eror');
			redirect('app/login');
		}
}
// end  login - ------------------------------

function logout(){
	date_default_timezone_set('Asia/Jakarta');
	$nik = $this->session->userdata('session_hola_nik');		//null if not login
	if($nik != ""){
		$this->session->unset_userdata('session_hola_nik');
	}
		$this->session->set_flashdata('logout', 'logout');
		redirect('app/login');
	}
	//$nik_test = '920547';
}
/* End of file  */
/* Location: ./system/application/controllers/admin/login.php */
