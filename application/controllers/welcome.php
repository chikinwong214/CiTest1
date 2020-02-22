<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($id=0,$name='')
	{
//	    控制器对象、超级对象
//	    var_dump($this->load);

/*
	    CI会自动实例化一个CI_loader的对象，放在超级对象的属性中
	    下面代码帮忙理解$this
	    new CI_Loader();
	    $this->load=$obj;
	    $this->load->view();
	    */

		$this->load->view('welcome_message');

        //	    控制器对象、超级对象
//        var_dump($this->uri);
//        echo $_GET['id'];
        echo $this->uri->segment(4);
        echo $id;
        echo $name;

        echo $this->input->server('DOCUMENT_ROOT');
	}

	public function testGet(){
	    $res = $this->db->get('user');
//	    var_dump($list);
        foreach ($res->result() as $item){
            echo $item->name.'<br>';
        }
    }

    public function testInsert(){
	    $data = array(
	        'name' => 'missing',
            'password' => md5('missing'),
        );

	    $bool = $this->db->insert('user',$data);
	    var_dump($bool);
    }

    public function testUpdate(){
	    $data = array(
	        'email'=>'mary1@gmail.com',
            'password' =>md5('mary1'),
        );
	    $bool = $this->db->update('user',$data, array('name'=>'mary'));
	    var_dump($bool);
    }

    public function testDelete(){
	    $bool = $this->db->delete('user', array('name'=>'missing'));
	    var_dump($bool);
    }

    //连贯操作
    public function testSelect(){
	    // select id, name from TableName where id>=3 limit 3,2 order by id desc
        // SELECT `id`, `name` FROM `blog_user` WHERE `id` >= 3 ORDER BY `id` desc LIMIT 3, 2
	    $res = $this->db->select('id, name')
            ->from('user')
            ->where('id>=',3)
            ->limit(3,2) //跳过2条，取出3条数据
            ->order_by('id desc')
            ->get();
	    var_dump($res->result());
	    echo $this->db->last_query(); //显示最近一条SQL
    }

    //测试组装sql语句
    public function testWhere(){
	    $res = $this->db->where('name','mary')->get('user');
	    $res1 = $this->db->where('name !=','mary')->get('user');
	    $res2 = $this->db->where(array('name'=>'mary','id >='=>1))->get('user');
        var_dump($res2->result());
        echo $this->db->last_query(); //显示最近一条SQL
    }

}
