<?php
namespace AHT\Hung\Api\Data;

interface HungInterface
{
    const HUNG_ID = 'hung_id';
    const NAME = 'name';
    const CONTENT = 'content';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getHungId();

    /**
     * Get name
     *
     * @return string|null
     */
    public function getName();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent();

    /**
     * Set ID
     *
     * @param int $hungId
     * @return HungInterface
     */
    public function setHungId($hungId);

    /**
     * Set name
     *
     * @param string $name
     * @return HungInterface
     */
    public function setName($name);

    /**
     * Set content
     *
     * @param string $content
     * @return HungInterface
     */
    public function setContent($content);
}
