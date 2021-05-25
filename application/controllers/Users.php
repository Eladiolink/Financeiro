<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model("Users_model", "Users");
    }

    public function index()
    {
        $this->load->view("login");
    }
    public function create()
    {
        $this->load->view("create");
    }
    public function login()
    {
        $email = $this->input->post("email", TRUE);
        $senha = $this->input->post("senha", TRUE);
        $user = $this->Users->get($email);

        if ($user) {

            if (password_verify($senha, $user->senha)) {

                $user = [
                    "user" => [
                        "id" => $user->id,
                        "email" => $user->email,
                        "tipo_user" => $user->tipo_user
                    ]
                ];

                $this->session->set_userdata($user);
                $this->load->helper('url');
                redirect('/', 'refresh');
            } else {
                $this->load->helper('url');
                redirect('/Users', 'refresh');
            }
        } else {
                $this->load->helper('url');
                redirect('/Users', 'refresh');
        }
    }

    public function store()
    {
        $email = $this->input->post("email", TRUE);
        $senha = $this->input->post("senha", TRUE);
        $type_user = $this->input->post("type_user", TRUE);
        $idade = $this->input->post("idade", TRUE);
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $values = [
            "email" => $email,
            "senha" => $hash,
            "tipo_user" => $type_user,
            "idade" => $idade
        ];

        if ($this->Users->add($values)) {
            echo "ok";
        } else {
            echo "no";
        }
    }

    public function destroy()
    {
        unset($_SESSION['user']);
        $this->load->helper('url');
        redirect('/Users', 'refresh');
    }
}
