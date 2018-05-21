<html>
<head>
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="<?php echo base_url()?>css/blogview.css">
</head>
<body>
  <h1><?php echo $heading; ?></h1>
  <h3><?php echo $message; ?></h3>
  <ul>
  <?php foreach ($todo_list as $item): ?>

    <li><?php echo $item; ?></li>

  <?php endforeach; ?>
  </ul>

  <table border="1">
    <tr>
      <th>jan</th>
      <th>title</th>
      <th>num </th>
    </tr>
  <?php foreach ($media_list as $m_l): ?>
    <tr>
      <th><?php echo $m_l->jan; ?></th>
      <th><?php echo $m_l->title; ?></th>
      <th><?php echo $m_l->num; ?></th>
    </tr>
  <?php endforeach; ?>
  </table>

  <!--上記をテーブルライブラリを使って表示する。-->
  <?php
  //$this->load->library('table');
  //$this->output->set_output( $this->table->generate($media_list) );
  ?>

  <p><?php echo '現在時刻: '.$now_time; ?></p>

</body>
</html>
