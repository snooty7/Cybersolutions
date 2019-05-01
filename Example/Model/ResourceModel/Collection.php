<?php 
namespace Cybersolutions\Example\Model\ResourceModel\DataExample;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
	public function _construct(){
		$this->_init("Cybersolutions\Example\Model\DataExample","Cybersolutions\Example\Model\ResourceModel\DataExample");
	}
}
 ?>
