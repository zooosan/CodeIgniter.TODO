<?php
class SiteTodo extends CI_Controller {

  // public function _remap($method)
  // {
  //   if ($method === 'some_method')
  //   {
  //     $this->$method();
  //   }
  //   else
  //   {
  //     $this->default_method();
  //   }
  // }

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
    echo 'Hello SiteTodo defaultWorld201805!';
  }

  public function some_method()
  {
    echo 'Hello SiteTodo someWorld201805!';
  }

  public function process_some()
  {
    echo 'Hello SiteTodo process_some World201805!';
  }

  private function process_notaccess()
  {
    //単に private または protected としてメソッドを宣言すれば、 URL リクエストとしては提供されません。
    //この設定だとアクセスできる（のちほど要確認）
    echo 'privatefunctionあ';
  }
}
