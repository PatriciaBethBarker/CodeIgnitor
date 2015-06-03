<?php
/**
* index.php controller for a generic Customer controller
*
* Used to show how to do CRUD in CodeIgnitor
*
* views/customer/index.php
*
* @package ITC 260 CodeIgnitor
* @subpackage CONTROLLER
* @author Patricia Barker <pbarke01@seattlecentral.edu>
* @version 1.0 2015/04/30
* @link http://www.tcbcommercialproperties.com/sandbox/index.html
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Customer_model.php.php
* @see customer.php
* @todo none
*/

$this->load->view($this->config->item('theme').'header');
?>

<h2><?php echo $title ?></h2>
<?php foreach ($query->result() as $customer): ?>

<?php
	echo $customer->FirstName . "<br/>";
?>
<?php endforeach ?>

<?php
$this->load->view($this->config->item('theme').'footer');
?>




