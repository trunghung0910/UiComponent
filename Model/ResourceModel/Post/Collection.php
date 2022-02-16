<?php
namespace AHT\Hung\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'hung_id';
    protected $_eventPrefix = 'aht_hung_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('AHT\Hung\Model\Post', 'AHT\Hung\Model\ResourceModel\Post');
    }
}
