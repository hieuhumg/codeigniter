<?php
class Users extends CI_Controller
{
    private $registerErrors = array();
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'url',
            'html',
            'form',
            'language'
        ));
        $this->lang->load('vi','vietnamese');
        $this->load->config('template');
        $this->templateConfig = config_item('template');
        $this->load->model('Users_model');
    }
    public function login()
    {
        $template = 'money/view';
        $data = array();
        if(isset($_POST['login']))
        {
            $result = $this->Users_model->checkPublicUserIsValid($_POST);
            if(isset($result))
            {
                $_SESSION['email'] = $result['email'];

            }
        }
        $template = 'money/login';
        $this->load->view($this->templateConfig['header'], $data);
        $this->load->view($template);
        $this->load->view($this->templateConfig['footer'], $data);
    }
    public function register()
    {
        $template = 'money/register';
        $data = array();
        // bat dau xu ly
        if(isset($_POST['register']))
        {
            $result = $this->registerValidate();
        }
        $this->load->view($this->templateConfig['header'], $data);
        $this->load->view($template);
        $this->load->view($this->templateConfig['footer'], $data);
    }
    private function registerValidate()
    {
        $errors = array();
        if (mb_strlen(trim($_POST['name'])) == 0) {
            $errors[] = lang('please_enter_name');
        }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = lang('invalid_email');
        }

        if (mb_strlen(trim($_POST['pass'])) == 0) {
            $errors[] = lang('enter_password');
        }
        if (mb_strlen(trim($_POST['pass_repeat'])) == 0) {
            $errors[] = lang('repeat_password');
        }
        if ($_POST['pass'] != $_POST['pass_repeat']) {
            $errors[] = lang('passwords_dont_match');
        }

        $count_emails = $this->Users_model->countPublicUsersWithEmail($_POST['email']);
        if ($count_emails > 0) {
            $errors[] = lang('user_email_is_taken');
        }
        if (!empty($errors)) {
            $this->registerErrors = $errors;
            return false;
        }
        $this->user_id = $this->Users_model->registerUser($_POST);
        return true;
    }
}