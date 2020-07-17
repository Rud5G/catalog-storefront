<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

final class VideoMapper
{
    /**
     * @var string
     */
    private static $dtoClassName = VideoInterface::class;

    /**
     * @var mixed
     */
    private $data;

    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
    * Set the data to populate the DTO
    *
    * @param mixed $data
    * @return $this
    */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
    * Build new DTO populated with the data
    *
    * @return Video
    */
    public function build()
    {
        $dto = $this->objectManager->create(self::$dtoClassName);
        foreach ($this->data as $key => $valueData) {
            $this->setByKey($dto, $key, $valueData);
        }
        return $dto;
    }

    /**
    * Set the value of the key using setters.
    *
    * In case if the field is object, the corresponding Mapper would be create and DTO representing the field data
    * would be built
    *
    * @param Video $dto
    * @param string $key
    * @param mixed $value
    */
    private function setByKey(Video $dto, string $key, $value): void
    {
        if ($value === null) {
            return;
        }

        switch ($key) {
            case "video_provider":
                $dto->setVideoProvider((string) $value);
                break;
            case "video_url":
                $dto->setVideoUrl((string) $value);
                break;
            case "video_title":
                $dto->setVideoTitle((string) $value);
                break;
            case "video_description":
                $dto->setVideoDescription((string) $value);
                break;
            case "video_metadata":
                $dto->setVideoMetadata((string) $value);
                break;
            case "media_type":
                $dto->setMediaType((string) $value);
                break;
        }
    }
}
