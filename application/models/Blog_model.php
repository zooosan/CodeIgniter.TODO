<?php
/**
 *
 */
class Blog_model extends CI_Model
{
  public $title;
  public $content;
  public $date;

  public function __construct()
  {
    parent::__construct();
  }

  public function get_date()
  {
    //return time();

    //date_default_timezone_set('Asia/Tokyo');
    //return date("Y/m/d H:i:s");

    $this->load->helper('date');
    //return now(); //Unixタイムスタンプ
    return mdate("%Y/%m/%d %H:%i:%s");

    //return $_SERVER['REQUEST_TIME']; //リクエスト開始時のUnixタイムスタンプ
  }

  public function get_todo_list()
  {
    $query = array('掃除するc', 'ママに電話', 'お使いに行く');
    return $query;
  }

  public function get_contents_title()
  {
    $this->load->database('possesion_media');
    $sql = 'SELECT jan,title,num FROM contents_title order by num desc';
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function get_last_ten_entries()
  {
    $this->load->database();
    //$query = $this->db->get('entries', 10);
    $sql = 'SELECT jan,title,num FROM contents_title order by jan';
    $query = $this->db->query($sql);
    return $query->result();
  }

}
