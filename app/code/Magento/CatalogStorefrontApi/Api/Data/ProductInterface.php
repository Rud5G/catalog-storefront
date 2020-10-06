<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for Product interface
 *
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 */
interface ProductInterface
{
    /**
     * Autogenerated description for getId() interface method
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Autogenerated description for setId() interface method
     *
     * @param string $value
     * @return void
     */
    public function setId(string $value): void;

    /**
     * Autogenerated description for getAttributeSetId() interface method
     *
     * @return string
     */
    public function getAttributeSetId(): string;

    /**
     * Autogenerated description for setAttributeSetId() interface method
     *
     * @param string $value
     * @return void
     */
    public function setAttributeSetId(string $value): void;

    /**
     * Autogenerated description for getHasOptions() interface method
     *
     * @return bool
     */
    public function getHasOptions(): bool;

    /**
     * Autogenerated description for setHasOptions() interface method
     *
     * @param bool $value
     * @return void
     */
    public function setHasOptions(bool $value): void;

    /**
     * Autogenerated description for getCreatedAt() interface method
     *
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * Autogenerated description for setCreatedAt() interface method
     *
     * @param string $value
     * @return void
     */
    public function setCreatedAt(string $value): void;

    /**
     * Autogenerated description for getUpdatedAt() interface method
     *
     * @return string
     */
    public function getUpdatedAt(): string;

    /**
     * Autogenerated description for setUpdatedAt() interface method
     *
     * @param string $value
     * @return void
     */
    public function setUpdatedAt(string $value): void;

    /**
     * Autogenerated description for getSku() interface method
     *
     * @return string
     */
    public function getSku(): string;

    /**
     * Autogenerated description for setSku() interface method
     *
     * @param string $value
     * @return void
     */
    public function setSku(string $value): void;

    /**
     * Autogenerated description for getTypeId() interface method
     *
     * @return string
     */
    public function getTypeId(): string;

    /**
     * Autogenerated description for setTypeId() interface method
     *
     * @param string $value
     * @return void
     */
    public function setTypeId(string $value): void;

    /**
     * Autogenerated description for getStatus() interface method
     *
     * @return string
     */
    public function getStatus(): string;

    /**
     * Autogenerated description for setStatus() interface method
     *
     * @param string $value
     * @return void
     */
    public function setStatus(string $value): void;

    /**
     * Autogenerated description for getStockStatus() interface method
     *
     * @return string
     */
    public function getStockStatus(): string;

    /**
     * Autogenerated description for setStockStatus() interface method
     *
     * @param string $value
     * @return void
     */
    public function setStockStatus(string $value): void;

    /**
     * Autogenerated description for getName() interface method
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Autogenerated description for setName() interface method
     *
     * @param string $value
     * @return void
     */
    public function setName(string $value): void;

    /**
     * Autogenerated description for getDescription() interface method
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Autogenerated description for setDescription() interface method
     *
     * @param string $value
     * @return void
     */
    public function setDescription(string $value): void;

    /**
     * Autogenerated description for getShortDescription() interface method
     *
     * @return string
     */
    public function getShortDescription(): string;

    /**
     * Autogenerated description for setShortDescription() interface method
     *
     * @param string $value
     * @return void
     */
    public function setShortDescription(string $value): void;

    /**
     * Autogenerated description for getUrlKey() interface method
     *
     * @return string
     */
    public function getUrlKey(): string;

    /**
     * Autogenerated description for setUrlKey() interface method
     *
     * @param string $value
     * @return void
     */
    public function setUrlKey(string $value): void;

    /**
     * Autogenerated description for getGiftcardType() interface method
     *
     * @return string
     */
    public function getGiftcardType(): string;

    /**
     * Autogenerated description for setGiftcardType() interface method
     *
     * @param string $value
     * @return void
     */
    public function setGiftcardType(string $value): void;

    /**
     * Autogenerated description for getQty() interface method
     *
     * @return float
     */
    public function getQty(): float;

    /**
     * Autogenerated description for setQty() interface method
     *
     * @param float $value
     * @return void
     */
    public function setQty(float $value): void;

    /**
     * Autogenerated description for getTaxClassId() interface method
     *
     * @return string
     */
    public function getTaxClassId(): string;

    /**
     * Autogenerated description for setTaxClassId() interface method
     *
     * @param string $value
     * @return void
     */
    public function setTaxClassId(string $value): void;

    /**
     * Autogenerated description for getWeight() interface method
     *
     * @return float
     */
    public function getWeight(): float;

    /**
     * Autogenerated description for setWeight() interface method
     *
     * @param float $value
     * @return void
     */
    public function setWeight(float $value): void;

