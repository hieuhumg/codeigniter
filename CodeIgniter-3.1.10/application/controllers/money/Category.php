<?php
class Category extends CI_Controller
{
    protected $templateConfig;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'url',
            'html',
            'form'
        ));
        $this->load->config('template');
        $this->templateConfig = config_item('template');
        $this->load->model('Money_model');
    }

}