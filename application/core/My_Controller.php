<?php
/**
 * Created by PhpStorm.
 * User: zjhuang
 * Date: 2019/8/2
 * Time: 16:56
 */

class My_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        //登陆验证
        //权限验证...
        echo '用My_Controller作为父类，那所有控制器都继承My_Controller就可以实现页面提前加载</br>';
    }

}