    /**
     * Autogenerated description for getImages() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\ImageInterface[]
     */
    public function getImages(): array;

    /**
     * Autogenerated description for setImages() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\ImageInterface[] $value
     * @return void
     */
    public function setImages(array $value): void;

    /**
     * Autogenerated description for getVideos() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\VideoInterface[]
     */
    public function getVideos(): array;

    /**
     * Autogenerated description for setVideos() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\VideoInterface[] $value
     * @return void
     */
    public function setVideos(array $value): void;

    /**
     * Autogenerated description for getSamples() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\SampleInterface[]
     */
    public function getSamples(): array;

    /**
     * Autogenerated description for setSamples() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\SampleInterface[] $value
     * @return void
     */
    public function setSamples(array $value): void;

    /**
     * Autogenerated description for getVisibility() interface method
     *
     * @return string
     */
    public function getVisibility(): string;

    /**
     * Autogenerated description for setVisibility() interface method
     *
     * @param string $value
     * @return void
     */
    public function setVisibility(string $value): void;

    /**
     * Autogenerated description for getDynamicAttributes() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\DynamicAttributeValueInterface[]
     */
    public function getDynamicAttributes(): array;

    /**
     * Autogenerated description for setDynamicAttributes() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\DynamicAttributeValueInterface[] $value
     * @return void
     */
    public function setDynamicAttributes(array $value): void;

    /**
     * Autogenerated description for getMetaDescription() interface method
     *
     * @return string
     */
    public function getMetaDescription(): string;

    /**
     * Autogenerated description for setMetaDescription() interface method
     *
     * @param string $value
     * @return void
     */
    public function setMetaDescription(string $value): void;

    /**
     * Autogenerated description for getMetaKeyword() interface method
     *
     * @return string
     */
    public function getMetaKeyword(): string;

    /**
     * Autogenerated description for setMetaKeyword() interface method
     *
     * @param string $value
     * @return void
     */
    public function setMetaKeyword(string $value): void;

    /**
     * Autogenerated description for getMetaTitle() interface method
     *
     * @return string
     */
    public function getMetaTitle(): string;

    /**
     * Autogenerated description for setMetaTitle() interface method
     *
     * @param string $value
     * @return void
     */
    public function setMetaTitle(string $value): void;

    /**
     * Autogenerated description for getCategories() interface method
     *
     * @return string[]
     */
    public function getCategories(): array;

    /**
     * Autogenerated description for setCategories() interface method
     *
     * @param string[] $value
     * @return void
     */
    public function setCategories(array $value): void;

    /**
     * Autogenerated description for getRequiredOptions() interface method
     *
     * @return string
     */
    public function getRequiredOptions(): string;

    /**
     * Autogenerated description for setRequiredOptions() interface method
     *
     * @param string $value
     * @return void
     */
    public function setRequiredOptions(string $value): void;

    /**
     * Autogenerated description for getCreatedIn() interface method
     *
     * @return string
     */
    public function getCreatedIn(): string;

    /**
     * Autogenerated description for setCreatedIn() interface method
     *
     * @param string $value
     * @return void
     */
    public function setCreatedIn(string $value): void;

    /**
     * Autogenerated description for getUpdatedIn() interface method
     *
     * @return string
     */
    public function getUpdatedIn(): string;

    /**
     * Autogenerated description for setUpdatedIn() interface method
     *
     * @param string $value
     * @return void
     */
    public function setUpdatedIn(string $value): void;

    /**
     * Autogenerated description for getQuantityAndStockStatus() interface method
     *
     * @return string
     */
    public function getQuantityAndStockStatus(): string;

    /**
     * Autogenerated description for setQuantityAndStockStatus() interface method
     *
     * @param string $value
     * @return void
     */
    public function setQuantityAndStockStatus(string $value): void;

    /**
     * Autogenerated description for getOptionsContainer() interface method
     *
     * @return string
     */
    public function getOptionsContainer(): string;

    /**
     * Autogenerated description for setOptionsContainer() interface method
     *
     * @param string $value
     * @return void
     */
    public function setOptionsContainer(string $value): void;

    /**
     * Autogenerated description for getMsrpDisplayActualPriceType() interface method
     *
     * @return string
     */
    public function getMsrpDisplayActualPriceType(): string;

    /**
     * Autogenerated description for setMsrpDisplayActualPriceType() interface method
     *
     * @param string $value
     * @return void
     */
    public function setMsrpDisplayActualPriceType(string $value): void;

    /**
     * Autogenerated description for getIsReturnable() interface method
     *
     * @return string
     */
    public function getIsReturnable(): string;

    /**
     * Autogenerated description for setIsReturnable() interface method
     *
     * @param string $value
     * @return void
     */
    public function setIsReturnable(string $value): void;

