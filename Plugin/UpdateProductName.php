<?php
namespace AHT\Hung\Plugin;

class UpdateProductName
{
    public function aroundGetPrice(\Magento\Catalog\Model\Product $subject, callable $proceed)
    {   
        $price = 100;
        $result = $proceed();
        return $result + 500 + $price;
    }

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result + 100;
    }

    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
    {
        $name = "HelloWorld";
        return [$name];
    }

}
