<?php
/**
* index.php view page for generic Customer controller
*
* views/customer/index.php
*
* Used to show how to do CRUD in CodeIgniter
*
* @package ITC260
* @subpackage Customer
* @author Douglas Doner <ddoner01@seattlecentral.edu>
* @version 1.0 2015/04/30
* @link http://designbydoug.com/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Customer_model.php
* @see Customer.php
* @todo none
*/

$this->load->view($this->config->item('theme') . 'header');
?>

<h1><?= $this->config->item('title'); ?></h1>

<?php $this->load->view($this->config->item('theme') . 'footer'); ?>
