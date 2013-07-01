<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	const USERNAME_KEY = 'username';
	const MESSAGE_TYPE_KEY = 'message_type';
	const MESSAGE_KEY = 'message';
	const MESSAGE_TABLE = 'testTable';

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('test');
	}

	public function index()
	{
	
		$this->form_validation->set_rules($this::USERNAME_KEY,'Username','required');
		$this->form_validation->set_rules($this::MESSAGE_KEY,'Message','required');
		
		if($this->form_validation->run() == FALSE)
		{

			$data = array(
				$this::USERNAME_KEY => $this::USERNAME_KEY,
				$this::MESSAGE_TYPE_KEY  => $this::MESSAGE_TYPE_KEY,				
				$this::MESSAGE_KEY => $this::MESSAGE_KEY,
				'messages' => $this->test->get_all(),
				);
			$this->load->view('welcome_message',$data);
		}else{
			$data_save = array(
				$this::USERNAME_KEY => $this->input->post($this::USERNAME_KEY),
				$this::MESSAGE_TYPE_KEY => $this->input->post($this::MESSAGE_TYPE_KEY),
				$this::MESSAGE_KEY => $this->input->post($this::MESSAGE_KEY),
				);
				
			$this->test->save($data_save);
			$this->load->view('valid_form_message',$data_save);
		}
	}
	
	function tests()
	{
		$users = $this->test->get_all();
		foreach($users as $user) {
			echo $user->username;
		}
	}
	
	function delete($id)
	{
		$this->test->delete($id);
		redirect('welcome');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */