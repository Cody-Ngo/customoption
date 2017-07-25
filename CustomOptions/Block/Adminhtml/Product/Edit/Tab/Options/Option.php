<?php
namespace A\CustomOptions\Block\Adminhtml\Product\Edit\Tab\Options;

class Option extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Options\Option
{
    protected $_template = 'A_CustomOptions::catalog/product/edit/options/option.phtml';

    /**
     * Class constructor
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Config\Model\Config\Source\Yesno $configYesNo,
        \Magento\Catalog\Model\Config\Source\Product\Options\Type $optionType,
        \Magento\Catalog\Model\Product $product,
        \Magento\Framework\Registry $registry,
        \Magento\Catalog\Model\ProductOptions\ConfigInterface $productOptionConfig,
        array $data = []
    )
    {
        parent::__construct(
            $context,
            $configYesNo,
            $optionType,
            $product,
            $registry,
            $productOptionConfig,
            $data
        );
    }

    /**
     * Retrieve html templates for different types of product custom options
     *
     * @return string
     */
    public function getTemplatesHtml()
    {
        $canEditPrice = $this->getCanEditPrice();
        $canReadPrice = $this->getCanReadPrice();

        $this->getChildBlock('xfile_option_type')
            ->setCanReadPrice($canReadPrice)
            ->setCanEditPrice($canEditPrice);
        $templates = parent::getTemplatesHtml() . "\n" .
            $this->getChildHtml('xfile_option_type');

        return $templates;
    }


}