<?php
class User1 extends CI_Controller{
    public function ShowUsers(){
        //装载数据库操作类
        $this->load->database();
        //装载成功后，会放入超级对象的属性中，默认的属性名是db
//        var_dump($this->db);

        $sql = 'select * from blog_user';
        $res = $this->db->query($sql); //mysql_query()
//        var_dump($res);
        $users = $res->result();//返回的$rest是对象，需要用result()方法输出
        $data['user_list']=$users;
        $this->load->view('header');
        $this->load->view('user1/showusers',$data);

        //        var_dump($users);
        //        mysql_fetch_assoc() 关联
    }

    public function add(){

        $sql = "insert into blog_user (name,password) values ('mary',md5('mary'))";
        $bool = $this->db->query($sql);
        if ($bool){
            echo '受影响行数：'.$this->db->affected_rows().'<br>';
            echo '自增ID：'.$this->db->insert_id().'<br>';
        }
    }

    public function update(){
        //必须采用数组形式读入sql
        $data[0] = 'chikin';
        $data[1] = '123';
        $sql = "insert into blog_user (name,password) values (?,md5(?))";
        $bool = $this->db->query($sql,$data);
        if ($bool){
            echo '受影响行数：'.$this->db->affected_rows().'<br>';
            echo '自增ID：'.$this->db->insert_id().'<br>';
        }
    }

    public function index()
    {
        //分配变量
//        $this->load->vars('title','这是标题！');

//        定义数组
        $list = array(
            array('id'=>1,'name'=>'chikin','email'=>'chikin@126.com'),
            array('id'=>2,'name'=>'Annie','email'=>'Annie@126.com'),
            array('id'=>3,'name'=>'apple','email'=>'apple@126.com'),
        );

//        分配数组
        $data['title']='这是标题$data';
        $data['list']=$list;
        $this->load->vars($data);
        $this->load->view('header');
        //必须先定义变量，再加载index.php页面
        $this->load->view('user1/index');
    }
//    不能被浏览器请求
    protected function test()
    {
        echo 'user------test';
    }
//    不能被浏览器请求
    private function test0()
    {
        echo 'user------test0';
    }
//    下划线开头的动作不能被请求
    public function _test1()
    {
        echo 'user------_test1';
    }
//  可以调用内部的_开头的动作
    public function test2(){
        $this ->_test1();
    }
}