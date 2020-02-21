<?php
    class UserModel{
        public function getAllUsers(){
//            获取所有用户列表
            $list = array(
                array('id'=>1,'name'=>'chikin','email'=>'chikin@126.com'),
                array('id'=>1,'name'=>'Annie','email'=>'Annie@126.com'),
                array('id'=>1,'name'=>'apple','email'=>'apple@126.com'),
            );
            return $list;

        }
    }