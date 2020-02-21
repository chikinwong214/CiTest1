<?php
class UserController{

    public function index(){
//        包含文件并实例化一个模型
        include './model/UserModel.php';
        $model =  new UserModel();
//        echo"这是User控制器的index方法";
        $list = $model ->getAllUsers();
//    让模板将数据显示出来
        include './views/User/index.phtml';

    }
}