<?php
namespace AHT\Hung\Model;

use AHT\Hung\Api\HungRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use AHT\Hung\Model\PostFactory;
use AHT\Hung\Model\ResourceModel\Post;

class HungRepository implements HungRepositoryInterface
{
    private $_postResource;
    private $_postFactory;

    public function __construct(
        Post $postResource,
        PostFactory $postFactory
    )
    {
        $this->_postResource = $postResource;
        $this->_postFactory = $postFactory;
    }

    public function getById($hungId)
    {
        $hung = $this->_postFactory->create();
        $this->_postResource->load($hung, $hungId);
        if (!$hung->getHungId()) {
            throw new NoSuchEntityException(__('The post with the "%1" ID doesn\'t exist.', $hungId));
        }
        return $hung;
    }
}
