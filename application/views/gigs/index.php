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

    <h1>G<?php echo $title ?></h1>
    
    <?php foreach ($gigs as $gig) : ?>
        <h3><?php echo $gig["title"] ?><h3>

<div>
    <h2><?php echo $gig["text"] ?></h2>
</div>

    <?php echo anchor ("gigs/" . $gig["slug"], "Gig View") ?>

    <?php endforeach ?>


';

    $this->load->view($this->config->item('theme') . 'footer');
?>
