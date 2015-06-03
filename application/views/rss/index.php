<?php // views/rss/index.php view template file

$this->load->view($this->config->item('theme') . 'header');

?>
<h1>News RSS Feed</h1>

<?php
//loops through array and assigns array value to $item variable (in this case, an xml object)
foreach($stories["newsItem"] as $newsItem => $item) {
  echo '<h2><a href="' . $item->link . '">' . $item->title . '</a></h2>';
  echo '<div>' . $item->description . '</article>';
} ?>

<!--start the form w/in container div using bootswatch theme classes-->
<div class="row col-lg-6 col-sm-12"><!--start container -->
  <form>
    <div class="form-group">
      <label for="firstName">First Name</label>
        <input type="text" id="firstName" placeholder="First Name" class="form-control">
    </div><!--end form-group -->
    
    <div class="form-group">
      <label for="lastName">Last Name</label>
        <input type="text" id="lastName" placeholder="Last Name" class="form-control">
    </div><!--end form-group -->
    
    <div class="checkbox">
      <label>
        <input type="checkbox">Check here
      </label>
    </div><!--end checkbox -->
    
    <div class="radio">
      <label>
        <input type="radio" name="radioButtons" id="radioOne" value="radioOne" checked>
          Option one
      </label>
    </div><!--end checkbox -->
    
    <div class="radio">
      <label>
        <input type="radio" name="radioButtons" id="radioTwo" value="radioTwo" checked>
          Option two
      </label>
    </div><!--end checkbox -->
    
    <div class="radio">
      <label>
        <input type="radio" name="radioButtons" id="radioThree" value="radioThree" checked>
          Option three
      </label>
    </div><!--end checkbox -->
    
        <button type="submit" class="btn btn-default">Submit</button>    
  </form>
</div>
<!--end container -->

<?php
$this->load->view($this->config->item('theme') . 'footer');
