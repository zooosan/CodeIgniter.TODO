<?php

class Page extends CI_Controller {
  public function index()
  {
    $data['page_title'] = '今日のブログタイトル';
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('page/content',$data);
    $this->load->view('footer');
  }

}
