<?php
//views/rss/index.php
$this->load->view($this->config->item('theme').'header');
?>

<h2><?php echo $title ?></h2>

<?php
                print '<h1>' . $xml->channel->title . '</h1>'; //view
                foreach($xml->channel->item as $story)
                {
                  echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
                  echo '<p>' . $story->description . '</p><br /><br />';
                }

$this->load->view($this->config->item('theme').'footer');


/*
<form action="Rss.php">
  <h3>Select a Feed</h3>
  <select name="newsList">
  <option value="a">Google News</option>
  <option value="b">Tech News</option>
  </select>
  <input type="submit" name="submit" value="See the News">
</form>
<br>
*/