    /**
     * Autogenerated description for getUrlSuffix() interface method
     *
     * @return string
     */
    public function getUrlSuffix(): string;

    /**
     * Autogenerated description for setUrlSuffix() interface method
     *
     * @param string $value
     * @return void
     */
    public function setUrlSuffix(string $value): void;

    /**
     * Autogenerated description for getOptions() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\OptionInterface[]
     */
    public function getOptions(): array;

    /**
     * Autogenerated description for setOptions() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\OptionInterface[] $value
     * @return void
     */
    public function setOptions(array $value): void;

    /**
     * Autogenerated description for getUrlRewrites() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\UrlRewriteInterface[]
     */
    public function getUrlRewrites(): array;

    /**
     * Autogenerated description for setUrlRewrites() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\UrlRewriteInterface[] $value
     * @return void
     */
    public function setUrlRewrites(array $value): void;

    /**
     * Autogenerated description for getCountryOfManufacture() interface method
     *
     * @return string
     */
    public function getCountryOfManufacture(): string;

    /**
     * Autogenerated description for setCountryOfManufacture() interface method
     *
     * @param string $value
     * @return void
     */
    public function setCountryOfManufacture(string $value): void;

    /**
     * Autogenerated description for getGiftMessageAvailable() interface method
     *
     * @return bool
     */
    public function getGiftMessageAvailable(): bool;

    /**
     * Autogenerated description for setGiftMessageAvailable() interface method
     *
     * @param bool $value
     * @return void
     */
    public function setGiftMessageAvailable(bool $value): void;

    /**
     * Autogenerated description for getSpecialPrice() interface method
     *
     * @return float
     */
    public function getSpecialPrice(): float;

    /**
     * Autogenerated description for setSpecialPrice() interface method
     *
     * @param float $value
     * @return void
     */
    public function setSpecialPrice(float $value): void;

    /**
     * Autogenerated description for getSpecialFromDate() interface method
     *
     * @return string
     */
    public function getSpecialFromDate(): string;

    /**
     * Autogenerated description for setSpecialFromDate() interface method
     *
     * @param string $value
     * @return void
     */
    public function setSpecialFromDate(string $value): void;

    /**
     * Autogenerated description for getSpecialToDate() interface method
     *
     * @return string
     */
    public function getSpecialToDate(): string;

    /**
     * Autogenerated description for setSpecialToDate() interface method
     *
     * @param string $value
     * @return void
     */
    public function setSpecialToDate(string $value): void;

    /**
     * Autogenerated description for getLinks() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\LinkInterface[]
     */
    public function getLinks(): array;

    /**
     * Autogenerated description for setLinks() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\LinkInterface[] $value
     * @return void
     */
    public function setLinks(array $value): void;

    /**
     * Autogenerated description for getCanonicalUrl() interface method
     *
     * @return string
     */
    public function getCanonicalUrl(): string;

    /**
     * Autogenerated description for setCanonicalUrl() interface method
     *
     * @param string $value
     * @return void
     */
    public function setCanonicalUrl(string $value): void;

    /**
     * Autogenerated description for getPriceView() interface method
     *
     * @return string
     */
    public function getPriceView(): string;

    /**
     * Autogenerated description for setPriceView() interface method
     *
     * @param string $value
     * @return void
     */
    public function setPriceView(string $value): void;

    /**
     * Autogenerated description for getLinksPurchasedSeparately() interface method
     *
     * @return bool
     */
    public function getLinksPurchasedSeparately(): bool;

    /**
     * Autogenerated description for setLinksPurchasedSeparately() interface method
     *
     * @param bool $value
     * @return void
     */
    public function setLinksPurchasedSeparately(bool $value): void;

    /**
     * Autogenerated description for getOnlyXLeftInStock() interface method
     *
     * @return float
     */
    public function getOnlyXLeftInStock(): float;

    /**
     * Autogenerated description for setOnlyXLeftInStock() interface method
     *
     * @param float $value
     * @return void
     */
    public function setOnlyXLeftInStock(float $value): void;

    /**
     * Autogenerated description for getProductOptions() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\ProductOptionInterface[]
     */
    public function getProductOptions(): array;

    /**
     * Autogenerated description for setProductOptions() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\ProductOptionInterface[] $value
     * @return void
     */
    public function setProductOptions(array $value): void;

    /**
     * Autogenerated description for getShopperInputOptions() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\ProductShopperInputOptionInterface[]
     */
    public function getShopperInputOptions(): array;

    /**
     * Autogenerated description for setShopperInputOptions() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\ProductShopperInputOptionInterface[] $value
     * @return void
     */
    public function setShopperInputOptions(array $value): void;
}
