<?php
/**
* index.php view page for generic gigs_form controller
*
*
* views/gigs_form/index.php
*
* @package ITC 260 Gig Central CodeIgnitor
* @subpackage Gig
* @author Patricia Barker <pbarke01@seattlecentral.edu>
* @version 1.0 2015/05/25
* @link http://www.tcbcommercialproperties.com/sandbox/ci/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Gig_model.php
* @see Gig.php
* @todo none
*/

   $this->load->view($this->config->item('theme') . 'header');
?>

<?php

echo '

    <h1>Gigs List</h1>


<div>
    <h2><strong>Gig Opportunity</strong></h2>

    
</div>
';

    $this->load->view($this->config->item('theme') . 'footer');
?>
