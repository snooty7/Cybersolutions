<?php 
namespace Cybersolutions\Example\Controller\Index;
use Cybersolutions\Example\Model\DataExampleFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action{

    protected $_dataExample;


    public function __construct(\Magento\Framework\App\Action\Context $context,
        \Cybersolutions\Example\Model\DataExampleFactory  $dataExample,
    \Magento\Framework\Controller\ResultFactory $result){

        parent::__construct($context);
        $this->_dataExample = $dataExample;
        $this->resultRedirect = $result;
    }
	public function execute(){



	        $model = $this->_dataExample->create();
       	    if ($this->getRequest()->getPost('q')):
                $query=$this->getRequest()->getPost('q');
	        $model->addData([
		    "custom_val" => $query
	        ]);
            endif;
            $saveData = $model->save();
            if($saveData){
                $this->messageManager->addSuccess( __('Added Record Successfully!') );
            }

	}
}
 ?>
