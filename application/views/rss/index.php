<?php // views/rss/index.php view template file

$this->load->view($this->config->item('theme') . 'header');

?>
<h1>It works!</h1>

<?php
//loops through array and assigns array value to $item variable (in this case, an xml object)
foreach($stories["newsItem"] as $newsItem => $item) {
  echo '<h2><a href="' . $item->link . '">' . $item->title . '</a></h2>';
  echo '<div>' . $item->description . '</div>';
}

$this->load->view($this->config->item('theme') . 'footer');
