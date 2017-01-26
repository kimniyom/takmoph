<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class news_model extends CI_Model {

    var $CI;

    function __construct() {
        parent::__construct();
        $this->CI = $this->load->database('default', TRUE);
        $this->CI->query("SET NAMES 'UTF8'");
    }

    function get_news_limit() {
        $sql = "SELECT *
                    FROM tb_news N INNER JOIN (SELECT MAX(id),new_id,images FROM images_news GROUP BY new_id) IM ON N.id = IM.new_id
                    INNER JOIN mas_user M ON N.user_id = M.user_id
                    ORDER BY N.id DESC
                    LIMIT 6 ";
        return $this->db->query($sql);
    }

    function get_news() {
        $sql = "SELECT n.*,m.name,m.lname
        FROM tb_news n INNER JOIN mas_user m ON n.user_id = m.user_id
        ORDER BY date DESC";
        return $this->db->query($sql);
    }

    function get_news_where($new_id = '') {
        $sql = "SELECT n.*,m.name,m.lname
                FROM tb_news n INNER JOIN mas_user m ON n.user_id = m.user_id
                WHERE id = '$new_id' ORDER BY id DESC";
        $result = $this->db->query($sql);
        $row = $result->row();
        return $row;
    }

    function get_images_news($new_id = '') {
        $sql = "SELECT * FROM images_news WHERE new_id = '$new_id' ";
        return $this->db->query($sql);
    }

    function get_first_images_news($new_id = '') {
        $sql = "SELECT images FROM images_news WHERE new_id = '$new_id' LIMIT 1";
        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            $row = $result->row();
            $images = $row->images;
        } else {
            $images = "";
        }
        return $images;
    }

    function max_read($newsId = null){
        $sql = "SELECT MAX(views) AS total FROM tb_news WHERE id = '$newsId'";
        $rs = $this->db->query($sql)->row();
        return $rs->total;
    }

    function near(){
        $sql = "SELECT n.*,m.name,m.lname
        FROM tb_news n INNER JOIN mas_user m ON n.user_id = m.user_id
        ORDER BY date DESC LIMIT 5";
        return $this->db->query($sql);
    }

    function hot(){
        $sql = "SELECT n.*,m.name,m.lname
        FROM tb_news n INNER JOIN mas_user m ON n.user_id = m.user_id
        ORDER BY n.views DESC LIMIT 6";
        return $this->db->query($sql);
    }

    function last_news(){
        $sql = "SELECT n.*,m.name,m.lname
        FROM tb_news n INNER JOIN mas_user m ON n.user_id = m.user_id
        ORDER BY n.id DESC LIMIT 6";
        return $this->db->query($sql);
    }

    function count(){
      return $this->db->count_all("tb_news");
    }

    // Fetch data according to per_page limit.
    public function fetch_data($limit, $start) {
      if($start != ''){
        $pagestart = $start;
      } else {
        $pagestart = 0;
      }
      $sql = "SELECT n.*,m.name,m.lname
      FROM tb_news n INNER JOIN mas_user m ON n.user_id = m.user_id
      ORDER BY date DESC
      LIMIT $pagestart,$limit";
      return $this->db->query($sql);
    }

}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
