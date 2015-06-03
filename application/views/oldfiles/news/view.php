<?php
//$this->load->view('themes/bootswatch/header');
$this->load->view($this->config->item('theme') . 'header');
?>


<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];

//$this->load->view('themes/bootswatch/header');
$this->load->view($this->config->item('theme') . 'footer');
?>