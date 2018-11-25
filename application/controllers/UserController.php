<?php
class UserController extends CI_Controller {
    public function __construct() {
        parent::__construct ();
    }
    public function index() {
        $this->load->view ( "register" );
    }
    public function register() {
        $name = $this->input->post ( 'name' );
        $password = $this->input->post ( 'password' );
        $this->load->model ( 'UserModel' );
        $result = $this->UserModel->register ( $name, $password );
        if (gettype ( $result ) == "boolean" && ! $result) {
            $this->load->view ( 'errors/cli/error_404.php' );
        } else {
            $this->load->view ( 'login',$result );
        }
    }
    public function showLogin() {
        $this->load->view ( "login.php" );
    }
    public function login() {
        $name = $this->input->post ( 'name' );
        $password = $this->input->post ( 'password' );
        $this->load->model ( 'UserModel' );

        $result = $this->UserModel->login ( $name, $password );

        if (! $result) {
            $this->load->view ( 'fail' );
        } else {
            $this->load->view ( 'welcome',$result );
        }
    }
}