<?php
/**
 * Created by PhpStorm.
 * User: zjhuang
 * Date: 2019/8/15
 * Time: 10:28
 */
class User extends My_Controller {
    public function index(){
        //加载模型后，也会在超级对象中增加一个属性
        $this->load->model('User_model');
        $data['list'] = $this->User_model->getAll(); //这个list为传输到user/index的数组变量名称$list

        //别名加载
        $this->load->model('User_model','user');
        $data['list1'] = $this->user->getAll();

        //加载视图
        $this->load->view('user/index',$data);
    }

    public function add(){
//        $this->load->helper('url'); //这个直接在auotlaod中自动加载
        $this->load->view('header');
        $this->load->view('user/add');

    }
    public function insert() {
        var_dump('<pre>',$this->input->post('name'));
    }

    public function testPage(){
        $this->load->library('pagination');

        $this->load->helper('url');

        //每页显示10个
        $page_size=10;

        $config['base_url'] = site_url('user/testpage');
        $config['total_rows'] = 100;
        $config['per_page'] = $page_size;
        $config['first_link'] = '首页';
        $config['next_link'] = '下一页';
        $config['pre_link'] = '上一页';
        $config['last_link'] = '末页';
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

        $offset=intval($this->uri->segment(3));
        $sql="select * from blog_user limit $offset, $page_size</p>";
        echo $sql;
        $data['links'] = $this->pagination->create_links();

        $this->load->view('user/testpage',$data); //test branch Company1
    }
}
