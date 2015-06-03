<?php

/**
* index.php view page for generic Customer controller
*
*
* views/customer/index.php
*
* @package ITC 260 CodeIgnitor
* @subpackage Customer
* @author Patricia Barker <patriciabethbarker@gmail.com>
* @version 1.0 2015/05/25
* @link http://www.tcbcommercialproperties.com/sandbox/ci/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Customer_model.php
* @see Customer.php
* @todo none
*/


$this->load->view($this->config->item('theme') . 'header');
?>

    <h1><?= $this->config->item('title'); ?></h1>

<?php foreach($customer->result() as $customerItem)
{
    ?>
    <h3><?php echo $customerItem->FirstName; ?></h3>
    <?php
}
   $this->load->view($this->config->item('theme') . 'footer');
?>
