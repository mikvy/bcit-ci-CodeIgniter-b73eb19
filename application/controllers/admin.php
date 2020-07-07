<?php
/**
 *
 */
class Admin extends MY_Controller
{

  public function index()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('password','Password','required|max_length[12]');
    $this->form_validation->set_error_delimiters('<div class="text-danger">! ','</div>');
    if($this->form_validation->run())
    {
      $username=$this->input->post('username');
      $password=$this->input->post('password');
      $this->load->model('loginmodel');
      $id=$this->loginmodel->isvalidate($username,$password);
      if($id)
      {
        $this->load->library('session');
        $this->session->set_userdata('id',$id);
        return redirect('Admin/welcome');
      }
      else{
        echo "Details not match";
      }
    }
    else {
      $this->load->view('Admin/login');
    }
  }
  public function welcome()
  {
    $this->load->view('Admin/dashboard');

  }
}

 ?>
