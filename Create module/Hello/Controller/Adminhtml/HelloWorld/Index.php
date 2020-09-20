<?php
namespace QND\Hello\Controller\Adminhtml\HelloWorld;

class Index extends \Magento\Backend\App\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		parent::__construct($context);
		$this->_pageFactory = $pageFactory;
	}

	public function execute()
	{
		return $this->_pageFactory->create();
	}
}