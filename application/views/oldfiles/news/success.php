<?php
//$this->load->view('themes/bootswatch/header');
$this->load->view($this->config->item('theme') . 'header');
?>
<?php
echo '<h2>Success!</h2>';

//$this->load->view('themes/bootswatch/header');
$this->load->view($this->config->item('theme') . 'footer');
?>