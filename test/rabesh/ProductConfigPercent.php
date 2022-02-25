<?php

namespace SkyPremium\AttributeProduct\Model\Attribute\Source;

use SkyPremium\AttributeProduct\Helper\SourceTable;
use SkyPremium\ConfigurableAttributeOption\Model\ResourceModel\Option\CollectionFactory;

class ProductConfigPercent extends BaseProductConfig
{
    const ATTR_CODE = 'product_config_percent';

    public function __construct(
        SourceTable $sourceTableHelper,
        CollectionFactory $collectionFactory,
        \Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory,
        \Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory $attrOptionFactory
    ) {
        parent::__construct($sourceTableHelper, $collectionFactory, $attrOptionCollectionFactory, $attrOptionFactory, self::ATTR_CODE);
    }

    public function getKeyValueOptions()
    {
        return [
            '2' => __('2%'),
            '5' => __('5%'),
            '10' => __('10%')
        ];
    }
}
