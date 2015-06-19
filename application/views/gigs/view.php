<?php
/**
* view.php view page for generic gigs_form controller
*
* views/gigs/view
* 
* @package ITC 260 Gig Central CodeIgnitor
* @subpackage Gig
* @author Patricia Barker <pbarke01@seattlecentral.edu>
* @version 2.2 2015/06/11
* @link http://www.tcbcommercialproperties.com/sandbox/codeignitor/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Gig_model.php
* @see view.php
* @todo none
*/

   $this->load->view($this->config->item('theme') . 'header');
?>



<div class="container">
<?php
  echo 
    '<h1>' . $gigs['title'] .  '</h1>';
    echo $gigs['text'];

?>
</div>

<?php

    $this->load->view($this->config->item('theme') . 'footer');
?>