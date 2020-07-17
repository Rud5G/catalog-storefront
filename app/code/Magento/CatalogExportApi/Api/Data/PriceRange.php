<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Generated from et_schema.xml. DO NOT EDIT!”
 */

declare(strict_types=1);

namespace Magento\CatalogExportApi\Api\Data;

/**
 * PriceRange entity
 *
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 */
class PriceRange
{
    /** @var \Magento\CatalogExportApi\Api\Data\ProductPrice[]|null */
    private $minimumPrice;

    /** @var \Magento\CatalogExportApi\Api\Data\ProductPrice[]|null */
    private $maximumPrice;

    /**
     * Get minimum price
     *
     * @return \Magento\CatalogExportApi\Api\Data\ProductPrice[]|null
     */
    public function getMinimumPrice(): ?array
    {
        return $this->minimumPrice;
    }

    /**
     * Set minimum price
     *
     * @param \Magento\CatalogExportApi\Api\Data\ProductPrice[] $minimumPrice
     * @return void
     */
    public function setMinimumPrice(array $minimumPrice = null): void
    {
        $this->minimumPrice = $minimumPrice;
    }

    /**
     * Get maximum price
     *
     * @return \Magento\CatalogExportApi\Api\Data\ProductPrice[]|null
     */
    public function getMaximumPrice(): ?array
    {
        return $this->maximumPrice;
    }

    /**
     * Set maximum price
     *
     * @param \Magento\CatalogExportApi\Api\Data\ProductPrice[] $maximumPrice
     * @return void
     */
    public function setMaximumPrice(array $maximumPrice = null): void
    {
        $this->maximumPrice = $maximumPrice;
    }
}
