<?php
/**
 * Created by PhpStorm.
 * User: zjhuang
 * Date: 2019/8/15
 * Time: 10:07
 */

    class user_model extends CI_Model {
        //返回所有用户
        public function getAll() {
            $res = $this->db->get('user');
            return $res->result();
        }
    }
