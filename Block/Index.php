<?php
namespace AHT\Hung\Block;

use Magento\Framework\View\Element\Template;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $_taxation;

    public function __construct(Template\Context $context, array $data = [], 
    \AHT\Hung\Block\Taxation $taxation
    )
    {
        parent::__construct($context, $data);
        $this->_taxation = $taxation;
    }
 
    public function getTax($id)
    {
        return $this->_taxation->getCalculateTax($id);
    }
}