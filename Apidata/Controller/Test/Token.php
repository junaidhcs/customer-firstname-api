<?php

namespace Ariel\Apidata\Controller\Test;

use Magento\Framework\App\Action\Context;

class Token extends \Magento\Framework\App\Action\Action {
	protected $_pageFactory;
	public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory) {
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}
	public function execute() {
		echo "Hello World Controller";
		exit;
	}
}