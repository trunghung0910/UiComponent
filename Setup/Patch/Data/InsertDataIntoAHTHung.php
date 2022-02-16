<?php
namespace AHT\Hung\Setup\Patch\Data;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use AHT\Hung\Model\PostFactory;

class InsertDataIntoAHTHung implements DataPatchInterface
{
    protected $_postFactory;

    public function __construct(
        PostFactory $postFactory
    )
    {
        $this->_postFactory = $postFactory;
    }

    public function apply()
    {
        $data = [
            'name'         => "Post 5",
            'content' => "Post 5 Content"
        ];
        $post = $this->_postFactory->create();
        $post->addData($data)->save();
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}
