<?php
namespace AHT\Hung\Model;

use AHT\Hung\Api\Data\HungInterface;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface, HungInterface
{
    const CACHE_TAG = 'aht_hung_post';

    /**
     * Model cache tag for clear cache in after save and after delete
     *
     * @var string
     */
    protected $_cacheTag = self::CACHE_TAG;

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'post';

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('AHT\Hung\Model\ResourceModel\Post');
    }

    /**
     * Return a unique id for the model.
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getHungId() {
        return $this->getData(self::HUNG_ID);
    }

    public function getName() {
        return $this->getData(self::NAME);
    }

    public function getContent() {
        return $this->getData(self::CONTENT);
    }

    public function setHungId($hungId) {
        return $this->setData(self::HUNG_ID, $hungId);
    }

    public function setName($name) {
        return $this->setData(self::NAME, $name);
    }

    public function setContent($content) {
        return $this->setData(self::CONTENT, $content);
    }
}
