<?php
namespace QND\Hello\Block\Adminhtml;

class Index extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\
    Context $context)
    {
        parent::__construct($context);
    }

    public function getBlockInfo()
    {
        return __("Hello World Backend");
    }

    public function getPost()
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        return $collection;
    }
}