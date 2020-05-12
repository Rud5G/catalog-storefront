<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catalog.proto

namespace Magento\CatalogStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.catalogStorefrontApi.proto.Product</code>
 */
class Product extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string attribute_set_id = 2;</code>
     */
    protected $attribute_set_id = '';
    /**
     * Generated from protobuf field <code>bool has_options = 3;</code>
     */
    protected $has_options = false;
    /**
     * Generated from protobuf field <code>string created_at = 5;</code>
     */
    protected $created_at = '';
    /**
     * Generated from protobuf field <code>string updated_at = 6;</code>
     */
    protected $updated_at = '';
    /**
     * TODO: has_options most of the fields below are taken from DB?
     * TODO: required_options ?
     * TODO: row_id ? - should be moved to staging service
     * TODO: created_in ? - should be moved to staging service
     * TODO: updated_in ? - should be moved to staging service
     * TODO: entity_id vs id, id is used in elastic?
     *
     * Generated from protobuf field <code>string sku = 7;</code>
     */
    protected $sku = '';
    /**
     * Generated from protobuf field <code>string type_id = 8;</code>
     */
    protected $type_id = '';
    /**
     * Generated from protobuf field <code>string status = 9;</code>
     */
    protected $status = '';
    /**
     * Generated from protobuf field <code>string stock_status = 10;</code>
     */
    protected $stock_status = '';
    /**
     * Generated from protobuf field <code>string name = 17;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string description = 18;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>string short_description = 19;</code>
     */
    protected $short_description = '';
    /**
     * Generated from protobuf field <code>string url_key = 20;</code>
     */
    protected $url_key = '';
    /**
     * TODO: qty is missing for only-x-left-in-stock functionality
     * TODO: Why missing meta fields?
     *
     * Generated from protobuf field <code>string tax_class_id = 28;</code>
     */
    protected $tax_class_id = '';
    /**
     * Generated from protobuf field <code>float weight = 29;</code>
     */
    protected $weight = 0.0;
    /**
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Image image = 31;</code>
     */
    protected $image = null;
    /**
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Image small_image = 32;</code>
     */
    protected $small_image = null;
    /**
     * TODO: Rename to thumbnail_image?
     *
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Image thumbnail = 33;</code>
     */
    protected $thumbnail = null;
    /**
     * Generated from protobuf field <code>string swatch_image = 34;</code>
     */
    protected $swatch_image = '';
    /**
     *    repeated Image media_gallery = 35;//-
     * where to display product
     *
     * Generated from protobuf field <code>string visibility = 37;</code>
     */
    protected $visibility = '';
    /**
     *    PriceRange prices = 44;//-
     * TODO: Uncomment options
     *    repeated Option options = 46;
     *    repeated Variant variants = 47;//-
     *
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.DynamicAttributeValue dynamic_attributes = 50;</code>
     */
    private $dynamic_attributes;
    /**
     * TODO: qty is missing for only-x-left-in-stock functionality
     * TODO: Meta fields not populated by catalog SF app
     *
     * Generated from protobuf field <code>string meta_description = 22;</code>
     */
    protected $meta_description = '';
    /**
     * Generated from protobuf field <code>string meta_keyword = 23;</code>
     */
    protected $meta_keyword = '';
    /**
     * Generated from protobuf field <code>string meta_title = 24;</code>
     */
    protected $meta_title = '';
    /**
     * TODO: Questionable attributes go below for compatibility with existing catalog SF branch during refactoring
     *
     * Generated from protobuf field <code>string required_options = 70;</code>
     */
    protected $required_options = '';
    /**
     * Generated from protobuf field <code>string created_in = 74;</code>
     */
    protected $created_in = '';
    /**
     * Generated from protobuf field <code>string updated_in = 75;</code>
     */
    protected $updated_in = '';
    /**
     * Generated from protobuf field <code>string quantity_and_stock_status = 76;</code>
     */
    protected $quantity_and_stock_status = '';
    /**
     * Generated from protobuf field <code>string options_container = 77;</code>
     */
    protected $options_container = '';
    /**
     * Generated from protobuf field <code>string msrp_display_actual_price_type = 78;</code>
     */
    protected $msrp_display_actual_price_type = '';
    /**
     * Generated from protobuf field <code>string is_returnable = 79;</code>
     */
    protected $is_returnable = '';
    /**
     * Generated from protobuf field <code>string url_suffix = 80;</code>
     */
    protected $url_suffix = '';
    /**
     * TODO: May need to be a complex type
     *
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.Option options = 81;</code>
     */
    private $options;
    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.UrlRewrite url_rewrites = 82;</code>
     */
    private $url_rewrites;
    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.Variant variants = 83;</code>
     */
    private $variants;
    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.ConfigurableOption configurable_options = 84;</code>
     */
    private $configurable_options;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $attribute_set_id
     *     @type bool $has_options
     *     @type string $created_at
     *     @type string $updated_at
     *     @type string $sku
     *           TODO: has_options most of the fields below are taken from DB?
     *           TODO: required_options ?
     *           TODO: row_id ? - should be moved to staging service
     *           TODO: created_in ? - should be moved to staging service
     *           TODO: updated_in ? - should be moved to staging service
     *           TODO: entity_id vs id, id is used in elastic?
     *     @type string $type_id
     *     @type string $status
     *     @type string $stock_status
     *     @type string $name
     *     @type string $description
     *     @type string $short_description
     *     @type string $url_key
     *     @type string $tax_class_id
     *           TODO: qty is missing for only-x-left-in-stock functionality
     *           TODO: Why missing meta fields?
     *     @type float $weight
     *     @type \Magento\CatalogStorefrontApi\Proto\Image $image
     *     @type \Magento\CatalogStorefrontApi\Proto\Image $small_image
     *     @type \Magento\CatalogStorefrontApi\Proto\Image $thumbnail
     *           TODO: Rename to thumbnail_image?
     *     @type string $swatch_image
     *     @type string $visibility
     *              repeated Image media_gallery = 35;//-
     *           where to display product
     *     @type \Magento\CatalogStorefrontApi\Proto\DynamicAttributeValue[]|\Google\Protobuf\Internal\RepeatedField $dynamic_attributes
     *              PriceRange prices = 44;//-
     *           TODO: Uncomment options
     *              repeated Option options = 46;
     *              repeated Variant variants = 47;//-
     *     @type string $meta_description
     *           TODO: qty is missing for only-x-left-in-stock functionality
     *           TODO: Meta fields not populated by catalog SF app
     *     @type string $meta_keyword
     *     @type string $meta_title
     *     @type string $required_options
     *           TODO: Questionable attributes go below for compatibility with existing catalog SF branch during refactoring
     *     @type string $created_in
     *     @type string $updated_in
     *     @type string $quantity_and_stock_status
     *     @type string $options_container
     *     @type string $msrp_display_actual_price_type
     *     @type string $is_returnable
     *     @type string $url_suffix
     *     @type \Magento\CatalogStorefrontApi\Proto\Option[]|\Google\Protobuf\Internal\RepeatedField $options
     *           TODO: May need to be a complex type
     *     @type \Magento\CatalogStorefrontApi\Proto\UrlRewrite[]|\Google\Protobuf\Internal\RepeatedField $url_rewrites
     *     @type \Magento\CatalogStorefrontApi\Proto\Variant[]|\Google\Protobuf\Internal\RepeatedField $variants
     *     @type \Magento\CatalogStorefrontApi\Proto\ConfigurableOption[]|\Google\Protobuf\Internal\RepeatedField $configurable_options
     * }
     */
    public function __construct($data = null)
    {
        \Magento\CatalogStorefrontApi\Metadata\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, true);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string attribute_set_id = 2;</code>
     * @return string
     */
    public function getAttributeSetId()
    {
        return $this->attribute_set_id;
    }

    /**
     * Generated from protobuf field <code>string attribute_set_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAttributeSetId($var)
    {
        GPBUtil::checkString($var, true);
        $this->attribute_set_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool has_options = 3;</code>
     * @return bool
     */
    public function getHasOptions()
    {
        return $this->has_options;
    }

    /**
     * Generated from protobuf field <code>bool has_options = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasOptions($var)
    {
        GPBUtil::checkBool($var);
        $this->has_options = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string created_at = 5;</code>
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>string created_at = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkString($var, true);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string updated_at = 6;</code>
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Generated from protobuf field <code>string updated_at = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkString($var, true);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * TODO: has_options most of the fields below are taken from DB?
     * TODO: required_options ?
     * TODO: row_id ? - should be moved to staging service
     * TODO: created_in ? - should be moved to staging service
     * TODO: updated_in ? - should be moved to staging service
     * TODO: entity_id vs id, id is used in elastic?
     *
     * Generated from protobuf field <code>string sku = 7;</code>
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * TODO: has_options most of the fields below are taken from DB?
     * TODO: required_options ?
     * TODO: row_id ? - should be moved to staging service
     * TODO: created_in ? - should be moved to staging service
     * TODO: updated_in ? - should be moved to staging service
     * TODO: entity_id vs id, id is used in elastic?
     *
     * Generated from protobuf field <code>string sku = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSku($var)
    {
        GPBUtil::checkString($var, true);
        $this->sku = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string type_id = 8;</code>
     * @return string
     */
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Generated from protobuf field <code>string type_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setTypeId($var)
    {
        GPBUtil::checkString($var, true);
        $this->type_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string status = 9;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, true);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string stock_status = 10;</code>
     * @return string
     */
    public function getStockStatus()
    {
        return $this->stock_status;
    }

    /**
     * Generated from protobuf field <code>string stock_status = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setStockStatus($var)
    {
        GPBUtil::checkString($var, true);
        $this->stock_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 17;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, true);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 18;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, true);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string short_description = 19;</code>
     * @return string
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }

    /**
     * Generated from protobuf field <code>string short_description = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setShortDescription($var)
    {
        GPBUtil::checkString($var, true);
        $this->short_description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url_key = 20;</code>
     * @return string
     */
    public function getUrlKey()
    {
        return $this->url_key;
    }

    /**
     * Generated from protobuf field <code>string url_key = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setUrlKey($var)
    {
        GPBUtil::checkString($var, true);
        $this->url_key = $var;

        return $this;
    }

    /**
     * TODO: qty is missing for only-x-left-in-stock functionality
     * TODO: Why missing meta fields?
     *
     * Generated from protobuf field <code>string tax_class_id = 28;</code>
     * @return string
     */
    public function getTaxClassId()
    {
        return $this->tax_class_id;
    }

    /**
     * TODO: qty is missing for only-x-left-in-stock functionality
     * TODO: Why missing meta fields?
     *
     * Generated from protobuf field <code>string tax_class_id = 28;</code>
     * @param string $var
     * @return $this
     */
    public function setTaxClassId($var)
    {
        GPBUtil::checkString($var, true);
        $this->tax_class_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float weight = 29;</code>
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Generated from protobuf field <code>float weight = 29;</code>
     * @param float $var
     * @return $this
     */
    public function setWeight($var)
    {
        GPBUtil::checkFloat($var);
        $this->weight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Image image = 31;</code>
     * @return \Magento\CatalogStorefrontApi\Proto\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Image image = 31;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Magento\CatalogStorefrontApi\Proto\Image::class);
        $this->image = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Image small_image = 32;</code>
     * @return \Magento\CatalogStorefrontApi\Proto\Image
     */
    public function getSmallImage()
    {
        return $this->small_image;
    }

    /**
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Image small_image = 32;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\Image $var
     * @return $this
     */
    public function setSmallImage($var)
    {
        GPBUtil::checkMessage($var, \Magento\CatalogStorefrontApi\Proto\Image::class);
        $this->small_image = $var;

        return $this;
    }

    /**
     * TODO: Rename to thumbnail_image?
     *
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Image thumbnail = 33;</code>
     * @return \Magento\CatalogStorefrontApi\Proto\Image
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * TODO: Rename to thumbnail_image?
     *
     * Generated from protobuf field <code>.magento.catalogStorefrontApi.proto.Image thumbnail = 33;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\Image $var
     * @return $this
     */
    public function setThumbnail($var)
    {
        GPBUtil::checkMessage($var, \Magento\CatalogStorefrontApi\Proto\Image::class);
        $this->thumbnail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string swatch_image = 34;</code>
     * @return string
     */
    public function getSwatchImage()
    {
        return $this->swatch_image;
    }

    /**
     * Generated from protobuf field <code>string swatch_image = 34;</code>
     * @param string $var
     * @return $this
     */
    public function setSwatchImage($var)
    {
        GPBUtil::checkString($var, true);
        $this->swatch_image = $var;

        return $this;
    }

    /**
     *    repeated Image media_gallery = 35;//-
     * where to display product
     *
     * Generated from protobuf field <code>string visibility = 37;</code>
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     *    repeated Image media_gallery = 35;//-
     * where to display product
     *
     * Generated from protobuf field <code>string visibility = 37;</code>
     * @param string $var
     * @return $this
     */
    public function setVisibility($var)
    {
        GPBUtil::checkString($var, true);
        $this->visibility = $var;

        return $this;
    }

    /**
     *    PriceRange prices = 44;//-
     * TODO: Uncomment options
     *    repeated Option options = 46;
     *    repeated Variant variants = 47;//-
     *
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.DynamicAttributeValue dynamic_attributes = 50;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDynamicAttributes()
    {
        return $this->dynamic_attributes;
    }

    /**
     *    PriceRange prices = 44;//-
     * TODO: Uncomment options
     *    repeated Option options = 46;
     *    repeated Variant variants = 47;//-
     *
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.DynamicAttributeValue dynamic_attributes = 50;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\DynamicAttributeValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDynamicAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Magento\CatalogStorefrontApi\Proto\DynamicAttributeValue::class);
        $this->dynamic_attributes = $arr;

        return $this;
    }

    /**
     * TODO: qty is missing for only-x-left-in-stock functionality
     * TODO: Meta fields not populated by catalog SF app
     *
     * Generated from protobuf field <code>string meta_description = 22;</code>
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->meta_description;
    }

    /**
     * TODO: qty is missing for only-x-left-in-stock functionality
     * TODO: Meta fields not populated by catalog SF app
     *
     * Generated from protobuf field <code>string meta_description = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setMetaDescription($var)
    {
        GPBUtil::checkString($var, true);
        $this->meta_description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string meta_keyword = 23;</code>
     * @return string
     */
    public function getMetaKeyword()
    {
        return $this->meta_keyword;
    }

    /**
     * Generated from protobuf field <code>string meta_keyword = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setMetaKeyword($var)
    {
        GPBUtil::checkString($var, true);
        $this->meta_keyword = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string meta_title = 24;</code>
     * @return string
     */
    public function getMetaTitle()
    {
        return $this->meta_title;
    }

    /**
     * Generated from protobuf field <code>string meta_title = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setMetaTitle($var)
    {
        GPBUtil::checkString($var, true);
        $this->meta_title = $var;

        return $this;
    }

    /**
     * TODO: Questionable attributes go below for compatibility with existing catalog SF branch during refactoring
     *
     * Generated from protobuf field <code>string required_options = 70;</code>
     * @return string
     */
    public function getRequiredOptions()
    {
        return $this->required_options;
    }

    /**
     * TODO: Questionable attributes go below for compatibility with existing catalog SF branch during refactoring
     *
     * Generated from protobuf field <code>string required_options = 70;</code>
     * @param string $var
     * @return $this
     */
    public function setRequiredOptions($var)
    {
        GPBUtil::checkString($var, true);
        $this->required_options = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string created_in = 74;</code>
     * @return string
     */
    public function getCreatedIn()
    {
        return $this->created_in;
    }

    /**
     * Generated from protobuf field <code>string created_in = 74;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedIn($var)
    {
        GPBUtil::checkString($var, true);
        $this->created_in = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string updated_in = 75;</code>
     * @return string
     */
    public function getUpdatedIn()
    {
        return $this->updated_in;
    }

    /**
     * Generated from protobuf field <code>string updated_in = 75;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdatedIn($var)
    {
        GPBUtil::checkString($var, true);
        $this->updated_in = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string quantity_and_stock_status = 76;</code>
     * @return string
     */
    public function getQuantityAndStockStatus()
    {
        return $this->quantity_and_stock_status;
    }

    /**
     * Generated from protobuf field <code>string quantity_and_stock_status = 76;</code>
     * @param string $var
     * @return $this
     */
    public function setQuantityAndStockStatus($var)
    {
        GPBUtil::checkString($var, true);
        $this->quantity_and_stock_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string options_container = 77;</code>
     * @return string
     */
    public function getOptionsContainer()
    {
        return $this->options_container;
    }

    /**
     * Generated from protobuf field <code>string options_container = 77;</code>
     * @param string $var
     * @return $this
     */
    public function setOptionsContainer($var)
    {
        GPBUtil::checkString($var, true);
        $this->options_container = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string msrp_display_actual_price_type = 78;</code>
     * @return string
     */
    public function getMsrpDisplayActualPriceType()
    {
        return $this->msrp_display_actual_price_type;
    }

    /**
     * Generated from protobuf field <code>string msrp_display_actual_price_type = 78;</code>
     * @param string $var
     * @return $this
     */
    public function setMsrpDisplayActualPriceType($var)
    {
        GPBUtil::checkString($var, true);
        $this->msrp_display_actual_price_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string is_returnable = 79;</code>
     * @return string
     */
    public function getIsReturnable()
    {
        return $this->is_returnable;
    }

    /**
     * Generated from protobuf field <code>string is_returnable = 79;</code>
     * @param string $var
     * @return $this
     */
    public function setIsReturnable($var)
    {
        GPBUtil::checkString($var, true);
        $this->is_returnable = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url_suffix = 80;</code>
     * @return string
     */
    public function getUrlSuffix()
    {
        return $this->url_suffix;
    }

    /**
     * Generated from protobuf field <code>string url_suffix = 80;</code>
     * @param string $var
     * @return $this
     */
    public function setUrlSuffix($var)
    {
        GPBUtil::checkString($var, true);
        $this->url_suffix = $var;

        return $this;
    }

    /**
     * TODO: May need to be a complex type
     *
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.Option options = 81;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * TODO: May need to be a complex type
     *
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.Option options = 81;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\Option[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Magento\CatalogStorefrontApi\Proto\Option::class);
        $this->options = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.UrlRewrite url_rewrites = 82;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrlRewrites()
    {
        return $this->url_rewrites;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.UrlRewrite url_rewrites = 82;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\UrlRewrite[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrlRewrites($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Magento\CatalogStorefrontApi\Proto\UrlRewrite::class);
        $this->url_rewrites = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.Variant variants = 83;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.Variant variants = 83;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\Variant[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVariants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Magento\CatalogStorefrontApi\Proto\Variant::class);
        $this->variants = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.ConfigurableOption configurable_options = 84;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConfigurableOptions()
    {
        return $this->configurable_options;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.ConfigurableOption configurable_options = 84;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\ConfigurableOption[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConfigurableOptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Magento\CatalogStorefrontApi\Proto\ConfigurableOption::class);
        $this->configurable_options = $arr;

        return $this;
    }
}
