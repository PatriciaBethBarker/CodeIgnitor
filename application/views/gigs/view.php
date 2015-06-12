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

<?php

echo '

<div class="container">
  <div>
    <h1>This is where we will see the posted Gig</h1>

    </div>
</div>
';

    $this->load->view($this->config->item('theme') . 'footer');
?>