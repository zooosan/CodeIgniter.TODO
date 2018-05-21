<?php
class ShowTodo extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //your code
  }
  public function _remap($method, $params = array())
  {
    $method = 'process_'.$method;
    if (method_exists($this, $method))
    {
      return call_user_func_array(array($this, $method), $params);
    }
    elseif (!method_exists($this, $method)) {
      $this->default_method();
      $output = 'outputdata default';
    }
    else {
      show_404();
    }
  }

  public function _output($output)
  {
    echo $output;
  }

  public function default_method()
  {
    echo 'Hello TodoSite/Showtodo defaultWorld201805!';
  }

  public function some_method()
  {
    echo 'Hello TodoSite/Showtodo someWorld201805!';
  }

  public function process_some()
  {
    echo 'Hello TodoSite/Showtodo process_some World201805!';
  }

  private function process_notaccess()
  {
    //単に private または protected としてメソッドを宣言すれば、 URL リクエストとしては提供されません。
    //この設定だとアクセスできる（のちほど要確認）
    echo 'TodoSite privatefunctionあ';
  }
}
