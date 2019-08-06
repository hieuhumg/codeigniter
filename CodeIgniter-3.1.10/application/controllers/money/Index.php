<?php
    class Index extends CI_Controller
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
            $this->load->model('Category_model');
        }

        public function index()
        {
            $template = "money/index";
            $data = array();
            $data['siteTitle'] = "Quản lý tiền";
            // bat dau xu lý

            // xu ly phan validation
            $this->load->library('form_validation');
            $this->form_validation->set_rules('content', 'Content', 'required',
                array('required' => 'Nội dung không được để trống'));
            $this->form_validation->set_rules('money', 'Money', 'required',
                array('required' => 'Số tiền không được để trống'));
            $this->form_validation->set_rules('date', 'Date', 'required',
                array('required' => 'Ngày không được để trống'));
            $this->form_validation->set_rules('category', 'Category', 'required');

            if ($this->form_validation->run() == FALSE)
            {

                $listCategory = $this->Category_model->getCategory();
                $data['listCat'] = $listCategory;
                $this->load->view($this->templateConfig['header'], $data);
                $this->load->view($template, $data);
                $this->load->view($this->templateConfig['footer'], $data);
            }
            else
            {
                $content = $this->input->post('content');
                $money = $this->input->post('money');
                $date = $this->input->post('date');
                $category = $this->input->post('category');
                if(!empty($date))
                {
                    $old_date = explode('-',$date);
                    $new_date = $old_date[2] . '-' . $old_date[1] . '-' . $old_date[0];
                }else
                {
                    $new_date = NULL;
                }
                $arrData = array(
                    'status' => 1,
                    'content' => $content,
                    'money' => $money,
                    'date' => strtotime($new_date),
                    'date_created' => time(),
                    'idTL' => $category
                );
                $id = $this->Money_model->add($arrData);

                // ket thuc xu ly
                $this->load->view($this->templateConfig['header'], $data);
                $this->load->view($template, $data);
                $this->load->view($this->templateConfig['footer'], $data);
            }



        }

        public function view()
        {
            $template = "money/view";
            $data = array();
            $data['siteTitle'] = "Danh sách chi tiêu";
            //bắt đầu xử lý
            $id = $this->input->get('id');
            $where = array();
            if (!empty($id)) {
                $where['idTL'] = $id;
            }
            $list = $this->Money_model->getList($where);
            $data['list'] = $list;
            $listCategory = $this->Category_model->getCategory();
            $data['listCat'] = $listCategory;

            // xu ly phan tim kiem
            $search = $this->input->get('search');
            if(isset($search))
            {
                $list = $this->Money_model->searchContent($search);
                $data['list'] = $list;
            }

            // tìm kiếm nâng cao
            $since = $this->input->get('tungay');
            $todate = $this->input->get('denngay');
            if(!empty($since) && !empty($todate))
            {
                $old_since = explode('-', $since);
                $new_since = $old_since[2]. '-' . $old_since[1] . '-' . $old_since[0];
                $old_todate = explode('-', $todate);
                $new_todate = $old_todate[2] . '-' . $old_todate[1] . '-' . $old_todate[0];
                $arrData =array(
                    'since' => strtotime($new_since),
                    'todate' => strtotime($new_todate)
                );
                $list = $this->Money_model->searchDate($arrData);
                $data['list'] = $list;
            }
            //pagination pages
            $numinpage = 10;
            $num = $this->Money_model->paginationPages();
            $page = ceil($num/$numinpage);
            $data['page'] = $page;
                // phân trang dựa vào chỉ số dòng theo đường dẫn page
                if(isset($_GET['page']))
                {
                    $numberpage  = $_GET['page'];
                }else
                {
                    $numberpage = 1;
                }
                $from  = ($numberpage - 1) * $numinpage;
                $arrData = array (
                    'from' => $from
                );
                $list = $this->Money_model->pagination($arrData);
                $data['list'] = $list;

                $this->load->view($this->templateConfig['header'], $data);
                $this->load->view($template, $data);
                $this->load->view($this->templateConfig['footer'], $data);

        }
        public function edit()
        {
            $id = $this->input->get('id');
            //
            $result = $this->Money_model->checkIdData($id);
            if($result!= NULL)
            {
                $data = array();

                $content = $this->input->post('content');
                $money = $this->input->post('money');
                $date = $this->input->post('date');
                $arrData = array(
                    'content' => $content,
                    'money' => $money,
                    'date' => strtotime($date),
                    'date_modified' => time()
                );
                $this->Money_model->edit($id,$arrData);
                redirect('/money/index/view');
            }else
            {
                echo "id khong ton tai";
                redirect('/money/index/view');
            }


        }
        public function delete()
        {
            $id = $this->input->get('id');
            $this->Money_model->deleteById($id);
            redirect('/money/index/view');
        }

        // contronller tim kiem
    }