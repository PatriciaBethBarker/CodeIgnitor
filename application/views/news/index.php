<?php
// views/news/index.php view template
$this->load->view($this->config->item('theme') . 'header');
?>
<h2><?php echo $title ?></h2>

<?php foreach ($news as $news_item): ?>

    <h3><?php echo $news_item['title'] ?></h3>
    <div class="main">
    </div>
    <p>
    <?= anchor('news/' . $news_item['slug'], $news_item['title']); ?>
    </p>

<?php endforeach ?>

<?php $this->load->view('themes/bootswatch/footer');
