<?php
Class Products extends CI_Controller{

  public function shoes($sandals,$id)
  {
    echo $sandals;
    echo $id;
  }

  public function index()
  {
    echo 'Hello Products!';
  }

}
