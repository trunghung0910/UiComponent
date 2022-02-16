<?php
namespace AHT\Hung\Block;

use Magento\Framework\View\Element\Template;

class Taxation 
{
    protected $_firstname;

    public function __construct($firstname = 'Hung')
    {
        $this->_firstname = $firstname;
        
    }
 
    public function getCalculateTax($id)
    {
        return __('This is tax of product '.$this->_firstname );
    }
}