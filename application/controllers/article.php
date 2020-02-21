<?php
/**
 * Created by PhpStorm.
 * User: zjhuang
 * Date: 2019/8/16
 * Time: 11:07
 */
class Article extends CI_Controller {
    public function index() {
        echo '测试Article控制器的index方法';
    }

//    生成为静态html页面
    public function show($id){
        echo '这是文章'.$id;
    }
}