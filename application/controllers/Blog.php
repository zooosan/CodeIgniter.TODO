<?php
class Blog extends CI_Controller {

  public function index()
  {
    //echo 'Hello World!';
    $data = array(
      'title' => 'わたしのタイトル',
      'heading' => 'わたしのヘッダa',
      'message' => 'わたしのメッセージ'
    );
    //$data['todo_list'] = array('掃除するb', 'ママに電話', 'お使いに行く');
    //$this->load->model('blog_model'); //autoload.phpのオートロード配列にモデルを追加した場合この行は不要
    $data['todo_list'] = $this->blog_model->get_todo_list();
    $data['media_list'] = $this->blog_model->get_contents_title();
    $data['now_time'] = $this->blog_model->get_date();
    $this->load->view('blogview',$data);
  }

  public function comments()
  {
    echo 'Look at this!';
  }
}
