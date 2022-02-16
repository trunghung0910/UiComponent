<?php
namespace AHT\Hung\Api;

interface HungRepositoryInterface
{
    /**
     * Retrieve an entity.
     *
     * @param int $hungId
     * @return \AHT\Hung\Api\Data\HungInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($hungId);
}
