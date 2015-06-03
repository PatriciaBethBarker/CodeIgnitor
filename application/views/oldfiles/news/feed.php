<?php
///Prints RSS

  echo '<div style="float:right;width:800px;"><h1>RSS Feed</h1>';	
  print '<h2>' . $xml->channel->title . '</h2>';
	  echo '<p>' . $xml->channel->description . '</p>';
	  foreach($xml->channel->item as $story)
	  {
	    echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
	    echo '<p>' . $story->description . '</p><br /><br />';
	  }
  echo '</div>';	
?>
</div>